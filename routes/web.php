<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostController::class, 'index']);
Route::get('/test', function () {
    return view('testing');
});
// minggu 3
Route::get('/hello', function () {
    return "Hello, World!";
});
Route::get("user_id/{id}", function ($id) {
    return "User ID: " . $id;
});
Route::get("/user_name/{name?}", function ($name = "Guest") {
    return "Hello, " . $name;
});
Route::get("/dashboard", function () {
    return view("dashboard");
})->name('route_name');
Route::get("/test", function () {
    return redirect()->route('route_name');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });
    Route::get('/users', function () {
        return "Admin Users";
    });
});

Route::get('/data', function () {
    return "GET Request"; });
Route::post('/data', function () {
    return "POST Request"; });
Route::put('/data', function () {
    return "PUT Request"; });
Route::delete('/data', function () {
    return "DELETE Request"; });
Route::patch('/data', function () {
    return "PATCH Request"; });
Route::fallback(function () {
    return "Nyasar woii!";
});
