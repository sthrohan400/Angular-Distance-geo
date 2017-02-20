<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $obj_user = new User();
        $obj_user->name = 'Demo';
        $obj_user->email = 'demo@gmail.com';
        $obj_user->password = bcrypt('121212');
        $obj_user->user_level_type = 'banger';
        $obj_user->status = 'active';
        $obj_user->save();
    }
}
