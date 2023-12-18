<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{

    public function run()
    {
        Recipe::create([
            'name' => 'Exemplo',
            'ingredients' => 'exemplo',
            'preparation' => 'testo de exemplo',
            'time' => '60',
            'user_id' => 1,
            'category_id' => 1

        ]);
    }
}
