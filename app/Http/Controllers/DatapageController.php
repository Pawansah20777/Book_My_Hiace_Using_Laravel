<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatapageController extends Controller
{
    public function crud()
    {
        $booking = DB::table('booking')->get();
        return view('datapage',['booking'=>$booking]);
    }
}
