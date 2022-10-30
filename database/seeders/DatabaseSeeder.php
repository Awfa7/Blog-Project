<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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

        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        // $user = User::factory()->create([
        //     'name' => 'Awfa'
        // ]);

        // Post::factory(20)->create([
        //     'user_id' => $user->id
        // ]);

        User::factory()->create([
            'username' => 'Awfa'
        ]);

        Post::factory(20)->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'First post',
        //     'slug' => 'first-post',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda architecto corporis perferendis alias itaque ex aliquam dolorem maxime, quos amet velit expedita dolorum quia. Officia, itaque recusandae. Molestiae, harum cupiditate.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'Second Post',
        //     'slug' => 'second-post',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda architecto corporis perferendis alias itaque ex aliquam dolorem maxime, quos amet velit expedita dolorum quia. Officia, itaque recusandae. Molestiae, harum cupiditate.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'Third Post',
        //     'slug' => 'third-post',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda architecto corporis perferendis alias itaque ex aliquam dolorem maxime, quos amet velit expedita dolorum quia. Officia, itaque recusandae. Molestiae, harum cupiditate.</p>'
        // ]);
    }
}
