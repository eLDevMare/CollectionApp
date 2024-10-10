<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function(){

    Route::get('/', function(){
return view('collection.login');
    });
    Route::get('/login',[LoginController::class, 'index'])->name('login.index');
    Route::post('/login/post', [LoginController::class, 'login'])->name('login.post');
});

Route::middleware(['login'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/collection', [TradeController::class, 'index'])->name('trade.index');
    Route::get('/collection/{id}', [TradeController::class, 'view'])->name('trade.view');
    Route::get('/collection/update/{id}', [TradeController::class, 'update'])->name('trade.update');
    Route::post('/update/post', [TradeController::class, 'store'])->name('update.update');
});
