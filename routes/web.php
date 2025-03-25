<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

route::get("/", [HomeController::class,"index"]);
route::post("/upload_post", [HomeController::class,"upload"]);
route::get("/view_post", [HomeController::class,"view_post"]);
route::get("/delete_post/{id}", [HomeController::class,"delete_post"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
