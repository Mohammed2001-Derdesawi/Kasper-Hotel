<?php

namespace App\Http\Controllers;

use App\Booked;
use App\Hotel;
use App\City;
use App\Country;
use App\Room;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datahotel = Hotel::paginate(8);
        $datacountry  = Country::paginate(4);

        return view('userdashboard.hotel' , [
            'datahotel' => $datahotel,
            'datacountry' => $datacountry
        ]);
    }

    public function showallhotel($id){
        $datahotel = Hotel::paginate(8);
        $country = Country::FindOrfail($id);

        return view('userdashboard.allhotels' , [
            'datahotel' => $datahotel,
            'country' => $country,
        ]);

}


  public function search(Request $request){

            // $datahotel = Hotel::paginate(8);
            if (isset($_GET['search_name'])) {
            $datasearch = $_GET['search_name'];
            $hotels = Hotel::where('name', 'LIKE' , '%'.$datasearch.'%')
            ->paginate(8);


            $datasearchcity = $_GET['search_citys'];
            $cities = City::where( 'name' , 'LIKE' , '%'.$datasearchcity.'%')
            ->paginate(8);

            return view('userdashboard.search' ,[
                'hotels' => $hotels ,
                'cities' => $cities
            ]);
            }
            else{
            return view('userdashboard.search' );
            }
        }


    public function pageallhotel(){
        $datahotel = Hotel::paginate(8);
       // dd($datahotel);
     return view('userdashboard.pageallhotel' , [
         'datahotel' => $datahotel,

     ]);

    }
    public function showviewhotel($id){

        $roomhotel = Hotel::FindOrfail($id);


        return view('userdashboard.hotelview' ,[
            'roomhotel' => $roomhotel ,
        ]);
    }







    public function bookroom($id , $idroom){
        $roomhotel = Room::paginate(8);
        $idroom = Room::FindOrfail($idroom);
        return view('userdashboard.hotelviewBook' ,[
            'roomhotel' => $roomhotel ,
            'idroom'  => $idroom
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

        // Edite The Input
        // $bookdata  = Booked::create([
        //     'name' => $request->input('name'),
        //     'job' => $request->input('job'),
        //     'phone' => $request->input('phone'),
        // ]);
        // return redirect('/dashboard/hotel/');


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
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
