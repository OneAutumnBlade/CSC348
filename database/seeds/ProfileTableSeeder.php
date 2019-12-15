<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile1 = new App\Profile;
        $profile1->name = 'Bob Bobbington';
        $profile1->data_of_birth = '1998-10-09';
        $profile1->user_id = 1;
        
        factory(App\Profile::class, 10)->create();

    }
}
