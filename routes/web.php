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
    return view('/top');
});

Auth::routes();
    Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/items', [App\Http\Controllers\ItemController::class, 'items']);
    Route::get('/add', [App\Http\Controllers\AddController::class, 'add'])->name('add');
    Route::post('/add', 'addController@create');
    Route::post('/add', [App\Http\Controllers\ItemController::class, 'store']);
    Route::delete('item/{id}', [\App\Http\Controllers\ItemController::class, 'destroy']);
    Route::get('/detail/{id}', [App\Http\Controllers\ItemController::class, 'detail'])->name('item.detail');
    Route::get('/editing/{id}', [App\Http\Controllers\ItemController::class, 'editing'])->name('item.editing');
    //edit,updateアクション
    Route::resource('/item', 'ItemsController', ['only' => ['create', 'store', 'detail', 'destroy', 'editing', 'update']]);
});