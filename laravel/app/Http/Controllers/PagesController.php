<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Handles shipping page
    public function shipping() {
        return view('shipping');
    }

    // Handles contact page
    public function contact() {
        return view('contact');
    }
}
