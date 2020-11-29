<?php

namespace App\Http\Livewire;

use App\Models\News;
use App\Models\Offer;
use Livewire\Component;

class OffersNews extends Component
{
    public $offers;
    public $news;

    public function mount()
    {
        $this->news = News::where('published', true)->latest()->get();
        $this->offers = Offer::where('published', true)->latest()->get();
    }

    public function render()
    {
        return view('livewire.offers-news');
    }
}
