<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 10, $variableNbWords = true),
            'description' => $this->faker->text($maxNbChars = 1000),
            'slug' => $this->faker->slug,
            'body' => $this->faker->text($maxNbChars = 600),
            'published' => true
        ];
    }
}
