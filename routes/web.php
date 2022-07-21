<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CelanderController;

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

Route::resource('/event', CelanderController::class);
Route::get('/addevent',[App\Http\Controllers\CelanderController::class,'display']);
Route::post('/addevent',[App\Http\Controllers\CelanderController::class,'store']);
Route::get('/editevent',[App\Http\Controllers\CelanderController::class,'show']);
Route::get('/event/edit/{id}',[App\Http\Controllers\CelanderController::class,'edit']);
Route::get('jaymahadev/{id}',[App\Http\Controllers\CelanderController::class,'xyzzxy']);

Route::get('event/delete/{id}',[App\Http\Controllers\CelanderController::class,'delete']);

