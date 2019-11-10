<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = new Post;
        $post1->post_body = "I am Bob Bobbinton the Fourth, fear my rein. Muhahahaha.";
        $post1->save();

        factory(App\Post::class, 50)->create();
    }
}
