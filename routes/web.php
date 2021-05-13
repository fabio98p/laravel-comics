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

Route::get('/', function () {
    return view('home')->with('dati', config('dati'));
});

Route::get('/comic/{id}', function ($id) {
    $comic = config('comic');
    return view('comic')->with('comic', $comic[$id]);
})->name('comic');

