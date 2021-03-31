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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('','App\Http\Controllers\Dashboard\DashboardController@index')->name('dashboard.index');
Route::get('/create','App\Http\Controllers\Dashboard\DashboardController@create')->name('dashboard.create');
Route::post('/submit', "App\Http\Controllers\Dashboard\DashboardController@store")->name('form.submit');


