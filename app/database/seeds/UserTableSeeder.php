<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        

        $user = new User();
        $user->email    = 'admin@codeup.com';
        $user->password = 'adminPass123!';
        $user->save();
    }

}