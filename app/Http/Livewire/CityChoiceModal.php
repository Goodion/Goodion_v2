<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Collection;


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
