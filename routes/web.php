<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Authorization\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/layouts-template", [AppController::class, "templating"]);

Route::controller(LoginController::class)->group(function() {
    Route::get("/login", "login");
    Route::post("/login", "proses_login");
});
