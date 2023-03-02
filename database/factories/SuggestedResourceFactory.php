<?php

namespace Database\Factories;

use App\Facades\Localization;
use App\Models\SuggestedResource;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuggestedResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'url' => $this->faker->url(),
            'language' => $this->faker->randomElement(array_merge(['all'], Localization::slugs())),
            'is_free' => $this->faker->boolean(),
        ];
    }
}
