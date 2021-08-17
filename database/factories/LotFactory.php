<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class LotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "cout" =>$this->faker->swiftBicNumber(),
            "qte" =>$this->faker->swiftBicNumber(),
            "categorie_id" =>rand(1,10),
            "marque_id" =>rand(1,10),

        ];
    }
}
