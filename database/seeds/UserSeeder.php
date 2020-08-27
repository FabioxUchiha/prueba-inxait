<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['name' => 'admin', 'last_name' => 'admin', 'cedula' => '123456789',
        	'phone' => '3131234567', 'email' => 'admin@admin.com', 'department' => 'BOGOTÁ, D.C.',
        	'city' => 'Bogotá, D.C.', 'check' => '1'],
        	['name' => 'pepito', 'last_name' => 'perez', 'cedula' => '123456789',
        	'phone' => '3131234567', 'email' => 'pepito@admin.com', 'department' => 'BOGOTÁ, D.C.',
        	'city' => 'Bogotá, D.C.', 'check' => '1']
        ]);
    }
}
