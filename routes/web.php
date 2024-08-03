<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', [DataController::class, 'index']);
Route::get('/news', [DataController::class, 'news']);
Route::get('/newsDetails/{id}', [DataController::class, 'newsDetail']);
