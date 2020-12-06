<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Livewire\Component;
use Livewire\WithPagination;

class ShowOffers extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.show-offers', ['offers' => Offer::paginate(3)]);
    }
}
