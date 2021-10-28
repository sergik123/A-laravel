<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportController;
use App\Repositories\UserRepository;
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

Route::get('users/',function(){
    $admins=[
        ['username'=>'admin','name'=>'Ivan'],
        ['username'=>'user1','name'=>'Vasya'],
    ];
    dd($admins);
})->name('users');
Route::get('user/{id}',[UserController::class,'user'])->whereNumber('id');

Route::get('test',[UserRepository::class,'list']);
Route::get('export',ExportController::class);

Route::get('request-test',function(Request $request){
   // dd($request->input('b'));
    dd($request->b);
});

