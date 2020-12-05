<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Header extends Component
{
    public CityChoiceModal $city;
    public $currentCity;
    public $activeMenu;

    protected $listeners=['cityUpdated'];

    public function cityUpdated($newCity)
    {
        $this->currentCity = $newCity;
    }

    public function mount()
    {
        $this->activeMenu = Route::currentRouteName();
        $this->currentCity = Cookie::get('city') ? Cookie::get('city') : null;
    }

    public function render()
    {
        return view('livewire.header');
    }
}
