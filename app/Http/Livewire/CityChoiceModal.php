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

    public function updated()
    {
        $this->emit('cityUpdated', $this->city);
    }

    public function setCurrentCity()
    {
        $this->validate();
        Cookie::queue('city', $this->city, 60*60*24*31);
        $this->dispatchBrowserEvent('close-city-choice-modal');
        return back();
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
