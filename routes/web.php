<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\HomeController;

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


/* Route::get('personas',[PersonaController::class,'index'])->name('personas.index');
Route::get('personas/create',[PersonaController::class,'create'])->name('personas.create');
Route::get('personas/{persona}',[PersonaController::class,'show'])->name('personas.show');
Route::post('personas',[PersonaController::class,'store'])->name('personas.store');
Route::get('personas/{persona}/edit',[PersonaController::class,'edit'])->name('personas.edit');
Route::put('personas/{persona}',[PersonaController::class,'update'])->name('personas.update');
Route::delete('personas/{persona}',[PersonaController::class,'destroy'])->name('personas.destroy'); */

//!RUTA PARA LA GESTIÓN DE PERSONAS
Route::resource('personas',PersonaController::class); //CRUD PERSONAS

//!RUTAS PARA PÁGINAS ESTÁTICAS
/* Route::get('/',HomeController::class)->name('home'); //RUTA DEL HOME */
Route::view('nosotros','nosotros')->name('nosotros'); //RUTA DE SITIO NOSOTROS

//!RUTA PARA CONTACTANOS
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos',[ContactanosController::class, 'store'])->name('contactanos.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
