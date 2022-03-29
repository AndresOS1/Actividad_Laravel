<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
use Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Andres Ordoñez',
            'email' => 'ordonezandres202@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
