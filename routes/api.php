<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/', function () {
    return "Hola mundoooo";
});

Route::resource('restaurants', RestaurantController::class);
