<?php

namespace App\Http\Controllers\Taxi;

use App\Taxi;
use Illuminate\Http\Request;

class TaxiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $taxi = Taxi::paginate(8);


        return view('userdashboard.taxi.taxi' , [
            'taxi' => $taxi,
        ]);
    }

    public function details($id){
             $taxi = Taxi::findOrfail($id);
        return view('userdashboard.taxi.detailsCars' , [
            'taxi' => $taxi,
        ]);
    }


    public function booknow($id){
        $taxi = Taxi::all();
        return view('userdashboard.taxi.BookNowTaxi' , [
            'taxi' => $taxi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
