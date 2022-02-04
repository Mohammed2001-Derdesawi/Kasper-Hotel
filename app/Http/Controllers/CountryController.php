<?php

namespace App\Http\Controllers;

use App\Country;
use App\Manager;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries=Country::paginate(10);
        $manager=Manager::all();
        return view('admindashboardlayout.country',compact('countries','manager'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:countries'
        ] , [
            'name.required' => 'country name is required',
            'name.unique' => 'country name reserved.. Please try again',
        ]);



        Country::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $country=Country::findOrFail($request->countryid);
        if($request->name!=$country->name)
        {
            $request->validate([
                'name' => 'required|unique:countries'
            ] , [
                'name.required' => 'country name is required',
                'name.unique' => 'country name reserved.. Please try again',
            ]);
        }
        else{
            $request->validate([
                'name' => 'required'
            ] , [
                'name.required' => 'country name is required',

            ]);
        }

         $country->update([
               'name'=>$request->name,
               'manager_id'=>$request->manager_id
         ]);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country=Country::findOrFail($id);
        $country->delete();
        return redirect()->route('admin.country');
    }
}
