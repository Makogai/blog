<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::query()->create([
            'name' => "admin",
            'email' => "admin@foryouth.me",
            'password' => Hash::make('password')
        ]);

        Category::query()->create([
            'name' => "Novosti za mlade",
            'slug' => "novosti-za-mlade",
            'description' => "Novosti za mlade",
            'color' => "#ff0000",
            'is_visible' => true,
        ]);
        Category::query()->create([
            'name' => "Priče mladih",
            'slug' => "price-mladih",
            'description' => "Priče mladih",
            'color' => "#00ff00",
            'is_visible' => true,
        ]);
        Category::query()->create([
            'name' => "Preporuke - Film/Serija",
            'slug' => "preporuke-film-serija",
            'description' => "Preporuke - Film/Serija",
            'color' => "#0000ff",
            'is_visible' => true,
        ]);
        Category::query()->create([
            'name' => "Preporuke - Knjiga",
            'slug' => "preporuke-knjiga",
            'description' => "Preporuke - Knjiga",
            'color' => "#ffff00",
            'is_visible' => true,
        ]);
        Category::query()->create([
            'name' => "Preporuke - Konkurs",
            'slug' => "preporuke-konkurs",
            'description' => "Preporuke - Konkurs",
            'color' => "#ff00ff",
            'is_visible' => true,
        ]);
        Category::query()->create([
            'name' => "Preporuke - Dogadjaj",
            'slug' => "preporuke-dogadjaj",
            'description' => "Preporuke - Dogadjaj",
            'color' => "#00ffff",
            'is_visible' => true,
        ]);
        $this->command->info('Admin user created.');
    }
}
