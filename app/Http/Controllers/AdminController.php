<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function addProduct(){
        $product = new Product;
    }

    public function deleteProduct(Request $req){
        
    }

    public function editProduct(Request $req){

    }
}
