<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\ContactController;
use App\Http\Controllers\Ajax\ContactController as AjaxContactController;

Route::get('/contacts', [ContactController::class, 'index']);

Route::post('/ajax/contacts', [AjaxContactController::class, 'store']);