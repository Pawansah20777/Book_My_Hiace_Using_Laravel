<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class registerpageController extends Controller
{
    public function index()
    {
        return view('registerpage');
    }

    public function register(Request $request)
{
     $request->validate(
        [
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required',
            'f' => 'required',
            'g' => 'required',
            'h' => 'required'
        ]
        );
echo "<pre>";
print_r($request->all());
}
}
