<?php

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('maincustomersitelayouts.index');
})->name('index');

Route::get('/readmore/flight', function () {
    return view('maincustomersitelayouts.readmore-flight');
})->name('readmore.flight');
Route::get('/readmore/hotel', function () {
    return view('maincustomersitelayouts.readmore-hotel');
})->name('readmore.hotel');
Route::get('/readmore/taxi', function () {
    return view('maincustomersitelayouts.readmore-taxi');
})->name('readmore.taxi');

Auth::routes(); 

// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('userdashboard.index');
    })->name('dashboard');

    

    Route::get('/dashboard/contact', function () {
        return view('userdashboard.contactus');
    })->name('contactus');

    Route::get('/dashboard/profile', function () {
        return view('userdashboard.profile');
    })->name('profile');
    Route::get('/dashboard/profile/help', function () {
        return view('userdashboard.helpprofile');
    })->name('profile.help');
    Route::get('/dashboard/profile/edit', function () {
        return view('userdashboard.editprofile');
    })->name('profile.edit');
    Route::get('/dashboard/hotel/view', function () {
        return view('userdashboard.hotelview');
    })->name('hotel.view');
    Route::get('/dashboard/hotel', function () {
        return view('userdashboard.hotel');
    })->name('hotel');

    Route::get('/dashboard/allhotels', function () {
        return view('userdashboard.allhotels');
    })->name('allhotels');


    





   
});





Route::get('/dashboard/managers', function () {
    return view('admindashboardlayout.managers');
})->name('managers');

Route::get('/dashboard/addRole', function () {
    return view('admindashboardlayout.addRole');
})->name('addRole');

Route::get('/dashboard/addPermission', function () {
    return view('admindashboardlayout.addPermission');
})->name('addPermission');












Route::get('/dashboard/allusers', 'AdminUserController@index')->name('users');
Route::post('/dashboard/addusers', 'AdminUserController@store')->name('addUser');
Route::post('/dashboard/deleteUser', 'AdminUserController@destroy')->name('deleteUser');




Route::get('/dashboard/allhoteladmin', 'AdminHotelController@index')->name('allhotels_admin');
Route::get('/dashboard/addHotel', 'AdminHotelController@create')->name('addHotel');
Route::post('/dashboard/addHotel', 'AdminHotelController@store')->name('store');
Route::post('/dashboard/updatehotel/{id}', 'AdminHotelController@update')->name('update');
Route::get('/dashboard/edithotel/{id}', 'AdminHotelController@edit')->name('edit_hotel');
Route::post('/dashboard/deletehotel', 'AdminHotelController@destroy')->name('delete');



Route::get('/dashboard/admin', 'AdminHotelController@mianAdminHotel')->name('admin');
// Route::get('/dashboard/admin/save/imagehotel', 'AdminHotelController@addImagetoFolders')->name('admin.saveImage');

// Route::get('/dashboard/admin', function () {
//     return view('admindashboardlayout.main-page');
// })->name('admin');



Route::get('/dashboard/showRooms/{id}', 'AdminHotelRoomController@index')->name('showRoom');
Route::get('/dashboard/addRoom/{id}', 'AdminHotelRoomController@create')->name('addRoom');
Route::get('/dashboard/editRoom/{id}', 'AdminHotelRoomController@edit')->name('editRoom');
Route::get('/dashboard/showRoom/{id}', 'AdminHotelRoomController@show')->name('displayRoom');
Route::post('/dashboard/storeRoom/{id}', 'AdminHotelRoomController@store')->name('storeRoom');
Route::post('/dashboard/updateRoom/{id}', 'AdminHotelRoomController@update')->name('updateRoom');
Route::post('/dashboard/deleteRoom', 'AdminHotelRoomController@destroy')->name('deleteRoom');





Route::post('/dashboard/hotelImage/{hotel}', 'HotelImageAdminController@store')->name('storeImage');


// Route::post('/drop/save','AdminHotelController@saveImage')->name('dropzone.store');