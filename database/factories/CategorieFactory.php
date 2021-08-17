<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categorie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom_categorie" =>array_rand(["PC","Imprimante", "Unité centrale", "Ecran", "Enduleur","Photocopieur",  "Scanner", "lecteur QB" , "Switch"])
            
        ];
    }
}
