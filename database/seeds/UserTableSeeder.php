<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User;
        $user1->username = "superbob1";
        $user1->email = "bobbobbinton@bobmail.com";
        $user1->email_verified_at = "2008-04-25 08:37:17";
        $user1->password = "bobbobbinton1";
        $user1->save();

        factory(App\User::class, 10)->create();
    }
}
