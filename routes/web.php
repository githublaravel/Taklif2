<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->group(function(){
    Route::prefix('product')->group(function(){
        Route::post('/create',[ProductController::class,'create']);
        Route::get('/',[ProductController::class,'view']);
        Route::get('/update/{id}',[ProductController::class,'update_show']);
        Route::post('/update/{id}',[ProductController::class,'update']);
        Route::get('/delete/{id}',[ProductController::class,'delete']);
        Route::get('/image',[ProductController::class,'pimage']);
        Route::post('/image',[ProductController::class,'cimage']);
    });
    Route::prefix('user')->group(function(){
        Route::get('/create',[UserController::class,'create_show']);
        Route::post('/create',[UserController::class,'create']);
        Route::get('/',[UserController::class,'view']);
        Route::get('/update/{id}',[UserController::class,'update_show']);
        Route::post('/update/{id}',[UserController::class,'update']);
        Route::get('/delete',[UserController::class,'delete']);
        Route::get('/image',[UserController::class,'pimage']);
        Route::post('/image',[UserController::class,'cimage']);
    });
    Route::prefix('category')->group(function(){
        Route::get('/create',[CategoryController::class,'create_show']);
        Route::post('/create',[CategoryController::class,'create']);
        Route::get('/',[CategoryController::class,'view']);
        Route::get('/update/{id}',[CategoryController::class,'update_show']);
        Route::post('/update/{id}',[CategoryController::class,'update']);
        Route::get('/delete',[CategoryController::class,'delete']);
        Route::get('/image',[CategoryController::class,'pimage']);
        Route::post('/image',[CategoryController::class,'cimage']);
    });
});


Route::prefix('home')->group(function(){
    Route::get('/product/{id}',[ProductController::class,'show_prod']);
    Route::get('/products/{cat_id}',[ProductController::class,'show_prods']);
    Route::get('/',[CategoryController::class,'show_cats']);
});
