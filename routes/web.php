<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', [EmailController::class, 'showForm'])->name('show.form');
Route::post('/email/send', [EmailController::class, 'sendEmail'])->name('send.email');
