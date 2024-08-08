<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for($i = 0; $i < 10; $i++) {
            Post::create([
                'image' => $faker->imageUrl(), // Generates a random image URL
                'title' => $faker->name, // Generates a random sentence for the title
                'content' => $faker->paragraph // Generates a random paragraph for the content
            ]);
        }
    }
}
