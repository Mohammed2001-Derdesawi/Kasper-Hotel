<?php

namespace App\Http\Controllers\Auth;
use App\Manager;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Events\ManagerRegister;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    use ThrottlesLogins, AuthenticatesUsers{
        logout as performLogout;
    }


    // protected $redirectTo ='/admin/dashboard';
    protected function redirectTo()
    {
           if(auth()->guard('admin')->check())
           return redirect()->route('admin.roles');

    }


    public function __construct()
    {
        Session::put('attemp',0);
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function getLogin()
    {

        return view('admindashboardlayout.adminlogin');
    }
    public function login(Request $request)

    {


        if(Session::has('loginDateExpired'))
        {
            $attemploginDate=Session::get('loginDateExpired');
            if(Carbon::now()->diffInMinutes($attemploginDate)<10)
            {

                return redirect()->back()->with(['error'=>'too many attepms please try again after '. 10 -Carbon::now()->diffInMinutes($attemploginDate) ." Minutes"]);

            }

        }


       $validate=$this->validate($request, [
            'email' => 'required|email|exists:managers',
            'password' => 'required|string',
        ]);
        if(!$validate)
        {
            $attemp=Session::get('attemp');
            if($attemp<3)
             Session::put('attemp',$attemp+1);
            if(Session::get('attemp')==3)
            Session::put('loginDateExpired',Carbon::now());
            return redirect()->back()->withErrors($validate);
        }


        // $userpassword2=decrypt($user->password);


       if($user=auth()->guard('admin')->attempt(
           [
               'email'=>$request->email,
               'password'=>$request->password,

           ]
           ,
           $request->remember
       ))
       {
        Session::put('attemp',0);
        Session::forget('loginDateExpired');
          $user=auth()->guard('admin')->user();
          auth()->guard('admin')->login($user);

          $data=[
              'manager_name'=>$user->name,
          ];
        if(!auth()->guard('admin')->user()->hasRole('Super Admin'))
         return redirect()->route('admin.notify');
         return redirect()->route('admin.roles');

       }
       else
       {

        $attemp=Session::get('attemp');
        if($attemp<3)
         Session::put('attemp',$attemp+1);
         if(Session::get('attemp')==3)
         {
            Session::put('loginDateExpired',Carbon::now());
            return redirect()->back()->with(['error'=>'too many attepms please try again later']);

         }
        //    dd(auth()->guard('admin')->attempt(['email'=>$request->email,'password'=>$user->password]));
            return redirect()->back()->with(['error'=>'your email or password is not correct']);
       }




    }
    public function logout(Request $request)
    {
         Auth::guard('admin')->logout();
         return redirect()->route('admin.login');

    }
    public function guard(){
        return Auth::guard('admin');
    }

    public function username(){
        return 'email';
    }

    public function SendEmailResetPassword(Request $request)
    {

          $validate=$request->validate([
              'email'=>'required|email|exists:managers',
          ],
          [
              'email.required'=>'email is required',

          ]);
          if(!$validate)
          {

            return redirect()->back()->withErrors($validate);
          }

         return $this->CheckAttempAndToken($request);




    }
    public function CheckAttempAndToken($request)
    {
        $attemp=DB::table('password_resets')->where([
            'email' => $request->email,
          ]);

         $datecanuse=$attemp->latest()->value('created_at');
           if($attemp->count() <=3)
           {
            $token = Str::random(64);

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now(),
              ]);

            Mail::send('admindashboardlayout\forgetpasswordemail', ['email'=>$request->email,'token' => $token], function($message) use($request){
                $message->to('testmailderdesawi@gmail.com');
                $message->subject('Kasper Company|Request To change Password');
            });

            return redirect()->back()->with('message', 'We have e-mailed your password reset link!');

           }
           else if (Carbon::now()->diffInMinutes($datecanuse) < 180 )
           {
                // if($tryafter =Carbon::now()->minute-180 < 60 )
                // {
                //     $tryafter=$tryafter + "minutes";
                // }
                // else if($tryafter =Carbon::now()->minute-180 > 60 )
                // {
                //     $tryafter=" 1 hour";
                // }
                // else if($tryafter =Carbon::now()->minute-180 > 90 )
                // {
                //     $tryafter="half and hour";
                // }
                // else if($tryafter =Carbon::now()->minute-180 > 120 )
                // {
                //     $tryafter="2 hours ";
                // }
                // else if($tryafter =Carbon::now()->minute-180 > 150 )
                // {
                //     $tryafter="2 hours and half ";
                // }
             if( 3- Carbon::now()->diffInHours($datecanuse) > 1)
             $tryafter=3- Carbon::now()->diffInHours($datecanuse). " hour";
             else
             {
                $tryafter=180-Carbon::now()->diffInMinutes($datecanuse). " Minutes";
             }
            return redirect()->route('admin.showresetpassword')->with('error', 'please try after ' .$tryafter);

        }
        else if ($tryafter=Carbon::now()->diffInMinutes($datecanuse) > 180 )
        {
            $attemp=DB::table('password_resets')->where([
                'email' => $request->email,
              ])->delete();




                $token = Str::random(64);

                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => Carbon::now(),
                  ]);

                Mail::send('admindashboardlayout\forgetpasswordemail', ['email'=>$request->email,'token' => $token], function($message) use($request){
                    $message->to('testmailderdesawi@gmail.com');
                    $message->subject('Kasper Company|Request To change Password');
                });
                return redirect()->back()->with('message', 'We have e-mailed your password reset link!');

     }
           else
           {

            return redirect()->route('admin.showresetpassword')->with('error', 'too many attemps, please try again later');

           }

        //    return redirect()->route('admin.showresetpassword');


    }
    public function retrieveByCredentials(array $credentials)
{
    // First we will add each credential element to the query as a where clause.
    // Then we can execute the query and, if we found a user, return it in a
    // Eloquent User "model" that will be utilized by the Guard instances.
    $query = $this->createModel()->newQuery();

    foreach ($credentials as $key => $value)
    {
        if ( ! str_contains($key, 'password')) $query->where($key, $value);
    }

    return $query->first();
}
    public function getFormResetPassword()
    {
           return view('admindashboardlayout.adminresetpassword');
    }
    public function getshowresetPassword($email,$token)
    {
        $updatepassword=DB::table('password_resets')->where([
            'token' => $token,

          ])->first();
          if(!$updatepassword){
             abort(500);
        }
        $now=Carbon::now();
        // $dateofexpired=$now->format('Y-m-d H:i:s');
        $date=$updatepassword->created_at;


        if($now->diffInHours($date) <4)
        return view('admindashboardlayout.adminupdatepassword',compact('token','email'));
        DB::table('password_resets')->where([
            'email'=>$email

        ])->delete();
        abort(500);

    }
    public function adminUpdatePassword(Request $request)
    {

        $validate=$request->validate([
            'email'=>'required|email|exists:managers',
            'password'=>'required|min:9|max:12|string|confirmed',
        ],
        [
            'email.required'=>'email is required',

        ]);
        if(!$validate)
        {

          return redirect()->back()->withErrors($validate);
        }
        $token=$request->token;

        $updatepassword=DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $token,

          ])->first();
          if(!$updatepassword){
             abort(500);
        }
        $manager=Manager::where('email',$request->email)->update([
             'password'=>Hash::make($request->password),

        ]);
        DB::table('password_resets')->where('email',$request->email)->delete();
        $this->logout($request);
          return redirect()->route('admin.login');



    }
}
