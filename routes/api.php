<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function(){
    Route::get('/events', [EventController::class, 'index']);
});
