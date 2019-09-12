<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' =>  'bagas' ,
            'email' =>  'bagas@gmail.com' ,
            'password' =>  bcrypt('12345678')
        ]);
    }
}
