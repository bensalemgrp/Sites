<?php

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
Route::get('/mdp', function () {
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

Route::get('/home', function () {
    return view('home');
});
Route::get('/home_connected', function () {
    return view('home_connected');
});
Route::get('/master', function () {
    return view('master');
});

Route::get('/profile_particulier', function () {
    return view('profile_particulier');
});

Route::view('login', 'login');
Route::post('submit', 'App\Http\Controllers\colccontrollers@save');
