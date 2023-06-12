<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proyecto', function () {
    return view('proyecto.index');
});

Route::post('proyecto/create',[ProyectoController::class,'create']);

Route::resource('proyecto',ProyectoController::class);

Route::get('/pdf',[App\Http\Controllers\ProyectoController::class,'getPDF'])->name('proyecto.PDF_visualiza');
