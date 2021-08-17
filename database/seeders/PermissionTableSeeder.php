<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["nom"=> "ajouter un personnel"],
            ["nom"=> "consulter un personnel"],
            ["nom"=> "editer un personnel"],

          

            ["nom"=> "ajouter un materiel"],
            ["nom"=> "consulter un materiel"],
            ["nom"=> "editer un materiel"]
        ]);
    }
}
