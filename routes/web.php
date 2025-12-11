<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create',[AjaxController::class,'index'])->name('create.index');

Route::post('/create/book',[AjaxController::class,'create'])->name('create.create');