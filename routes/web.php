<?php

use App\Http\Controllers\CafeRestaurantController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\PAlimantaireController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\utilisateurController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/profile', ProfileController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/utilisateurs', utilisateurController::class);

Route::resource('/employees', employeeController::class);

Route::resource('/cafeRestaurants', CafeRestaurantController::class);

Route::resource('/materiels', MaterielController::class);

Route::resource('/PAlimantaires', PAlimantaireController::class);

Route::resource('/plats', PlatController::class);