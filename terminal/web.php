<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;

Route::get('/q1', [QuestionsController::class, 'showQ1']);
Route::get('/q2', [QuestionsController::class, 'showQ2']);
Route::get('/q3', [QuestionsController::class, 'showQ3']);
