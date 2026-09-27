<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Checkout Page
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()
                ->route('cart.index')
                ->with('error', 'Your cart is empty.');
        }

        $subtotal = collect($cart)->sum(
            fn ($item) => $item['price'] * $item['quantity']
        );

        /*
        |--------------------------------------------------------------------------
        | Coupon
        |--------------------------------------------------------------------------
        */

        $coupon = null;
        $discount = 0;

        $couponCode = session('coupon_code');

        if ($couponCode) {

            $coupon = Coupon::where('code', $couponCode)->first();

            if ($coupon && $coupon->isValid()) {

                $discount = $coupon->calculateDiscount(
                    (float) $subtotal
                );

            } else {

                session()->forget([
                    'coupon_code',
                    'coupon_discount',
                ]);

                $coupon = null;
                $discount = 0;
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Shipping
        |--------------------------------------------------------------------------
        */

        $shipping = $subtotal >= 10000
            ? 0
            : 450;

        /*
        |--------------------------------------------------------------------------
        | Final Total
        |--------------------------------------------------------------------------
        */

        $total = max(
            0,
            $subtotal + $shipping - $discount
        );

        return view(
            'checkout',
            compact(
                'cart',
                'subtotal',
                'shipping',
                'discount',
                'coupon',
                'total'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Apply Coupon
    |--------------------------------------------------------------------------
    */

    public function applyCoupon(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|string|max:100',
        ]);

        $cart = session()->get('cart', []);

        if (empty($cart)) {

            return redirect()
                ->route('cart.index')
                ->with('error', 'Your cart is empty.');
        }

        $subtotal = collect($cart)->sum(
            fn ($item) => $item['price'] * $item['quantity']
        );

        $code = strtoupper(trim($request->coupon_code));

        $coupon = Coupon::where('code', $code)->first();

        /*
        |--------------------------------------------------------------------------
        | Coupon Not Found
        |--------------------------------------------------------------------------
        */

        if (!$coupon) {

            return back()
                ->withInput()
                ->with('error', 'Invalid coupon code.');
        }

        /*
        |--------------------------------------------------------------------------
        | Coupon Not Active / Expired
        |--------------------------------------------------------------------------
        */

        if (!$coupon->isValid()) {

            return back()
                ->withInput()
                ->with('error', 'This coupon is expired or unavailable.');
        }

        /*
        |--------------------------------------------------------------------------
        | Minimum Order
        |--------------------------------------------------------------------------
        */

        if ($subtotal < (float) $coupon->minimum_order) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Minimum order amount for this coupon is LKR '
                    . number_format(
                        (float) $coupon->minimum_order,
                        2
                    )
                    . '.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Calculate Discount
        |--------------------------------------------------------------------------
        */

        $discount = $coupon->calculateDiscount(
            (float) $subtotal
        );

        if ($discount <= 0) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'This coupon cannot be applied to your current order.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Save Coupon in Session
        |--------------------------------------------------------------------------
        */

        session()->put([
            'coupon_code' => $coupon->code,
            'coupon_discount' => $discount,
        ]);

        return back()->with(
            'success',
            'Coupon "' . $coupon->code . '" applied successfully!'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Remove Coupon
    |--------------------------------------------------------------------------
    */

    public function removeCoupon()
    {
        session()->forget([
            'coupon_code',
            'coupon_discount',
        ]);

        return back()->with(
            'success',
            'Coupon removed successfully.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Place Order
    |--------------------------------------------------------------------------
    */

    public function placeOrder(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'address' => 'required|string|max:1000',
            'city' => 'required|string|max:100',
            'payment_method' => 'required|in:cash_on_delivery',
        ]);

        $cart = session()->get('cart', []);

        if (empty($cart)) {

            return redirect()
                ->route('cart.index')
                ->with('error', 'Your cart is empty.');
        }

        DB::beginTransaction();

        try {

            /*
            |--------------------------------------------------------------------------
            | Validate Products & Stock
            |--------------------------------------------------------------------------
            */

            $subtotal = 0;

            foreach ($cart as $item) {

                $product = Product::find($item['id']);

                if (!$product || !$product->is_active) {

                    throw new \Exception(
                        'One of the products in your cart is no longer available.'
                    );
                }

                if ($item['quantity'] > $product->stock) {

                    throw new \Exception(
                        'Not enough stock available for '
                        . $product->name
                        . '.'
                    );
                }

                $subtotal += $product->price * $item['quantity'];
            }


            /*
            |--------------------------------------------------------------------------
            | Re-check Coupon
            |--------------------------------------------------------------------------
            */

            $coupon = null;
            $discount = 0;

            $couponCode = session('coupon_code');

            if ($couponCode) {

                $coupon = Coupon::where('code', $couponCode)
                    ->lockForUpdate()
                    ->first();

                if ($coupon && $coupon->isValid()) {

                    $discount = $coupon->calculateDiscount(
                        (float) $subtotal
                    );

                } else {

                    $coupon = null;
                    $discount = 0;

                    session()->forget([
                        'coupon_code',
                        'coupon_discount',
                    ]);
                }
            }


            /*
            |--------------------------------------------------------------------------
            | Shipping
            |--------------------------------------------------------------------------
            */

            $shipping = $subtotal >= 10000
                ? 0
                : 450;


            /*
            |--------------------------------------------------------------------------
            | Final Total
            |--------------------------------------------------------------------------
            */

            $total = max(
                0,
                $subtotal + $shipping - $discount
            );


            /*
            |--------------------------------------------------------------------------
            | Create Order
            |--------------------------------------------------------------------------
            */

            $order = Order::create([
                'user_id' => auth()->id(),

                'customer_name' => $request->customer_name,

                'email' => $request->email,

                'phone' => $request->phone,

                'address' => $request->address,

                'city' => $request->city,

                'subtotal' => $subtotal,

                'shipping' => $shipping,

                'total' => $total,

                'status' => 'pending',

                'payment_method' => $request->payment_method,
            ]);


            /*
            |--------------------------------------------------------------------------
            | Order Items + Stock
            |--------------------------------------------------------------------------
            */

            foreach ($cart as $item) {

                $product = Product::findOrFail(
                    $item['id']
                );

                $itemTotal =
                    $product->price *
                    $item['quantity'];

                OrderItem::create([
                    'order_id' => $order->id,

                    'product_id' => $product->id,

                    'product_name' => $product->name,

                    'price' => $product->price,

                    'quantity' => $item['quantity'],

                    'total' => $itemTotal,
                ]);

                $product->decrement(
                    'stock',
                    $item['quantity']
                );
            }


            /*
            |--------------------------------------------------------------------------
            | Increase Coupon Usage
            |--------------------------------------------------------------------------
            */

            if ($coupon) {

                $coupon->increment('used_count');
            }


            /*
            |--------------------------------------------------------------------------
            | Clear Sessions
            |--------------------------------------------------------------------------
            */

            session()->forget([
                'cart',
                'coupon_code',
                'coupon_discount',
            ]);


            DB::commit();


            return redirect()
                ->route(
                    'checkout.success',
                    $order->id
                );

        } catch (\Exception $e) {

            DB::rollBack();

            return back()
                ->withInput()
                ->with(
                    'error',
                    $e->getMessage()
                );
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Order Success
    |--------------------------------------------------------------------------
    */

    public function success(Order $order)
    {
        return view(
            'order-success',
            compact('order')
        );
    }
}