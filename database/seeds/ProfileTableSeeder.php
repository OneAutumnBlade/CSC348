<?php

use Illuminate\Database\Seeder;
use App\Profile;
class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile1 = new Profile;
        $profile1->name = 'Bob Bobbington';
        $profile1->user_id = 1;
        $profile1->save();
        
        factory(App\Profile::class, 10)->create();

    }
}
