<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name'  => $this->faker->sentence(),
            'featured_image'  => 'https://picsum.photos/500/300?random=' . rand(10, 1000),
            'location_id'  => Location::all()->random()->id,
            'price'  => rand(10000,800000),
            'sale'  => rand(1,2),
            'type'  => rand(1,3),
            'bedrooms'  => rand(1,6),
            'bathrooms'  => rand(1,5),
            'net_sq_meter'  => rand(55,300),
            'gross_sq_meter'  => rand(65,450),
            'pool'  => rand(0,3),
            'overview'  => $this->faker->text(255),
            'why_buy'  => $this->faker->text(1000),
            'description'  => $this->faker->text(1500),
        ];
    }
}
