<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB; // import database
use App\Models\Product; // import model 

class productController extends Controller
{
    // Men Shoes data 
    public function menShoes() {

        $products = Product::where('product_category', 'Footwear')
                            ->where('product_type', 'Men')
                            ->get();

        return view('/MenShoes', ['products' => $products]);
    }

    // Men Clothes data
    public function menClothes() {

        $products = Product::where('product_category', 'Clothes')
                            ->where('product_type', 'Men')
                            ->get();

        return view('/MenClothes', ['products' => $products]);
    }

    // Women Shoes data
    public function womenShoes() {

        $products = Product::where('product_category', 'Footwear')
                            ->where('product_type', 'Women')
                            ->get();

        return view('/WomenShoes', ['products' => $products]);
    }   

    // Women Clothes data
    public function womenClothes() {

        $products = Product::where('product_category', 'Clothes')
                            ->where('product_type', 'Men')
                            ->get();

        return view('/WomenClothes', ['products' => $products]);
    }

}
