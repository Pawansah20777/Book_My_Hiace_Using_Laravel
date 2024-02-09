<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class pk3Controller extends Controller
{
    public function index()
    {
        return view('pk3');
    }

    public function register(Request $request)
{
     $request->validate(
        [
            'passengers' => 'required',
            'a'=> 'required'

        ]
        );
echo "<pre>";
print_r($request->all());
}
}
