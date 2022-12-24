<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersHtmlMethodController;

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

Route::get('/', function () {
    return view('welcome');
});

//Http Client
Route::get("users",[UserController::class,'index']);

//Http Methods

//Route::post("htmlmethod",[UsersHtmlMethodController::class,'testRequest']);
//Route::get("htmlmethod",[UsersHtmlMethodController::class,'testRequest']);

//Route::delete("htmlmethod",[UsersHtmlMethodController::class,'testRequest']);


Route::patch("htmlmethod",[UsersHtmlMethodController::class,'testRequest']);
Route::view('login','usershtmlmethod');