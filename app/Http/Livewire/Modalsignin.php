<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Modalsignin extends Component
{
    public $email,$password;
    private function resetInputFields(){

        $this->email = '';
        $this->password = '';
    }
    public function login(Request $request)
    {

        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
          dd('here');


        if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                session()->flash('message', "You are Login successful.");

                return redirect()->route('dashboard');
        }else{
            session()->flash('error', 'email and password are wrong.');
            // $this->emit('errorinput');
        }

    }

    public function render()
    {
        return view('livewire.modalsignin');
    }

}


