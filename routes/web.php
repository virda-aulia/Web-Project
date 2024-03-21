<?php

use App\Http\Controllers\Accounts\AdministratorController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Authorization\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/layouts-template", [AppController::class, "templating"]);

Route::controller(AppController::class)->group(function() {
    Route::prefix("app")->group(function() {
        Route::get("dashboard", "dashboard")->name("app.dashboard");
    });
});

Route::controller(LoginController::class)->group(function() {
    Route::get("/login", "login")->name("authorization.login");
    Route::post("/login", "proses_login")->name("authorization.proses");
});

Route::controller(AdministratorController::class)->group(function() {
    Route::prefix("app")->group(function() {
        Route::get("administrator", "index")->name("accounts.administrator.index");
    });
});
