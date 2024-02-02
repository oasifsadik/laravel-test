<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('pending-user',[UserController::class,'index']);
    Route::get('user',[UserController::class,'user']);

});


Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/admin-dashboard',[AdminController::class,'index']);
    Route::get('approved-user/{id}',[AdminController::class,'approved']);
    Route::get('approved-decline/{id}',[AdminController::class,'decline']);
});
