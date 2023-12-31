<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Auth::routes();

Route::get("/", [App\Http\Controllers\HomeController::class, "home"])->name("home");

Route::get("/pagina1", function() {
    return view("pagina1");
});

Route::get("/pagina2", function() {
    return view("pagina2");
});

Route::get("/pagina3", function() {
    return view("pagina3");
});
