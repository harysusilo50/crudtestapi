<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChallengeController;

Route::get('/challenge', [ChallengeController::class, 'index'])->name('home');
Route::post('/challenge',[ChallengeController::class, 'process'])->name('process');