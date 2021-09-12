<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnnonceController;

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
Route::get('/annonce','AnnonceController@index');
Route::get('/annonce', function () {
    return view('annonce');
});
Route::resource('annonce','AnnonceController');
Route::post('/annonce', 'AnnonceController@store')->name('annonce');
Route::view('/annonce', 'annonce');

Route::get('/mdp', function () {
    return view('mdp_oublié');
});
Route::get('/code', function () {
    return view('code');
});
Route::get('/saisir_code', function () {
    return view('saisir_code');
});
Route::get('/nouveau_mdp', function () {
    return view('nouveau_mdp');
});
Route::get('/mdp_oublié', function () {
    return view('mdp_oublié');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/registre', function () {
    return view('registre');
});

Route::get('/header', function () {
    return view('header');
});
Route::get('/footer', function () {
    return view('footer');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/connected', function () {
    return view('home_connected');
});
Route::get('/master', function () {
    return view('master');
});
Route::get('/master_connected', function () {
    return view('master__connected');
});
Route::get('/favoris', function () {
    return view('favoris');
});

Route::get('/profile_agence', function () {
    return view('profile_agence');
});
Route::get('/profile_particulier', function () {
    return view('profile_particulier');
});

Route::view('registre', 'registre');
Route::post('registre', 'AddUserController@addUser');

Route::view('login', 'login');
Route::post('login', 'LoginController@login');

Route::view('mdp_oublié', 'mdp_oublié');
Route::post('mdp_oublié', 'LoginController@VerifierUser');

Route::view('profile_particulier', 'profile_particulier');
Route::post('profile_particulier', 'ProfileController@ProfileParticulier');



Route::view('profile_agence', 'profile_agence');
Route::post('profile_agence', 'ProfileController@ProfileAgence');

Route::view('header_connected', 'header_connected');
Route::post('heafer_connected', 'ProfileController@Profile');
