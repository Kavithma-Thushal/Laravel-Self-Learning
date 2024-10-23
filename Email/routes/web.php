<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmailController::class, 'showForm'])->name('show.form');
Route::post('/email/send', [EmailController::class, 'sendEmail'])->name('send.email');
