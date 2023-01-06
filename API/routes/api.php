<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApi;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::group(["middleware"=>"auth:sanctum"],function(){
    // all secure urls
    Route::apiResource('member',MemberController::class);
    Route::get('data',[dummyApi::class,'getData']);
    Route::post('data/{key:device_name}',[dummyApi::class,'getDevice']);
Route::post('add',[dummyApi::class,'add']);
Route::put('update',[dummyApi::class, 'update']);

Route::delete('delete',[dummyApi::class,'delete']);
Route::get('search/{name}',[dummyApi::class,'search']);
Route::post('testData',[dummyApi::class,'testData']);
});


//Never put sign up and sign in route inside the group



Route::post('login',[UserController::class,'index']);