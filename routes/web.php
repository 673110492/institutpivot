<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FormationController;
use App\Http\Controllers\Admin\EnseignantController;
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
    return view('home');
});
Route::get('/home', function () {
    return view('admin.dashboard');
});
Route::controller(FormationController::class)->name('formation.')->prefix('formation')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('delete');
    Route::post('statut/{id}', 'statut')->name('statut');
});
Route::controller(EnseignantController::class)->name('formateur.')->prefix('formateur')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('delete');
});
