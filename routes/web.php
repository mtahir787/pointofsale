<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


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



Route::get('user/index',[UserController::class,'index']);
Route::get('user/create',[UserController::class,'create']);
Route::post('user/create',[UserController::class,'store']);
Route::get('user/edit/{id}',[UserController::class,'edit']);
Route::post('user/update',[UserController::class,'update']);
Route::get('user/trash/{id}',[UserController::class,'trash']);
Route::get('user/destroy/{id}',[UserController::class,'destroy']);
Route::get('user/details/{id}',[UserController::class,'show']);



Route::get('admin/index',[AdminController::class,'index']);
Route::get('admin/create',[AdminController::class,'create']);
Route::post('admin/create',[AdminController::class,'store']);
Route::get('admin/edit/{id}',[AdminController::class,'edit']);
Route::post('admin/update',[AdminController::class,'update']);
Route::get('admin/trash/{id}',[AdminController::class,'trash']);
Route::get('admin/destroy/{id}',[AdminController::class,'destroy']);
Route::get('admin/details/{id}',[AdminController::class,'show']);


Route::get('role/index',[RoleController::class,'index']);
Route::get('role/create',[RoleController::class,'create']);
Route::post('role/create',[RoleController::class,'store']);
Route::get('role/edit/{id}',[RoleController::class,'edit']);
Route::post('role/update',[RoleController::class,'update']);
Route::get('role/trash/{id}',[RoleController::class,'trash']);
Route::get('role/destroy/{id}',[RoleController::class,'destroy']);
Route::get('role/details/{id}',[RoleController::class,'show']);