<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment1 = new Comment;
        $comment1->comment_body = "P.S. My rein will involve brimstone";
        $comment1->user_id = 1;
        $comment1->post_id = 1;
        $comment1->save();

        factory(App\Comment::class, 100)->create();
    }
}
