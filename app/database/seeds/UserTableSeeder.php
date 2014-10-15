<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $user->email    = $_ENV['USER_EMAIL'];
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();
    }
}