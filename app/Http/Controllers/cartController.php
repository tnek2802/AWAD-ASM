<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ClothesSize;
use App\Models\ShoeSize;
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
        $size = $request->input('size');
        $product = Product::find($product_id);
        dd($product);
        $cart = session()->get('cart');
        
        if (!$cart) {
            $cart = [
                $product_id => [
                    "product_name" => $product->product_name,
                    "quantity" => 1,
                    "product_price" => $product->product_price,
                    "size" => $size,
                ]
            ];
            
            session()->put('cart', $cart);
            dd($cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if (isset($cart[$product_id][$size])) {
            $cart[$product_id][$size]['quantity']++;

            session()->put('cart', $cart);
            dd($cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $cart[$product_id] = [
            "product_name" => $product->name,
            "quantity" => 1,
            "product_price" => $product->price,
            "size" => $size,
        ];

        session()->put('cart', $cart);
        dd($cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
