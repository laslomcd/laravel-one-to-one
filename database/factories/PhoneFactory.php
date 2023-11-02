<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(1)->create()->first(),
            'phone_type' => $this->faker->sentence,
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}
