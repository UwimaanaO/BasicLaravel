<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

route::get("/", [HomeController::class,"index"]);
route::post("/upload_post", [HomeController::class,"upload"]);
route::get("/view_post", [HomeController::class,"view_post"]);
route::get("/delete_post/{id}", [HomeController::class,"delete_post"]);
route::get("/update_post/{id}", [HomeController::class,"update_post"]);
route::post("/confirm_update/{id}", [HomeController::class,"confirm_update"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
