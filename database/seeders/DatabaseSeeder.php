<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Instruction;

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

        if(count(Recipe::all()) > 0){
            foreach(Recipe::all() as $recipe){
                for($i = 1; $i <= 3; $i++){
                    Ingredient::factory()->create([
                        'recipe_id' => $recipe->id
                    ]);
                    Instruction::factory()->create([
                        'recipe_id' => $recipe->id,
                        'step_number' => $i
                    ]);
                }
            }
        }
    }
}
