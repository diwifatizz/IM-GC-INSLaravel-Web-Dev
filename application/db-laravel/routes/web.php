<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');});
Route::get('/tables', function () {return view('tables');});
Route::get('/data-tables', function () {return view('data-tables');});
Route::get('/dashboard', function () {return view('dashboard');});
Route::get('/contact', function () {return view('contact');});
Route::get('/user', function () {return view('user');});

Route::get('/cast', [App\Http\Controllers\CastController::class,'Index']);
Route::get('/cast/create', [App\Http\Controllers\CastController::class,'Create']);
Route::post('/cast', [App\Http\Controllers\CastController::class,'Store']);
Route::get('/cast/edit/{id}', [App\Http\Controllers\CastController::class,'Edit']);
Route::patch('/cast/{id}', [App\Http\Controllers\CastController::class,'editProcces']);
Route::delete('/cast/{id}', [App\Http\Controllers\CastController::class,'delete']);
Route::get('/cast/show/{id}', [App\Http\Controllers\CastController::class, 'show']);
