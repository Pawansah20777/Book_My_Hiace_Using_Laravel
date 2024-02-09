<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class acontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = DB::table('booking')->get();
        return view('main',['booking'=>$booking]);
    }
    public function datapage()
    {
        $booking = DB::table('booking')->get();
        return view('a',['booking'=>$booking]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate(
           [
               'date' => 'required',
               'from' => 'required',
               'to' => 'required'

           ]
           );
//    echo "<pre>";
//    print_r($request->all());




        DB::table('booking')->insert([
            'journey' => $request -> date,
            'fron' => $request -> from,
            'to' => $request -> to,
            ]);
            return redirect(route('datapage')) ->with('status','booking Added !!');


        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $booking = DB::table('booking')->find($id);
        return view('editform',['booking'=>$booking]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('booking')->where('id',$id)->update([
            'journey' => $request -> date,
            'fron' => $request -> from,
            'to' => $request -> to,
        ]);
        return redirect(route('datapage'))->with('status','booking Upadted !!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('booking')->where('id',$id)->delete();
        return redirect(route('datapage'))->with('status','booking Deleted !!');
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
