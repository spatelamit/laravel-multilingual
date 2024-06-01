<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CartController extends Controller
{
    public function index()
    {
        // cart items from session
        $cart = session()->get('cart');
        return view('cart.cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        $product = Product::findOrFail($productId);

        // Add product to cart in session
        $cart = session()->get('cart');
        $cart[$productId] = [
            'product' => $product,
            'quantity' => $quantity,
        ];
        session()->put('cart', $cart);
        // return redirect('/cart');
        $locale = app()->getLocale();
        return redirect()->route('cart.index', ['locale' => $locale]);
    }

    public function remove(Request $request)
    {
        $productId = $request->input('product_id');

        // Remove product from cart in session
        $cart = session()->get('cart');
        unset($cart[$productId]);
        session()->put('cart', $cart);

        return redirect('/cart');
    }
}
