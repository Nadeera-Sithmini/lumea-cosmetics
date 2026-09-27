<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Show the current user's wishlist.
     */
    public function index()
    {
        $wishlists = Auth::user()
            ->wishlists()
            ->with('product')
            ->latest()
            ->get();

        return view('wishlist', compact('wishlists'));
    }

    /**
     * Add or remove a product from wishlist.
     */
    public function toggle(Product $product)
    {
        $wishlist = Wishlist::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        if ($wishlist) {
            $wishlist->delete();

            return back()->with(
                'success',
                $product->name . ' removed from your wishlist.'
            );
        }

        Wishlist::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
        ]);

        return back()->with(
            'success',
            $product->name . ' added to your wishlist.'
        );
    }

    /**
     * Remove a product from wishlist.
     */
    public function remove(Wishlist $wishlist)
    {
        abort_unless(
            $wishlist->user_id === Auth::id(),
            403
        );

        $wishlist->delete();

        return back()->with(
            'success',
            'Product removed from your wishlist.'
        );
    }
}