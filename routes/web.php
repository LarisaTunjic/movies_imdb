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
Route::get('/all-results', [App\Http\Controllers\PublicController::class, 'Search'])->name('all-results');
Route::get('/movies-result', [App\Http\Controllers\PublicController::class, 'moviesSearch'])->name('movies-results');
Route::get('/series-result', [App\Http\Controllers\PublicController::class, 'seriesSearch'])->name('series-results');
/*Route::get('/', function(){
    return view('welcome');
});*/