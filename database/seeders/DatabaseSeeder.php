<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();
        $user = User::factory()->create();
        $personal = Category::create([
            'name'=> 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name'=> 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name'=> 'Work',
            'slug' => 'Work'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My family post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'

        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My personal post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'

        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My work post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'

        ]);

    }
}
