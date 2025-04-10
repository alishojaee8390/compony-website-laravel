<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TopHeaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'url_instagram' => $this->faker->url(),
            'url_facebook' => $this->faker->url(),
            'url_tiwtter' => $this->faker->url(),
        ];
    }
}
