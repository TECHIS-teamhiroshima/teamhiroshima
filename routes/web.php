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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/items', [App\Http\Controllers\ItemController::class, 'items'])->name('items');
Route::get('/add', [App\Http\Controllers\addController::class, 'add'])->name('add');
// Route::get('/edit', [App\Http\Controllers\editController::class, 'edit'])->name('edit');