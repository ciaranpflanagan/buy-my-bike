<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

	public function submit_contact(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        // Adding sale into sales table
        $contact = DB::table('contact')->insert([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
        
        return redirect()->back()->withErrors(['Thank You for contacting us!']);;
    }
}
