<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Product;

class cartController extends Controller
{
    // All data
    public function index(Request $request)
    {
        $data = [
            'cart' => $request->session()->get('cart')
        ];

        return view('cart')->with($data);
    }

    // Add item to cart
    public function addItem(Request $request)
    {
        
    }

    // Remove item from cart
    public function removeItem(Request $request)
    {

    }

    // Clear cart
    public function clearCart(Request $request)
    {

    }
}
