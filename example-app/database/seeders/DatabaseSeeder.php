<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      User::truncate();
        Post::truncate();
        Category::truncate();
        $user = User::factory()->create();
        $personal=Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);
        $family=Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);
        $sport=Category::create([
            'name'=>'Sport',
            'slug'=>'sport'
        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$family->id,
            'title'=>'My family Post',
            'slug'=>'my-first-slug',
            'excerpt'=>'This head line and the exerpt fot the project',
            'body'=>'this is the body and it have all the things that you want to achive your target'

        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$sport->id,
            'title'=>'My sport Post',
            'slug'=>'my-second-slug',
            'excerpt'=>'This head line and the exerpt fot the project',
            'body'=>'this is the body and it have all the things that you want to achive your target'

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
