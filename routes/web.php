<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/email/send', [EmailController::class, 'send'])->name('send.email');
