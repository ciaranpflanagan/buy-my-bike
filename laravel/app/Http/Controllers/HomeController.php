<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        // Retrieving data from database
        $data = DB::table('products')->get();
        $sales = DB::table('sales')->get();

        return view('home')->with('products', $data)->with('sales', $sales);
    }
}
