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
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/roles','RoleController@index')->name('.roles');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/roles/store','RoleController@store')->name('.roles.store');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/roles/remove/{id}','RoleController@destroy')->name('.roles.remove');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/permqission/store','PermissionController@store')->name('.permission.store');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/permission/remove/{id}','PermissionController@destroy')->name('.permission.remove');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/roles/edit/{id}','RoleController@edit')->name('.roles.edit');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::post('/roles/update/{id}','RoleController@update')->name('.roles.update');
});

Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/permission/edit/{id}','PermissionController@edit')->name('.permission.edit');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::post('/permission/update/{id}','PermissionController@update')->name('.permission.update');
});

Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/managers/view','ManagerController@index')->name('.managers.index');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/managers/create','ManagerController@create')->name('.managers.create');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::post('/managers/add','ManagerController@store')->name('.managers.add');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::post('/imagestore','ManagerController@storeImage')->name('.managers.add.photo');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::post('/managers/remove/{id}','ManagerController@destroy')->name('.managers.remove');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/managers/{id}/edit','ManagerController@edit')->name('.managers.edit');
});
Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::post('/managers/{id}/update','ManagerController@update')->name('.managers.update');
});

Route::name('admin')->prefix('/dashboard/admin')->group(function () {
    Route::get('/profile/{id}','ManagerController@profile')->name('.profile');
});


Route::name('admin')->prefix('admin')->group(function () {
    Route::get('/login','Auth\AdminLoginController@getlogin')->name('.login');

});




Route::name('admin')->prefix('admin')->group(function () {
    Route::post('/login/check','Auth\AdminLoginController@login')->name('.loginadmin');

});

    Route::prefix('dashboard/admin')->group(function () {
        Route::get('/roles','RoleController@index')->name('admin.roles');
    });

    // Route::middleware('admin')->name('admin')->prefix('/dashboard/admin')->group(function () {

    // });

    Route::name('admin')->prefix('/admin')->group(function () {
        Route::get('/logout','Auth\AdminLoginController@logout')->name('.logout');
    });
    Route::name('admin')->prefix('/dashboard/admin')->group(function () {
        Route::get('/managers/view','ManagerController@index')->name('.managers.index');
    });

    Route::name('admin')->prefix('/admin')->group(function () {
        Route::post('/resetpassword','Auth\AdminLoginController@SendEmailResetPassword')->name('.resetpassword');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::get('/sendLinkPassword','Auth\AdminLoginController@getFormResetPassword')->name('.showresetpassword');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::get('/show/resetPassword/email={email}/token={token}','Auth\AdminLoginController@getshowresetPassword')->name('.showresetpasswordform');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::post('/password/update','Auth\AdminLoginController@adminUpdatePassword')->name('.password.update');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::post('/profile/update/{id}','ManagerController@updateinfoprofile')->name('.profile.updateinfo');
    });

    Route::name('admin')->prefix('/admin')->group(function () {
        Route::post('/profile/update/password/{id}','ManagerController@updatepasswordprofile')->name('.profile.update.password');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::get('/profile/forget/password','ManagerController@profileforgetpassword')->name('.profile.forget.password');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::get('/profile/get/data','ManagerController@getdata')->name('.profile.getdata');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::get('/notify/ManagerLogin','AdminLoginNotificationController@notify')->name('.notify');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::get('/posts','PostController@index')->name('.posts');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::get('/posts/show/{id}','PostController@edit')->name('.posts.edit');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::post('/posts/edit/{id}','PostController@update')->name('.posts.update');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::get('/posts/create/','PostController@create')->name('.posts.create');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::post('/posts/sotre/','PostController@store')->name('.posts.store');
    });
    Route::name('admin')->prefix('/admin')->group(function () {
        Route::post('/posts/remove/{id}','PostController@destroy')->name('.posts.remove');
    });
