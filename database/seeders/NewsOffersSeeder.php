<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Offer;
use Database\Factories\NewsFactory;
use Illuminate\Database\Seeder;

class NewsOffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::factory()->times(15)->create();
        Offer::factory()->times(15)->create();
    }
}
