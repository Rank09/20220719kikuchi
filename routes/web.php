<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdministratorController;



Route::get('/contact', [ContactController::class,'index'])->name('contact.contact');
Route::get('/session', [SessionController::class,'getSes']);
Route::post('/session', [SessionController::class,'postSes']);
Route::post('/contact/confirm', [ContactController::class,'confirm'])->name('contact.confirm');
Route::post('/contact/thanks', [ContactController::class,'create'])->name('contact.thanks');
Route::get('/administrator', [AdministratorController::class,'administrator'])->name('administrator.administrator');