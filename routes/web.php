<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorderRadiusController;

Route::get('/border-radius', [BorderRadiusController::class, 'index']); 
