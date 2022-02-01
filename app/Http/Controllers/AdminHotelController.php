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
use App\Room;
use App\Booked;
use App\HotelImageAdmin;
use Carbon\Carbon;

class AdminHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function index()
    {
        $hotel = Hotel::latest()->paginate(6);
        // $hotelImage = HotelImageAdmin::all();
        return view('admindashboardlayout.indexAdminHotel' , compact('hotel'));
        // return view('userdashboard.allhotels' , compact('hotel'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $cities = City::all();
        $hotel = Hotel::latest()->first();
        // $hotelid = $hotel->id+1; 
        // $idhotel = Hotel::where('id',$hotel)->first();
        // dd($hotelid);
        $manager = Manager::all();
        return view('admindashboardlayout.addHotel' , compact('countries','cities','manager','hotel'));
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();

        // if($request->hasFile('file')){
        //     // $imageNew->hotel_id = $idHotel;
        //     $file = $request->file('file');
        //     $completeFileName = $file->getClientOriginalName();
        //     $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        //     $extension = $file->getClientOriginalExtension();
        //     $randomized = rand();
        //     $documents = str_replace(' ', '', $fileNameOnly).'-'.$randomized.''.time().'.'.$extension;
        //     $path = $file->storeAs('public/HotelAdmin', $documents);
        //     $test2 = $request->hasFile('file');
           
        //     $insert_doc = DB::table('hotel_image_admins')->insert([
        //             'imageName' => $documents,
        //         ]);
        // echo $documents;
        // die;
        // }

        
        

        $request->validate([
            'name' => 'required|unique:hotels|max:255', 
            'numberoffloor' => 'required', 
            'numberofroomsinonefloor' => 'required', 
            'stars' => 'required', 
            'salaryAtNight' => 'required', 
            // 'image' => 'mimes:jpeg,png,jpg|required', 
        ],[

            'name.required' =>'Please Enter the name of hotel !!',
            'name.unique' =>'Hotel name reserved.. Please try again !!',

            'numberoffloor.required' =>'Please Enter the Number of floors of hotel !!',

            'numberofroomsinonefloor.required' =>'Please enter the number of rooms on each floor of the hotel !!',

            'stars.required' =>'Please select a star rating for the hotel !!',

            'salaryAtNight.required' =>'Please select a price per night !!',

            // 'image.required' =>'Please select an Image for hotel !!',

            // 'image.mimes' =>'Image Hotel Must be jpeg,png or jpg extension !!',



        ]);
        

        // if($request->hasFile('file')) {
        //     $image = $request->file('file');
   
        //     $imageName = time() . '.' . $image->getClientOriginalName();
        //     $image->move(public_path('images_Admin_Hotel'),$imageName);
        //     // dd('yes');

        //     dd($imageName);
        //     $input->image()->create([
        //         'imageName' => $imageName,
        //     ]);
        //     return response()->json(['success'=>$imageName],200);
        // }


        // if($request->file('image')) {
        //     $file = $request->file('image');
        //     $name = time().'-'.$file->getClientOriginalName();
        //     $file->move('imagesHotelAdmin' , $name);
        //     $input['image'] = 'imagesHotelAdmin/'.$name;
        // } else {
        //     $input['image'] = "Null";
        // }

        // dd($input);
        

        // dd($input['image']);
        
       
        Hotel::create($input);
        // dd($input);
        Alert::toast('Hotel Created Successfully...', 'success');
        return redirect()->route('allhotels_admin');
        // return redirect()->route('allhotels_admin')->with('success' , 'Hotel Created Successfully...'); // without sweet alert

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
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
        $hotel = Hotel::where('id',$id)->first();
        $country = Country::all();
        $city = City::all();
        $manager = Manager::all();
        return view('admindashboardlayout.edithotel' , compact('hotel' , 'country' , 'city' , 'manager'));
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
        $hotel = Hotel::findOrfail($id);
        $x = $request->all();
        

        $request->validate([
            'name' => 'required|max:255', 
            'numberoffloor' => 'required', 
            'numberofroomsinonefloor' => 'required', 
            'stars' => 'required', 
            'salaryAtNight' => 'required', 
            'image' => 'mimes:jpeg,png,jpg|required', 
        ],[

            'name.required' =>'Please Enter the name of hotel !!',

            'numberoffloor.required' =>'Please Enter the Number of floors of hotel !!',

            'numberofroomsinonefloor.required' =>'Please enter the number of rooms on each floor of the hotel !!',

            'stars.required' =>'Please select a star rating for the hotel !!',

            'salaryAtNight.required' =>'Please select a price per night !!',

            'image.required' =>'Please select an Image for Hotel !!',

            'image.mimes' =>'Image Hotel Must be jpeg,png or jpg extension !!',



        ]);

        if ($request->image != '') {
            $path = public_path().'/';

            if ($hotel->image != '' && $hotel->image != Null) {
                $old_image = $path.$hotel->image;
                unlink($old_image);
            }

            $file = $request->file('image');
            $name = time().'-'.$file->getClientOriginalName();
            $file->move('imagesHotelAdmin' , $name);
            $x['image'] = 'imagesHotelAdmin/'.$name;
        }
        
        $hotel->update($x);
        Alert::info('Hotel Updated Successfully...', 'update');
        return redirect()->route('allhotels_admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $hotelId = $request->forHotelId;
        // $hotel = Hotel::findOrfail($id);
        $hotel = Hotel::where('id',$hotelId)->delete();
        // $hotel->forceDelete();
        Alert::warning('Hotel Deleted Successfully...', 'delete');
        return redirect()->route('allhotels_admin');
    } 
















    public function mianAdminHotel()
    {
        
        $bestBooking = Room::where('rating',5)->orwhere('rating',4)->paginate(2);
        // $bestBooking = Room::all();

        // $latestBookingRoom = Room::latest()->take(5)->get();
        $latestBookingRoom = Booked::latest()->take(5)->get();

        $data = User::select('id','created_at')->get()->groupBy(function($data){
            return Carbon::parse($data->created_at)->format('M');
        });

        $months=[];
        $userCount=[];

        foreach($data as $month => $values){
            $months[] = $month;
            $userCount[] = count($values);
        }


        $dataHotel = Hotel::select('country_id')->get()->groupBy(function($dataHotel){
            // return Country::where('id',$dataHotel->country_id)->first()->name; // egar loading
            return $dataHotel->country->name;
        });

        $countries=[];
        $hotelCount=[];

        foreach($dataHotel as $country => $values){
            $countries[] = $country;
            $hotelCount[] = count($values);
        }


        return view('admindashboardlayout.main-page',['data'=>$data , 'months'=>$months , 'userCount'=>$userCount,'dataHotel'=>$dataHotel,'countries'=>$countries,'hotelCount'=>$hotelCount , 'latestBookingRoom'=>$latestBookingRoom,'bestBooking'=>$bestBooking]);

        // return view('admindashboardlayout.main-page');
    }



}
