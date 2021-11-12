<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/',[ArticlesController::class,'list']);

Route::get('/searching', [ArticlesController::class,'searchPost'])->name('searchSimple');

Route::prefix('articles')->name('articles.')->group(function(){
    Route::get('/',[ArticlesController::class,'list'])->name('list');
    Route::get('/{id}',[ArticlesController::class,'item'])->name('item');

});


