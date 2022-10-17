<?php

use App\Http\Controllers\ImovelController;
use App\Http\Controllers\OpmController;
use App\Http\Controllers\TelefoneController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('imovel', ImovelController::class);
Route::resource('telefone', TelefoneController::class);
Route::resource('opm', OpmController::class);
