<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/customer'], function () {
    Route::get('/view', [CustomerController::class, 'view']);
    Route::post('/save', [CustomerController::class, 'save']);
});
