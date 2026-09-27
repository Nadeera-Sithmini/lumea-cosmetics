<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::where('id', $request->product_id)
            ->where('is_active', true)
            ->firstOrFail();

        $quantity = (int) $request->quantity;

        if ($quantity > $product->stock) {
            return back()->with('error', 'Sorry, only ' . $product->stock . ' items are available.');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $newQuantity = $cart[$product->id]['quantity'] + $quantity;

            if ($newQuantity > $product->stock) {
                return back()->with('error', 'You cannot add more than ' . $product->stock . ' items.');
            }

            $cart[$product->id]['quantity'] = $newQuantity;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => (float) $product->price,
                'image' => $product->image,
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart);

        return redirect()
            ->route('cart.index')
            ->with('success', 'Product added to cart successfully!');
    }

    public function index()
    {
        $cart = session()->get('cart', []);

        $subtotal = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        return view('cart', compact('cart', 'subtotal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart', []);

        if (!isset($cart[$id])) {
            return back()->with('error', 'Product not found in cart.');
        }

        $product = Product::findOrFail($id);
        $quantity = (int) $request->quantity;

        if ($quantity > $product->stock) {
            return back()->with('error', 'Only ' . $product->stock . ' items are available.');
        }

        $cart[$id]['quantity'] = $quantity;

        session()->put('cart', $cart);

        return back()->with('success', 'Cart updated successfully!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Product removed from cart.');
    }
}