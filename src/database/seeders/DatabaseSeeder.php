<?php

namespace Database\Seeders;

use App\Models\Contacts;
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
       
        Contacts::factory(35)->create();

        $this->call(CategoriesTableSeeder::class);
    }
     
}
