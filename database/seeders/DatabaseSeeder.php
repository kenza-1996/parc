<?php

namespace Database\Seeders;

use App\Models\Materiels;
use App\Models\Personnels;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorieTableSeeder::class);
        Materiels::factory(10)->create();
        Personnels::factory(10)->create();
        User::factory(10)->create();
      

        $this->call(RoleTableSeeder::class);
      
        $this->call(PermissionTableSeeder::class);
        

        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(4);

    }
}
