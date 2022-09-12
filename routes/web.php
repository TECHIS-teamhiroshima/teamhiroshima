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
Route::get('/items', [App\Http\Controllers\ItemController::class, 'items']);
Route::get('/edit', [App\Http\Controllers\EditController::class, 'edit'])->name('edit');
Route::get('/add', [App\Http\Controllers\addController::class, 'add'])->name('add');
Route::get('/detail', [App\Http\Controllers\DetailController::class, 'detail'])->name('detail');
Route::post('/add', 'addController@create');