<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\NationalityController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("welcome");
});

Route::get("/dashboard", function () {
    return view("dashboard");
})
    ->middleware(["auth", "verified"])
    ->name("dashboard");

require __DIR__ . "/auth.php";

Route::middleware(["auth"])->group(function () {
    Route::middleware(["role:admin"])->group(function () {
        Route::prefix("admin")->group(function () {
            Route::name("admin.")->group(function () {
                Route::resource("user", UserController::class);
                Route::resource("nationality", NationalityController::class);
                Route::resource("genre", GenreController::class);
                Route::resource("publisher", PublisherController::class);
            });
        });
    });
});
