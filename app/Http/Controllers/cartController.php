<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class cartController extends Controller
{
    // All data
    public function index()
    {
        $cart = session()->get('cart');

        return view('cart')->with($cart);
    }

    // Add item to cart
    public function addItem(Request $request)
    {
        $product_id = $request->input('product_id');
        
        $product = Product::find($product_id);
        
        $cart = session()->get('cart');

        // dd($cart);
        if (!$cart) {
            $cart = [
                $product_id => [
                    "product_name" => $product->product_name,
                    "quantity" => 1,
                    "product_price" => $product->product_price
                ]
            ];
            
            session()->put('cart', $cart);
            session()->flash('success', 'Product added to cart successfully!');
            return redirect()->back();
        }

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity']++;

            session()->put('cart', $cart);
            session()->flash('success', 'Product added to cart successfully!');
            return redirect()->back();
        }

        $cart[$product_id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price
        ];

        session()->put('cart', $cart);
        session()->flash('success', 'Product added to cart successfully!');

        dd(session('success'));

        return redirect()->back();
    }

    // Remove item from cart
    public function removeItem($product_id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$product_id])) {
            unset($cart[$product_id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }
}
