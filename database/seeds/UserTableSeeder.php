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
        //'name', 'email', 'password', 'image',
        User::create([
            'name'      => 'ADMINISTRADOR',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('123@Fateclins'),
        ]);
    }
}
