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
            'name' => "sergio",
            'apellido_1' => "torre",
            'apellido_2' => "de la Fuente",
            'cif' => 123456789,
            'movil' => "618496362",
            'email' => "kekotorre@gmail.com",
            'password' => bcrypt('123456'),

        ]);
    }
}
