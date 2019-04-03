<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class PaymentController extends Controller {

    public function index(Request $request) {
    	
        // Retrieving product from database
        $product = DB::table('products')->where('slug', $request->slug)->get();
        
        return view('store.pay')->with('products', $product);
    }
}
