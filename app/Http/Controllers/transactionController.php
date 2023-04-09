<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB; // import database
use App\Models\Transaction; // import transaction 
use App\Models\Product; // import model 

class transactionController extends Controller
{
    // public function getOrder(Request $req)
    // {
    //     $transaction_id = Transaction::find($req->user_id);
    //     foreach ($transaction_id->products as $product_id) {
    //         $roles = Transaction::find(1)->roles()->orderBy('name')->get();
    //     }
    //     $products = Product::find($req->user_id);
    //     return view('home', ['products' => $products]);
    // }

    public function getOrderDetails($id)
    {
       $orders = Transaction::where('user_id', $id) -> get();
       return view('orderDetails', ['orders' => $orders]);
    }
}
