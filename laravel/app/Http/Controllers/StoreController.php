<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class StoreController extends Controller
{
	// Index page for store section
    public function index() {
        // Retrieving data from database
        $data = DB::table('products')->get();

        return view('store.feed')->with('products', $data);
    }

    // Displays the product page
	public function product(Request $request) {
        $product = DB::table('products')->where('slug', $request->slug)->get();
        
        return view('store.product')->with('products', $product);
    }
}
