<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers {
        logout as performLogout;
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('index');
    }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/dashbaord';

    // protected function redirectTo()
    // {
    //        if(auth()->check())
    //        return '/dashbaord';

    // }
    protected function redirectTo()
    {
           if(auth()->guard('web')->check())
           return redirect()->route('dahboard');

    }

    protected function authenticated(Request $request, $user)
    {
        // alert('Welcome to our Website!','', 'success')->background('#fff')->position('center');
        toast('Welcome to our Website!','success')->position('bottom-end')->background('#000');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function login(Request $request)
    // {
    //     $this->validateLogin($request);
    //     if($this->attemptLogin($request))
    //     {
    //         // $request->session()->regenerate();
    //         return redirect()->route('dashboard');
    //     }
    //     session()->flash('error',"Error in password or Email");
    //      return redirect()->route('index');
    // }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
