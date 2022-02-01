<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class SignIn extends Component
{
    public $email,$password;
     public function login()
     {

           dd('dahsboard');


        //  $user=['email'=>$this->email,'password'=>$this->password];
        //   if(Auth::login($user))
        //   {
        //       return redirect()->route('dashboard');
        //   }
        //   else
        //   {
        //       session()->flash('error','login Invaild');

        //   }
     }

    public function render()
    {
        return view('livewire.sign-in');
    }

}
