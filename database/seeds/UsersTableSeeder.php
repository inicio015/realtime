<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=> 'Pedro',
        	'email'=> 'pedrojosavila@gmail.com',
        	'password'=> bcrypt('123456')

        ]);
        User::create([
            'name'=> 'Pablo',
            'email'=> 'pablo@gmail.com',
            'password'=> bcrypt('123456')

        ]);
        User::create([
            'name'=> 'Ramos',
            'email'=> 'ramos@gmail.com',
            'password'=> bcrypt('123456')

        ]);
    }
}
