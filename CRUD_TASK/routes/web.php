<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\ProductController;

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

Route::get('list',[MemberController::class,'show']);
Route::post('list',[MemberController::class,'store']);
Route::view('add','addmember');

Route::get('delete/{id}',[MemberController::class,'delete']);
Route::get('update/{id}',[MemberController::class,'showData']);

Route::post('edit',[MemberController::class,'updateData']);

Route::get('query',[QueryBuilderController::class,'dbOperation']);
//Route::view('queryPage','queryPage');

//Aggregate Function

Route::get('aggregate',[ProductController::class,'aggregateFunction']);


