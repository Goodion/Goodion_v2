<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CityChoiceModal extends Component
{
    public $bigCities;
    public $city;

    public function setCurrentCity()
    {
        dd($this->city);
        $this->placeCityCookie($this->city);
    }

    public function getCityCookie($city)
    {
        return cookie('city', $city, 60*60*24*31);
    }

    public function placeCityCookie($city)
    {
        $cookie = cookie('city', $city, 60*60*24*31);
        return back()->cookie($cookie);
    }

    public function mount()
    {
        $this->bigCities = getBigCities();
    }

    public function render()
    {
        return view('livewire.city-choice-modal');
    }
}
