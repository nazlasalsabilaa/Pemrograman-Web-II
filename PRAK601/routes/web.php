<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [ProfileController::class, 'index']);
Route::get('/pengalaman/{id}', [PengalamanController::class, 'detail']);