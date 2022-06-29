<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\homeController;

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
//     return view('layouts.home');
// });
Route::get('/', 'App\Http\Controllers\homeController@index');
Route::get('/create', function () {
    return view('layouts.create');
});
// Route::get('/show', function () {
//     return view('layouts.show');
// });
Route::resource('show', 'App\Http\Controllers\CRUDController');
Route::get('/about', function () {
    return view('layouts.about');
});
