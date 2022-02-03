<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Room;
use App\Country;
use App\City;
use App\Manager;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Booked;
use Illuminate\Support\Carbon;
// use Carbon\Carbon;
// use Illuminate\Support\Carbon;

class AdminHotelRoomController extends Controller
{

    public function __construct()
    {
         $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
// 8 pm = 12 pm
    public function index($id)
    {

        // $now = Carbon::now();
        // $newTime = Carbon::now()->addHour(4)->format('h:i a', 'pm');
        // dd($now);

        // $open_time = \Carbon\Carbon::createFromFormat('h:i a','11:59 am');//12
        // dd($open_time);
        // $close_time = \Carbon\Carbon::createFromFormat('h:i a', '10:00 am');
        // dd($close_time);
        // if('06:00 pm' <= $now && $now <= '08:00 pm') {
        //     dd('yes');
        // } else {
        //     // dd('no');
        //     dd($now->diffInHours('2022-01-22 20:06:21'));
        // }

        // $now = Carbon::now()->format('h:i:s A');
        // $startTime = Carbon::parse('10:00:00 A');
        // $endTime = Carbon::parse('12:00:00 A');

        // $totalDuration = $endTime->diffForHumans($startTime);
        // dd($now);

        // $now = Carbon::parse('10:04:16');
        // $nowtwo = Carbon::parse('12:04:16');

        // $diff = $now->diff($nowtwo);
        // $now = date_default_timezone_get();
        // $now = date('Y-m-d');
        // dd($now->format('h:i:s A'));
        // dd($now->isoFormat('dddd D'));
        // dd($diff);
        // echo ;

        $ShowRoom = Room::where('hotel_id', $id)->paginate(6);
        $ShowHotel = Hotel::where('id', $id)->first();
        return view('admindashboardlayout.showRoom', compact('ShowRoom','ShowHotel'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $hotelRoom = Hotel::where('id', $id)->first();
        return view('admindashboardlayout.addRoom', compact('hotelRoom'));
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $hotelCondition = Hotel::where('id', $id)->first();
        $numberRoomInOneFloor = $hotelCondition->numberofroomsinonefloor;
        $numberFloor = $hotelCondition->numberoffloor;

        $totalNumberOfRoomInHotel = $numberRoomInOneFloor * $numberFloor;

        // dd($totalNumberOfRoomInHotel);


        $RoomCondition = Room::where('hotel_id', $id)->count();






        // dd($numberRoomInOneFloor);

        if ($totalNumberOfRoomInHotel != $RoomCondition) {


            $RoomConditionFloor = Room::where('floor', $request->floor)->count();

            if ($RoomConditionFloor != $numberRoomInOneFloor) {

                $request->validate([
                    'people' => 'required',
                    'distance' => 'required',
                    'floor' => 'required',
                    'room_price' => 'required',
                    'imageRoom' => 'mimes:jpeg,png,jpg|required',
                ], [

                    'people.required' => 'Please Enter the Number of people',

                    'distance.required' => 'Please Enter the distance of Room',

                    'floor.required' => 'Please enter the number of floor for room',

                    'room_price.required' => 'Please select a price of room per night',


                    'imageRoom.required' => 'Please select an Image for room',
                    'imageRoom.mimes' => 'Image Room Must be jpeg,png or jpg extension',


                ]);


                if ($request->file('imageRoom')) {
                    $file = $request->file('imageRoom');
                    $name = time() . '-' . $file->getClientOriginalName();
                    $file->move('imagesRoomAdmin', $name);
                    $request['imageRoom'] = 'imagesRoomAdmin/' . $name;
                } else {
                    $request['imageRoom'] = "Null";
                }

                // dd($input['image']);

                Room::create([
                    'people' => $request->people,
                    'distance' => $request->distance,
                    'floor' => $request->floor,
                    'room_price' => $request->room_price,
                    'imageRoom' => $name,
                    'hotel_id' => $id,
                ]);

                // dd($request);
                // dd($id);
                Alert::toast('Room Created Successfully...', 'success');
                return redirect()->route('allhotels_admin');
                // return redirect()->route('allhotels_admin')->with('success' , 'Hotel Created Successfully...'); // without sweet alert

            } else {
                Alert::warning('Opps .. You Cannot Add More Room in this floor', 'delete');
                return redirect()->route('showRoom',$id);
            }
        } else {

            Alert::warning('Opps .. You Cannot Add More Room', 'delete');
            return redirect()->route('showRoom',$id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roomDetails = Room::where('id',$id)->first();
        $roomBookedCount = Booked::where('room_id',$id)->count();
        return view('admindashboardlayout.displayRoom',compact('roomDetails','roomBookedCount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::where('id', $id)->first();
        return view('admindashboardlayout.editRoom',compact('room'));
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

        // dd($id);
        // dd($request);
        $room = Room::findOrfail($id);
        $x = $request->all();


        $request->validate([
            'people' => 'required',
            'distance' => 'required',
            // 'floor' => 'required',
            'room_price' => 'required',
            'imageRoom' => 'mimes:jpeg,png,jpg|required',
        ], [

            'people.required' => 'Please Enter the Number of people',

            'distance.required' => 'Please Enter the distance of Room',

            'floor.required' => 'Please enter the number of floor for room',

            'room_price.required' => 'Please select a price of room per night',


            'imageRoom.required' => 'Please select an Image for room',
            'imageRoom.mimes' => 'Image Room Must be jpeg,png or jpg extension',


        ]);



        if ($request->imageRoom != '') {
            $path = public_path() . '/imagesRoomAdmin/';

            if ($room->imageRoom != '' && $room->imageRoom != Null) {
                $old_image = $path . $room->imageRoom;
                unlink($old_image);
            }

            $file = $request->file('imageRoom');
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move('imagesRoomAdmin', $name);
            $x['imageRoom'] =  $name;
        }

        $room->update($x);
        Alert::info('Room Updated Successfully...', 'update');
        return redirect()->route('showRoom',$room->hotel_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $roomId = $request->forRoomId;
        // $hotel = Hotel::findOrfail($id);
        $room = Room::where('id', $roomId)->delete();
        // $hotel->forceDelete();
        Alert::warning('Room Deleted Successfully...', 'delete');
        return redirect()->route('allhotels_admin');
    }



}
