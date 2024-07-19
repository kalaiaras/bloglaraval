<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getposts', [PostsController::class, 'getposts']);
Route::post('add_category', [CategoriesController::class, 'add_category']);
Route::post('add_user', [UserController::class, 'add_user']);
Route::post('add_post', [PostsController::class, 'add_post']);
Route::post('add_subcategory', [CategoriesController::class, 'add_subcategory']);
Route::post('add_page', [PagesController::class, 'add_page']);
Route::post('add_sponsor', [UserController::class, 'add_sponsor']);
Route::get('getcategories', [CategoriesController::class, 'getcategories']);
Route::get('getsubcategories', [CategoriesController::class, 'getsubcategories']);
Route::get('getallposts', [PostsController::class, 'getallposts']);

Route::post('update_post', [PostsController::class, 'update_post']);
Route::post('update_category', [CategoriesController::class, 'update_category']);
Route::post('update_subcategory', [CategoriesController::class, 'update_subcategory']);

