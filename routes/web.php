<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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



Route::get('category/index',[CategoryController::class,'index']);
Route::get('category/create',[CategoryController::class,'create']);
Route::post('category/create',[CategoryController::class,'store']);
Route::get('category/edit/{id}',[CategoryController::class,'edit']);
Route::post('category/update',[CategoryController::class,'update']);
Route::get('category/trash/{id}',[CategoryController::class,'trash']);
Route::get('category/destroy/{id}',[CategoryController::class,'destroy']);
Route::get('category/details/{id}',[CategoryController::class,'show']);



Route::get('product/index',[ProductController::class,'index']);
Route::get('product/create',[ProductController::class,'create']);
Route::post('product/create',[ProductController::class,'store']);
Route::get('product/edit/{id}',[ProductController::class,'edit']);
Route::post('product/update',[ProductController::class,'update']);
Route::get('product/trash/{id}',[ProductController::class,'trash']);
Route::get('product/destroy/{id}',[ProductController::class,'destroy']);
Route::get('product/details/{id}',[ProductController::class,'show']);


