<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag1 = new App\Tag;
        $tag1->tag_body = "bob";
        $tag1->save();
        factory(App\Tag::class, 50)->create();
    }
}
