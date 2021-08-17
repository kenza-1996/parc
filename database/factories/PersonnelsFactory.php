<?php

namespace Database\Factories;

use App\Models\Personnels;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonnelsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personnels::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"=> $this->faker->lastName(),
            "prenom" =>$this->faker->firstName(),
            "dateNaissance" =>$this->faker->dateTimeBetween("1970-01-01", "2001-10-30"),
            "adresse" =>$this->faker->address(),
            "email" =>$this->faker->safeEmail(),
            "telephone" =>$this->faker->phoneNumber(),
        ];
    }
}
