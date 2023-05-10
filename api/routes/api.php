<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::prefix('feedback')->controller(FeedbackController::class)->group(function () {
   Route::post('/', 'create');
});
