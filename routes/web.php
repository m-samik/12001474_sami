<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsDisplay;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DataController;
//q1
Route::get('/news', [NewsDisplay::class, 'index']);

//q2
Route::get('/feedback', [FeedbackController::class, 'showForm']);
Route::post('/feedback', [FeedbackController::class, 'submitForm']);



//q3
Route::get('/preferences', [DataController::class, 'showPreferences']);
Route::post('/preferences', [DataController::class, 'updatePreferences']);