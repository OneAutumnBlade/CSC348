<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = new App\Post;
        $post1->post_body = "I am Bob Bobbinton the Fourth, fear my rein. Muhahahaha.";
        $post1->profile_id = 1;
        $post1->save();
        $post1->tags()->attach(1);

        factory(App\Post::class, 50)->create();

        $post = App\Post::all();
        $tags = App\Tag::all();
        $post->each(function (Post $post) use ($tags)  { 
            $post->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });  
    }
}
