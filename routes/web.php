<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HousesController;

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
})->name('home');

// Create house page
Route::get('/create', function () {
    return view('create');
})->middleware('auth')->name('create');

// Update house page
Route::get('/update', function () {
    return view('update');
})->middleware('auth')->name('update');

// Edit house page
Route::get('/houses/{id}/edit', 'App\Http\Controllers\HousesController@edit')->middleware('auth')->name('edit');

// Edit house page
Route::get('/houses/{id}/delete', 'App\Http\Controllers\HousesController@destroy')->middleware('auth')->name('delete');


//// See house detail page
//Route::get('/house', function () {
//    return view('house');
//});
//Route::get('/search', function () {
//    return view('search');
//})->name('search');

Route::resource('houses', 'App\Http\Controllers\HousesController');
Route::get('/index', 'App\Http\Controllers\HousesController@index');
Route::get('/house/{id}', 'App\Http\Controllers\HousesController@show');
Route::get('/search', 'App\Http\Controllers\HousesController@search');
Route::get('/dashboard', 'App\Http\Controllers\HousesController@showUserEntries')->middleware('auth')->name('dashboard');

require __DIR__.'/auth.php';
