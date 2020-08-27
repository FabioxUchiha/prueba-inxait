<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('departments')->insert([
	['id' => '5', 'department' => 'ANTIOQUIA'],
	['id' => '8', 'department' => 'ATLÁNTICO'],
	['id' => '11', 'department' => 'BOGOTÁ, D.C.'],
	['id' => '13', 'department' => 'BOLÍVAR'],
	['id' => '15', 'department' => 'BOYACÁ'],
	['id' => '17', 'department' => 'CALDAS'],
	['id' => '18', 'department' => 'CAQUETÁ'],
	['id' => '19', 'department' => 'CAUCA'],
	['id' => '20', 'department' => 'CESAR'],
	['id' => '23', 'department' => 'CÓRDOBA'],
	['id' => '25', 'department' => 'CUNDINAMARCA'],
	['id' => '27', 'department' => 'CHOCÓ'],
	['id' => '41', 'department' => 'HUILA'],
	['id' => '44', 'department' => 'LA GUAJIRA'],
	['id' => '47', 'department' => 'MAGDALENA'],
	['id' => '50', 'department' => 'META'],
	['id' => '52', 'department' => 'NARIÑO'],
	['id' => '54', 'department' => 'NORTE DE SANTANDER'],
	['id' => '63', 'department' => 'QUINDIO'],
	['id' => '66', 'department' => 'RISARALDA'],
	['id' => '68', 'department' => 'SANTANDER'],
	['id' => '70', 'department' => 'SUCRE'],
	['id' => '73', 'department' => 'TOLIMA'],
	['id' => '76', 'department' => 'VALLE DEL CAUCA'],
	['id' => '81', 'department' => 'ARAUCA'],
	['id' => '85', 'department' => 'CASANARE'],
	['id' => '86', 'department' => 'PUTUMAYO'],
	['id' => '88', 'department' => 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA'],
	['id' => '91', 'department' => 'AMAZONAS'],
	['id' => '94', 'department' => 'GUAINÍA'],
	['id' => '95', 'department' => 'GUAVIARE'],
	['id' => '97', 'department' => 'VAUPÉS'],
	['id' => '99', 'department' => 'VICHADA']
    ]);
}
}