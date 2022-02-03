<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use Illuminate\Contracts\Support\Htmlable;

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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('userdashboard.index');
    })->name('dashboard');
    Route::get('/dashboard/allhotel', function () {
        return view('userdashboard.allhotels');
    })->name('allhotels');



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



});
Route::name('admin.')->prefix('/dashboard/admin')->group(function () {
    Route::get('/roles','RoleController@index')->name('roles');
    Route::get('/roles/store','RoleController@store')->name('roles.store');
    Route::get('/roles/remove/{id}','RoleController@destroy')->name('roles.remove');
    Route::get('/permqission/store','PermissionController@store')->name('permission.store');
    Route::get('/permission/remove/{id}','PermissionController@destroy')->name('permission.remove');
    Route::get('/roles/edit/{id}','RoleController@edit')->name('roles.edit');
    Route::post('/roles/update/{id}','RoleController@update')->name('roles.update');
    Route::get('/permission/edit/{id}','PermissionController@edit')->name('permission.edit');
    Route::post('/permission/update/{id}','PermissionController@update')->name('permission.update');
    Route::get('/managers/view','ManagerController@index')->name('managers.index');
    Route::get('/managers/create','ManagerController@create')->name('managers.create');
    Route::post('/managers/add','ManagerController@store')->name('managers.add');
    Route::post('/imagestore','ManagerController@storeImage')->name('managers.add.photo');
    Route::post('/managers/remove/{id}','ManagerController@destroy')->name('managers.remove');
    Route::get('/managers/{id}/edit','ManagerController@edit')->name('managers.edit');
    Route::post('/managers/{id}/update','ManagerController@update')->name('managers.update');
    Route::get('/profile/{id}','ManagerController@profile')->name('profile');
    Route::get('/managers/view','ManagerController@index')->name('managers.index');
    Route::post('/profile/update/{id}','ManagerController@updateinfoprofile')->name('profile.updateinfo');
    Route::post('/profile/update/password/{id}','ManagerController@updatepasswordprofile')->name('profile.update.password');
    Route::get('/profile/forget/password','ManagerController@profileforgetpassword')->name('profile.forget.password');
    Route::get('/profile/get/data','ManagerController@getdata')->name('profile.getdata');
    Route::get('/posts','PostController@index')->name('posts');
    Route::get('/posts/show/{id}','PostController@edit')->name('posts.edit');
    Route::post('/posts/edit/{id}','PostController@update')->name('posts.update');
    Route::get('/posts/create/','PostController@create')->name('posts.create');
    Route::post('/posts/remove/{id}','PostController@destroy')->name('posts.remove');
    Route::post('/posts/sotre/','PostController@store')->name('posts.store');
    Route::get('/notify/addhotel/{country_id}','AdminNotificationController@addnewManager')->name('notify.addhotel');
    Route::get('/notify/{notify_id}','AdminNotificationController@markAsRead')->name('readNotify');


});









Route::name('admin')->prefix('/admin')->group(function () {
    Route::get('/login','Auth\AdminLoginController@getlogin')->name('.login');
    Route::post('/login/check','Auth\AdminLoginController@login')->name('.loginadmin');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('.logout');
    Route::post('/resetpassword','Auth\AdminLoginController@SendEmailResetPassword')->name('.resetpassword');
    Route::get('/sendLinkPassword','Auth\AdminLoginController@getFormResetPassword')->name('.showresetpassword');
    Route::get('/show/resetPassword/email={email}/token={token}','Auth\AdminLoginController@getshowresetPassword')->name('.showresetpasswordform');
    Route::post('/password/update','Auth\AdminLoginController@adminUpdatePassword')->name('.password.update');
    Route::get('/notify/ManagerLogin','AdminNotificationController@notify')->name('.notify');


});







    // Route::middleware('admin')->name('admin')->prefix('/dashboard/admin')->group(function () {

    // });



    Route::get('/dashboard/allhotels', function () {
        return view('userdashboard.allhotels');
    })->name('allhotels');
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
