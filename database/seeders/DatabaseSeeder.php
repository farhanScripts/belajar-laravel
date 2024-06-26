<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // buat factory untuk generate random 10 user dari class post User
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //panggil seeder buat category dan user 
        $this->call([CategorySeeder::class, UserSeeder::class]);
        // buat factory untuk generate 5 user yang masing-masing user bisa mengisi postingan blog dan category 
        Post::factory(100)->recycle([
            User::all(),
            Category::all()
        ])->create();
    }
}
