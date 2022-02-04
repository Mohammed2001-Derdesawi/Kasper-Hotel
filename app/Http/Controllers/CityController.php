<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities=City::paginate(10);
        $countries=Country::all();
        return view('admindashboardlayout.city',compact('cities','countries'));
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
        $request->validate([
            'name' => 'required|unique:cities'
        ] , [
            'name.required' => 'city name is required',
            'name.unique' => 'city name reserved.. Please try again',
        ]);



        City::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $city=City::findOrFail($request->cityid);
        if($request->name!=$city->name)
        {
            $request->validate([
                'name' => 'required|unique:cities'
            ] , [
                'name.required' => 'city name is required',
                'name.unique' => 'city name reserved.. Please try again',
            ]);
        }
        else{
            $request->validate([
                'name' => 'required'
            ] , [
                'name.required' => 'city name is required',

            ]);
        }

         $city->update([
               'name'=>$request->name,
               'manager_id'=>$request->country_id
         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city=City::findOrFail($id);
        $city->delete();
        return redirect()->route('admin.city');
    }
}
