<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Con metodos mágicos

        Category::factory(5)->has(
            Post::factory(10)->state(
                new Sequence(
                    [
                        'is_published' => true,
                        'published_at' => now(),
                    ],
                    [
                        'is_published' => false,
                        'published_at' => null,
                    ],
                )
            )->hasTags(2)
        )->create();

        // Category::factory(5)->has(
        //     Post::factory(10)->has(
        //         Tag::factory(2)
        //     )
        // )->create();

        // Post::factory(50)->create();

        // Tag::factory(20)->create();
    }
}
