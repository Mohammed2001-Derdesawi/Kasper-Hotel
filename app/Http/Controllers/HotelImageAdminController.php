<?php

namespace App\Http\Controllers;

use App\HotelImageAdmin;
use Illuminate\Http\Request;
use App\Hotel;

class HotelImageAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request , Hotel $hotel)
    {
        $imageHotelId = $request->hotelId;
        // dd($hotel);
        // $idHotel = $hotel->id+1;
        // dd($request);
        // $idHotel = Hotel::latest()->first()->id;
        // $imageNew = new HotelImageAdmin();
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
        //     echo $documents;
        //     die;
        // }





        // $image = $request->file('file');
        // $profileImage = $image->getClientOriginalName();
        // // $uniqueFileName = uniqid() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
        // // Define upload path
        // $destinationPath = public_path('/profile_images/'); // upload path
        // $image->move($destinationPath,$profileImage);
        
        // // Save In Database
        // $imagemodel= new HotelImageAdmin();
        // $imagemodel->imageName="$profileImage";
        // $imagemodel->save();
        // return response()->json(['success'=>$profileImage]);

        // $image = $request->file('file');
        // $imageName = $image->getClientOriginalName();
        // $image->move(public_path('images'),$imageName);
        
        // $imageUpload = new HotelImageAdmin();
        // $imageUpload->filename = $imageName;
        // $imageUpload->save();
        // return response()->json(['success'=>$imageName]);

        if($request->hasFile('file')) {
            $image = $request->file('file');
   
            $imageName = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('images_Admin_Hotel'),$imageName);
            // dd('yes');

            // if($request->submit == 'Add') {
                // dd('yes');
                // $hotel = new Hotel();
                // $hotel->image->imageName = $imageName;
                // $hotel->image->hotel_id = $imageHotelId;
                // $hotel->save();
                $hotel->image()->create([
                    'imageName' => $imageName,
                    'hotel_id' => $imageHotelId
                ]);
            // }
            
            
            // return response()->json(['success'=>$imageName],200);
        }






        // dd('yes');
        // if($request->hasFile('file')) {
        //     $file = $request->file('file');
        //     $name = time().'-'.$file->getClientOriginalName();
        //     $file->move('imagesHotelAdmin' , $name);
        //     $imageNew->save();
        //     dd('yes');
        // } else {
        //     $input['image'] = "Null";
        // }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HotelImageAdmin  $hotelImageAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(HotelImageAdmin $hotelImageAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HotelImageAdmin  $hotelImageAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelImageAdmin $hotelImageAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HotelImageAdmin  $hotelImageAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HotelImageAdmin $hotelImageAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HotelImageAdmin  $hotelImageAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelImageAdmin $hotelImageAdmin)
    {
        //
    }
}
