<?php

use App\Http\Controllers\programadasController;
use App\Http\Controllers\ventasController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('inicio');
// })->name('inicio');





Route::delete('/{actividad}', [ventasController::class, 'delete'])->name('actividad.destroy');





Route::get('/', [ventasController::class, 'index'])->name('inicio');
Route::view('/actividades', 'actividades')->name('actividades');
Route::get('/hoy', [ventasController::class, 'hoy'])->name('hoy');
Route::get('/{fecha}', [ventasController::class, 'show'])->name('venta.show');
Route::post('/hoy', [ventasController::class, 'store'])->name('ventas.store');






