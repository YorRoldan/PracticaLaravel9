<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    public function cargoEmpleado(){
        return $this->belongsTo(Cargo::class, 'idCargo');
    }

    public function guardar(){
        return request();
    }
}
