<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', [DataController::class, 'index']);
Route::get('/news/{url}', [DataController::class, 'news']);
// Route::get('/newsDetails/{id}', [DataController::class, 'newsDetail']);
// 127.0.0.1:8000/news/health/id
Route::get('/news/{url}/{id}', [DataController::class, 'newsDetail']);
