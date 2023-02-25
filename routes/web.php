<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserController::class)->group(function(){
    Route::get("/","index")->name("login")->middleware("guest");
    Route::post("login","user_login")->name("user_login");
    Route::get("register","register")->name("register")->middleware("guest");
    Route::post("register_user","register_user")->name("register_user");
    Route::get("loggout","logout")->name("loggout");
    Route::get("dashboard","dashboard")->name("dashboard")->middleware("auth");
});