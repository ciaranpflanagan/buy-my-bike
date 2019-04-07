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

    public function thank_you(Request $request) {
    	// Retrieving product from database
        $product = DB::table('products')->where('slug', $request->slug)->first();
        
        // Adding sale into sales table
        $sale = DB::table('sales')->insert(
            ['product_id' => 1],
            ['name' => 'test'],
            ['amount' => 20]
        );
        
        return view('store.thank_you')->with('products', $product);
    }
}
