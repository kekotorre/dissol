<?php

use Illuminate\Database\Seeder;

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
            'name' => "admin",
            'apellido_1' => "admin",
            'apellido_2' => "admin",
            'cif' => "123456789",
            'fijo' => "915520922",
            'movil' => "618496362",
            'email' => "admin@gmail.com",
            'password' => bcrypt('123456'),


        ]);
    }
}
