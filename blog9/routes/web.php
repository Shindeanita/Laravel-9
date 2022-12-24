<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserHtmlController;
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

// Route::get('/{name}', function ($name) {
//     //echo $name;
//     return view('hello',['name'=>$name]);
// });

Route::get('/',function(){
    //return view('welcome');
    return redirect('about');
});

// Route::get("/about",function(){
//     return view('about');
// });
// First arg is url and second is file name
Route::view('about','about');
Route::view('contact','contact');

Route::view('hello','hello');

Route::view('reach-us','contact');

// Route::get('users/{user}',[Users::class,'index']);

// Route::get('users/getName/{name}',[Users::class,'getName']);

// Route::get('user/{name}',function($name){
//     return view('users',['name'=>$name]);
// });

Route::view('users','users');
Route::get('users/{name}',[UsersController::class,'loadView']);

Route::get('views',[UsersController::class,'viewLoad']);

Route::get('users',[UsersController::class,'index']);


// Rotes for UserHtmlConreoller

Route::post('userHtml',[UserHtmlController::class,'getData']);

Route::view('login','userHtml');
Route::view('noaccess','noaccess');


//Database

Route::get('user',[UserController::class,'getData']);