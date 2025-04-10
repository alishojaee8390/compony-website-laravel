<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SeoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'keywords' => $this->faker->title(),
            'site_name' => $this->faker->title(),
            'site_url' => $this->faker->url(), 
            'twitter_title' => $this->faker->title(),
            'twitter_description' => $this->faker->title(),
        ];
    }
}
