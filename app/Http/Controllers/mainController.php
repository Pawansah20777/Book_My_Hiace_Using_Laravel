<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function register(Request $request)
{
     $request->validate(
        [
            'date' => 'required',
            'from' => 'required',
            'to' => 'required'

        ]
        );
echo "<pre>";
print_r($request->all());
}
}
