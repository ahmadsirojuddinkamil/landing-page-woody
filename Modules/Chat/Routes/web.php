<?php

use Illuminate\Support\Facades\Route;

Route::prefix('chat')->group(function () {
    Route::get('/', 'ChatController@index');
});
