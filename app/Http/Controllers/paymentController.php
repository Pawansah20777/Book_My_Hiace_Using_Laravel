<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function register(Request $request)
{
     $request->validate(
        [
            'first name' => 'required',
            'last name' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required',
            'f' => 'required'

        ]
        );
echo "<pre>";
print_r($request->all());
}
}
