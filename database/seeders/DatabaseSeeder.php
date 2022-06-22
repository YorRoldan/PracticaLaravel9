<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Cargo;
use App\Models\Empleado;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // se eliminan las llaves FK
        Cargo::truncate(); // se borra la tabla
        Empleado::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // se activan las Fk
        $this->call(Cargos_Seeder::class);
        $this->call(Empleados_Seeder::class);
    }
}
