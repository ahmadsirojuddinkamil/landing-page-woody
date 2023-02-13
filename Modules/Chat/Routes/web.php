<?php

use Illuminate\Support\Facades\Route;
use Modules\Chat\Http\Controllers\{UserController, DashboardController};

Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/user', UserController::class);
});
