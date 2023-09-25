<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FormationController;
use App\Http\Controllers\Admin\EnseignantController;
use App\Http\Controllers\Admin\TemoignageController;
use App\Http\Controllers\Admin\AutreTemoignageController;
use App\Http\Controllers\Admin\TeteHomeController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\AproposController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ConctactController;
use App\Http\Controllers\Site\AcceuilController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\CoursController;
use App\Http\Controllers\Site\ContacterController;

/*
|--------------------------------------------------------------------------
| Web Routes admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return to_route('accueil.index');
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
Route::controller(TemoignageController::class)->name('temoignage.')->prefix('temoignage')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('delete');
    Route::post('statut/{id}', 'statut')->name('statut');
});
Route::controller(AutreTemoignageController::class)->name('autre.')->prefix('autre')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('delete');
    Route::post('statut/{id}', 'statut')->name('statut');
});
Route::controller(TeteHomeController::class)->name('tete.')->prefix('tete')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('delete');
    Route::post('statut/{id}', 'statut')->name('statut');
});
Route::controller(VideoController::class)->name('video.')->prefix('video')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('delete');
    Route::post('statut/{id}', 'statut')->name('statut');
});
Route::controller(AproposController::class)->name('apropos.')->prefix('apropos')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('delete');
    Route::post('statut/{id}', 'statut')->name('statut');
});
Route::controller(MessageController::class)->name('message.')->prefix('message')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::delete('/{id}', 'destroy')->name('delete');
});
Route::controller(ConctactController::class)->name('contact.')->prefix('contact')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('delete');
    Route::post('statut/{id}', 'statut')->name('statut');
});



/*
|--------------------------------------------------------------------------
| Web Routes site
|--------------------------------------------------------------------------
|dfbgbfbfg
|
*/

Route::controller(AcceuilController::class)->name('accueil.')->prefix('accueil')->group(function () {
    Route::get('/', 'index')->name('index');
});
Route::controller(AboutController::class)->name('propos.')->prefix('propos')->group(function () {
    Route::get('/', 'index')->name('index');
});
Route::controller(CoursController::class)->name('cours.')->prefix('cours')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});
Route::controller(ContacterController::class)->name('contacter.')->prefix('contacter')->group(function () {
    Route::get('/', 'index')->name('index');
});
