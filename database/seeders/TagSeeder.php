<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        Tag::factory(1)->create([
            'name' => "Vegan",
        ]);
        Tag::factory(1)->create([
            'name' => "Vegetarian",
        ]);
        Tag::factory(1)->create([
            'name' => "Gluten-free",
        ]);
        Tag::factory(1)->create([
            'name' => "Vürtsikus 🌶️",
        ]);
        Tag::factory(1)->create([
            'name' => "Vürtsikus 🌶️🌶️",
        ]);
        Tag::factory(1)->create([
            'name' => "Vürtsikus 🌶️🌶️🌶️",
        ]);
        Tag::factory(1)->create([
            'name' => "Vürtsikus 🌶️🌶️🌶️🌶️",
        ]);
        Tag::factory(1)->create([
            'name' => "Vürtsikus 🌶️🌶️🌶️🌶️🌶️",
        ]);
    }
}
