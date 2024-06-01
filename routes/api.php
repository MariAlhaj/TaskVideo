<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('videos',[VideoController::class,'index']);

Route::post('add_category',[CategoryController::class,'create']);

Route::post('add_subcategory',[SubcategoryController::class,'create']);
 
Route::delete('video/delete/{id}',[VideoController::class,'destroy']);

Route::post('create_video',[VideoController::class,'create']);

Route::post('add_like',[LikeController::class,'store']);

Route::post('add_rate',[RatingController::class,'store']);
