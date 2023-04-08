<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function showProduct(){
        $product = Product::all();
        return view('adminPanel',['products' => $product]);
        //$products as $product in view
    }

    public function addProduct(){
        $product = new Product;
        //details
        $product->save();
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->save();
        return redirect('adminPanel');
    }

    public function editProduct(Request $req){
        $product = Product::find($req->id);
        //details
        $product->save();
    }

    public function showEdit($id){
        $product = Product::find($id);

    }
}
