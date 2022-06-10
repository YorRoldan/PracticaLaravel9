<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    //Forma 1: 
   /* public function index(){
        $titulo = "Vista principal de empleados";
        return view('Empleados.index',['titulo'=>$titulo]);
    }*/
    
    //Forma 2
    /*public function index(){
        $titulo = "Vista principal de empleados";
        return view('Empleados.index',compact ('titulo'));//Compact convierte en un arrgelo
    }*/

    public function index(){
        $titulo = "Vista principal de empleados";
        $empleados = [
            ['nombre'=>'Luis'],
            ['nombre'=>'Pedro'],
            ['nombre'=>'Samuel'],
            ['nombre'=>'Ana'],
        ];
        return view('Empleados.index', compact('titulo', 'empleados'));
    }
    public function crear(){
        $titulo = "Vista crear de empleados";
        return view('Empleados.crear');
    }
    public function mostrar(){
        $titulo = "Vista mostar de empleados";
        return view('Empleados.mostrar');
    }
    
    public function editar(){
        $titulo = "Vista crear de empleados";
        return view('Empleados.editar');
    }
}