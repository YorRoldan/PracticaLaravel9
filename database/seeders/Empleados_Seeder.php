<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Empleados_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $cargo = DB::table('cargos')->where(['nombre'=>'Instructor'])->value('id');

        DB::table('empleados')->insert([
        'nombre'=> 'Dony Cardenas',
        'email' => 'cardenasdonny@gmail.com',
        'direccion' => 'calle 123456',
        'edad' => 36,
        'idCargo' => 1
    ]);

    DB::table('empleados')->insert([
    'nombre'=> 'Simón Rodriguez',
    'email' => 'rodriguezsimon@gmail.com',
    'direccion' => 'calle 50 c 34-20',
    'edad' => 45,
    'idCargo' => 2
    ]);

    DB::table('empleados')->insert([
        'nombre'=> 'Isabella Roldán',
        'email' => 'isabellaroldan@gmail.com',
        'direccion' => 'carrera 50 c 54-60',
        'edad' => 35,
        'idCargo' => 3
        ]);

    DB::table('empleados')->insert([
        'nombre'=> 'Marcela Higuita',
        'email' => 'higuitamarcela@gmail.com',
        'direccion' => 'circular 7 sur 20-50',
        'edad' => 29,
        'idCargo' => 1
        ]);
    }
}
