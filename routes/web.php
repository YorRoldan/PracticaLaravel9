<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('prueba/prueba_2');
});


Route::get('empleados', function () {
    $mensaje = '<h1>Vista principal empleados</h1>';
    return $mensaje;
});

Route::get('empleados', [EmpleadosController::class, 'index'])->name('empleadoIndex');
Route::get('empleados/crear', [EmpleadosController::class, 'crear'])->name('empleadoCrear');
Route::get('empleados/mostrar', [EmpleadosController::class, 'mostrar'])->name('empleadoMostrar');
Route::get('empleados/editar', [EmpleadosController::class, 'editar'])->name('empleadoEditar');

//Esta Ruta con el verbo PUT es para modificar, lo que esta en parentesis es un modelo
Route::put('empleados/{empleado}', [EmpleadosController::class, 'actualizar'])->name('empleadoActualizar');

Route::post('empleados', [EmpleadosController::class, 'guardar'])->name('empleadoGuardar');

Route::delete('empleados/{empleado}', [EmpleadosController::class, 'eliminar'])->name('empleadoEliminar');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
