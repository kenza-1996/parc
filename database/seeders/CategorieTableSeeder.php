<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categorie")->insert([
            ["nom_categorie"=> "PC"],
        ["nom_categorie"=> "Imprimante"],
        ["nom_categorie"=> "Unité centrale"],
        ["nom_categorie"=> "Ecran"],
        ["nom_categorie"=> "Enduleur"],
        ["nom_categorie"=> "Photocopieur"],
        ["nom_categorie"=> "Scanner"],
        ["nom_categorie"=> "lecteur QB" ],
        ["nom_categorie"=> "Switch"],
        ["nom_categorie"=> "Photocopieur"]

        ]);
        
    }
}
