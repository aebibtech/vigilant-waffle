<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Recipe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if(count(User::all()) == 0){
            User::factory(5)->create();
        }

        if(count(Recipe::all()) == 0){
            Recipe::factory(10)->create();
        }
    }
}
