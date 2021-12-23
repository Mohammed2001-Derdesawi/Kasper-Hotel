<?php

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
    return view('welcome');
});
Route::get('/index', function () {
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
Route::get('/dashboard/admin', function () {
    return view('admindashboardlayout.main-page');
})->name('admin');
