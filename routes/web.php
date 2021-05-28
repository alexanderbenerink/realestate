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

Route::get('/hometest', function () {
    return view('hometest');
});

// Create house page
Route::get('/create', function () {
    return view('create');
})->middleware('auth')->name('create');

// Update house page
Route::get('/update', function () {
    return view('update');
});

// Edit house page
Route::get('/edit', function () {
    return view('edit');
});

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
