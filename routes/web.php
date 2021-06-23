<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CafeRestaurantController;
use App\Http\Controllers\CommandsParSiteController;
use App\Http\Controllers\COrdinaireController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\etoileController;
use App\Http\Controllers\FirstPageController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\PAlimantaireController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\PlatChoisieController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServeurController;
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
// Route::get('/', function () {
//     return view('myWelcom');
// });

Auth::routes();

Route::resource('/profile', ProfileController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/utilisateurs', utilisateurController::class);

Route::resource('/employees', employeeController::class);

Route::resource('/cafeRestaurants', CafeRestaurantController::class);

Route::resource('/materiels', MaterielController::class);

Route::resource('/PAlimantaires', PAlimantaireController::class);

Route::resource('/plats', PlatController::class);

Route::get('/h/cafeRestaut',[PlatController::class,'plat_user'])->name('plat_user');

Route::get('/fitchVille',[CafeRestaurantController::class,'fitchVille'])->name('cafe_restaurants.fitchVille');

Route::get('/cafeRestauts',[CafeRestaurantController::class,'cafe_index']);

Route::get('/fitchR/{categorie}',[PlatController::class,'fitchR'])->name('plats.fitchR');

Route::get('/afficheCafePlat/{cafe}',[PlatController::class,'afficheCafePlat'])->name('plats.afficheCafePlat');

Route::get('/panier/{plat}',[PanierController::class,'addToCart'])->name('panier.add');
Route::get('/affichePanier',[PanierController::class,'affichePanier'])->name('panier.affichePanier');
Route::get('/viderPanier',[PanierController::class,'viderPanier'])->name('panier.viderPanier');
Route::get('/supprimerItem/{item}',[PanierController::class,'supprimerItem'])->name('panier.supprimerItem');

Route::get('/valider',[CommandsParSiteController::class,'store'])->name('store');

Route::resource('/serveurs', ServeurController::class);

Route::resource('/cordinaire', COrdinaireController::class);

Route::post('/cordinaire/add',[COrdinaireController::class,'addPlatToCommandOrdinaire'])->name('cordinaire.addPlatToCommandOrdinaire');
Route::post('/cordinaire/store',[COrdinaireController::class,'storeDb'])->name('cordinaire.storeDb');
Route::get('etoile',[etoileController::class,'addEtoile'])->name('etoile.addEtoile');

Route::get('/',[FirstPageController::class,'index'])->name('user_home');

Route::get('/plate/{id}',[PlatChoisieController::class,'show'])->name('plate.show');

Route::get('/About',[AboutUsController::class,'index'])->name('about.index');
