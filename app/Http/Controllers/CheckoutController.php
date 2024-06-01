<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
      public function index()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_map(function($item) {
            return $item['product']->price * $item['quantity'];
        }, $cart));

        return view('checkout.checkout', compact('cart', 'total'));
    }
    

    public function process(Request $request)
    {
        // Here you can add your order processing logic (e.g., payment gateway integration)
        
        // Clear the cart
        session()->forget('cart');

       $locale = app()->getLocale();
        return redirect()->route('home', ['locale' => $locale])
                         ->with('success', __('lang.order_placed_msg'));
    }
}
