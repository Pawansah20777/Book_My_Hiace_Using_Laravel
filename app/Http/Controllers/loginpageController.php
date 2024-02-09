<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class loginpageController extends Controller
{
    public function index()
    {
        return view('loginpage');
    }

    public function register(Request $request)
{
     $request->validate(
        [
            'email' => 'required|email',
            'password' => 'required'
        ]
        );
echo "<pre>";
print_r($request->all());
}
}
