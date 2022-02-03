<?php

namespace App\Http\Livewire;
use App\Country;
use App\City;
use Livewire\Component;

class CityCountry extends Component
{



    public $countries;
    public $cities;

    public $selectedCountry = null;

    public function mount($selectedCountry = null)
    {
        
        $this->countries = Country::all();
        $this->cities = collect();
        $this->selectedCountry = $selectedCountry;

        if (!is_null($selectedCountry)) {
            $this->cities = City::where('country_id',$this->selectedCountry)->get();
        }
    }



    public function updatedSelectedCountry($country)
    {
        $this->cities = City::where('country_id', $country)->get();
        $this->selectedCountry = $country;
    }




    public function render()
    {
        return view('livewire.city-country');
    }
}
