<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Header extends Component
{
    public CityChoiceModal $city;
    public $currentCity;

    protected $listeners=['cityUpdated'];

    public function cityUpdated($newCity)
    {
        $this->currentCity = $newCity;
    }

    public function mount()
    {
        $this->currentCity = Cookie::get('city') ? Cookie::get('city') : '';
    }

    public function render()
    {
        return view('livewire.header');
    }
}
