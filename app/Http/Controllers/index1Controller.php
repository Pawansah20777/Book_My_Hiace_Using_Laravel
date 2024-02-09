<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class index1Controller extends Controller
{
    public function index()
    {
        return view('index1');
    }

    public function register(Request $request)
{
     $request->validate(
        [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'passengers' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'male' => 'required',
            'female' => 'required'


        ]
        );
echo "<pre>";
print_r($request->all());
}
}
