<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB; // import database
use App\Models\Transaction; // import transaction 
use App\Models\Product; // import model 

class transactionController extends Controller
{
    public function getOrder(Request $req)
    {
        $products = Product::find($req->user_id);
        return view('home', ['products' => $products]);
    }
}
