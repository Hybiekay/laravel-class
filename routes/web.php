<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/greet/{num1}/{num2}" , function($num1, $num2){
    $sum = $num1  + "90";
   return $sum;
} );

Route::get("/sign-up", [UserController::class,  "create"]);

Route::post("/sign-up", action:[UserController::class,  "store"] );


Route::get("/login", [AuthController::class,"create"])->name("login");
Route::post("/login", [AuthController::class,"login"]);

Route::get("/dashboard", function(){
    return view("dashboard");
})->name("dashboard")->middleware('auth');



