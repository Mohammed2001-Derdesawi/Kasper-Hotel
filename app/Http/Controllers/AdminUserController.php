<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Country;
use App\City;
use App\Manager;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
         $this->middleware('admin');
    }

    public function index()
    {
        //$users = Auth::user()->all();

        $users = User::all();
        return view('admindashboardlayout.allusers' , compact('users'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->all();

        $validate = $request->validate([

            'name' => 'required',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|max:255',
            'image' => 'mimes:png,jpg,jpeg',

        ] , [

            'name.required' => 'user name is required',

            'email.required' => 'email is required',
            'email.max' => 'email is too long',
            'email.unique' => 'email is reserved',

            'password.required' => 'password is required',
            'password.max' => 'password is too long',

            'image.required' => 'user image is required',

            'image.mimes' => 'user image must be jpg , png or jpeg extension',

        ]);
        if(!$validate)
        {
            return response()->json('error',422);
        }


        if ($request->file('image')) {
            $file = $request->file('image');
            $name = time().'-'.$file->getClientOriginalName();
            $file->move('userImageAdmin' , $name);
            $user['image'] = 'userImageAdmin/'.$name;
        }


        $user['password'] = encrypt('password');


        User::create($user);
        Alert::toast('User Created Successfully...', 'succes');
        return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $userId = $request->deluser;
        $user = User::where('id',$userId)->delete();
        // $user = User::findOrfail($id);
        // $user = User::where('id',$id)->first();
        // $user->forceDelete();
        Alert::warning('User Deleted Successfully...', 'delete');
        return redirect()->route('users');
    }


}
