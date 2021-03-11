<?php

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

Route::get('/', [ventasController::class, 'index'])->name('inicio');



Route::view('/hoy', 'hoy')->name('hoy');
Route::view('/venta', 'ventas')->name('ventas');


Route::post('hoy', [ventasController::class, 'store'])->name('ventas.store');