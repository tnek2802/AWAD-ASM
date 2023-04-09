<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ClothesSize;
use App\Models\ShoeSize;

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
        $size = $request->input('size'); // S M L XL
        $productKey = $product_id . $size;
        $product = Product::find($product_id);

        if ($product->product_category == "Clothes")
            $stock = ClothesSize::where('product_id', $product_id)->value($size);
        else
            $stock = ShoeSize::where('product_id', $product_id)->value($size);

        $cart = session()->get('cart');
        // dd($cart);
        // FIRST CONDITION -> Cart session not set
        if (!$cart) {
            if ($stock <= 0) {
                return redirect()->back()->with('failure', 'Product is out of stock!');
            }

            $cart = [
                $productKey => [
                    "product_id" => $product->product_id,
                    "product_name" => $product->product_name,
                    "quantity" => 1,
                    "product_price" => $product->product_price,
                    "size" => $size,
                ]
            ];

            session()->put('cart', $cart);
            session()->flash('status', 'Product added to cart successfully!');
            return redirect()->back();
        }

        // SECOND CONDITION -> Cart & Product alrdy added 
        if (isset($cart[$productKey])) {

            $cart[$productKey]['quantity']++;

            if ($stock < $cart[$productKey]['quantity']) {
                return redirect()->back()->with('failure', 'Product is out of stock!');
            }

            session()->put('cart', $cart);
            session()->flash('status', 'Product added to cart successfully!');
            return redirect()->back();
        }

        // THIRD CONDITION -> Cart existed but Product not added yet
            if ($stock <= 0) {
                return redirect()->back()->with('status', 'Product is out of stock!');
            }

            $cart[$productKey] = [
                "product_id" => $product->product_id,
                "product_name" => $product->product_name,
                "quantity" => 1,
                "product_price" => $product->product_price,
                "size" => $size,
            ];

        session()->put('cart', $cart);
        session()->flash('status', 'Product added to cart successfully!');
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
