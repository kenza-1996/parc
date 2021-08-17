<?php

namespace Database\Factories;

use App\Models\Materiels;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterielsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Materiels::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "num_serie" =>$this->faker->isbn13 (),
            "code_barre" =>$this->faker->isbn10(),
            "etat" =>array_rand(["en panne","en cour de raparation", "reparé"], 1) ,                 
            
            
            "lot_id" =>rand(1,10)
        ];
    }
}
