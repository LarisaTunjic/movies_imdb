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

Route::get('/', [App\Http\Controllers\PublicController::class, 'home'])->name('home');
Route::get('/movie/{id}', [App\Http\Controllers\PublicController::class, 'movie'])->name('movie');
Route::get('/movie-result', [App\Http\Controllers\PublicController::class, 'movieSearch'])->name('movie-result');


/*Route::get('/', function(){
    return view('welcome');
});*/