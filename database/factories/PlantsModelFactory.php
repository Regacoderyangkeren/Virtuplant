<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlantsModel>
 */
class PlantsModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $plantname = ['dendrobium', 'ekor tupai', 'lidah mertua', 'adam hawa'];
        $planttype = ['decorative', 'herbal', 'fruitable',];
        $plantpicture = ['Plantfic.png', 'plants-pic.jpg'];
        $plantcolor = ['green', 'green-but-better'];
        $plantstate = ['seed', 'sprout', 'young', 'mature', 'dead'];
        
        return [
            'name'=>$this->faker->randomElement($plantname),
            'picture'=>$this->faker->randomElement($plantpicture),
            'type'=>$this->faker->randomElement($planttype),
            'color'=>$this->faker->randomElement($plantcolor),
            'plant_state'=>$this->faker->randomElement($plantstate),
            'description'=>$this->faker->sentence(10),
        ];
    }
}
