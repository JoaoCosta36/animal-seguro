<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonoController;
use App\Http\Controllers\AnimalController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('donos', 'DonoController');
//Route::resource('animals', 'AnimalController');

// Rotas para Donos
Route::get('/donos', [DonoController::class, 'index'])->name('donos.index');
Route::get('/donos/create', [DonoController::class, 'create'])->name('donos.create');
Route::post('/donos', [DonoController::class, 'store'])->name('donos.store');
Route::get('/donos/{dono}', [DonoController::class, 'show'])->name('donos.show');
Route::get('/donos/{dono}/edit', [DonoController::class, 'edit'])->name('donos.edit');
Route::put('/donos/{dono}', [DonoController::class, 'update'])->name('donos.update');
Route::delete('/donos/{dono}', [DonoController::class, 'destroy'])->name('donos.destroy');

// Rotas para animals
Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->name('animals.show');
Route::get('/animals/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
Route::put('/animals/{animal}', [AnimalController::class, 'update'])->name('animals.update');
Route::delete('/animals/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');
