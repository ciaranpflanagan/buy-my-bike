<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
	// Index page for store section
    public function index() {
        return view('store.feed');
    }

    // Displays the product page
	public function product() {
        return view('store.product');
    }
}
