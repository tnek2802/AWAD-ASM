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

    //Admin product list functions start here
    public function adminProductList() {

        
        $products = Product::all();

        return view('/admin', ['products' => $products]);
    }

    public function addProduct(Request $req)
    {
        $products = new Product;
        $products->product_type = $req->product_type;
        $products->product_category = $req->product_category;
        $products->product_description = $req->product_description;
        $products->product_name = $req->product_name;
        $products->product_price = $req->product_price;
        $products->image = $req->image;
        $products->save();
        return redirect("addProduct");
    }

    public function deleteProduct($product_id)
    {
        $data = Product::find($product_id);
        $data->delete();
        return redirect("admin");
    }
    public function showProduct($product_id)
    {
        $products = Product::find($product_id);
        return view('/updateProduct', ['products' => $products]);
    }
    public function updateProduct(Request $req)
    {
        $data = Product::find($req->product_id);
        $data->product_type = $req->product_type;
        $data->product_category = $req->product_category;
        $data->product_description = $req->product_description;
        $data->product_name = $req->product_name;
        $data->product_price = $req->product_price;
        $data->image = $req->image;
        $data->save();        
        return redirect("admin");
    }
}
