<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;


class CityChoiceModal extends Component
{
    public $bigCities;
    public $city;

    protected $rules = [
        'city' => 'required|string'
    ];

    public function setCurrentCity()
    {
        $this->validate();
        Cookie::queue('city', $this->city, 60*60*24*31);
        $this->dispatchBrowserEvent('close-modal');
        return back();
    }

    public function getCityCookie($city)
    {
        return cookie('city', $city, 60*60*24*31);
    }

    public function mount()
    {
        $this->bigCities = getBigCities();
        $this->city = Cookie::get('city') ? Cookie::get('city') : null;
    }

    public function render()
    {
        return view('livewire.city-choice-modal');
    }
}
