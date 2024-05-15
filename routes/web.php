<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationcontroller;

Route::get('/register',[registrationcontroller::class, 'index']);
Route::post('/register',[registrationcontroller::class,'register']);