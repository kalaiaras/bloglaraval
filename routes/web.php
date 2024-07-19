<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [RouteController::class, 'dashboard'])->name('dashboard');
Route::get('category', [RouteController::class, 'category'])->name('category');
Route::get('subcategory', [RouteController::class, 'subcategory'])->name('subcategory');
Route::get('addpages', [RouteController::class, 'addpages'])->name('addpages');
Route::get('addpost', [RouteController::class, 'addpost'])->name('addpost');
Route::get('addsponsor', [RouteController::class, 'addsponsor'])->name('addsponsor');
Route::get('adduser', [RouteController::class, 'adduser'])->name('adduser');
Route::get('addvideo', [RouteController::class, 'addvideo'])->name('addvideo');
Route::get('allposts', [RouteController::class, 'allposts'])->name('allposts');
Route::get('editcategory', [RouteController::class, 'editcategory'])->name('editcategory');
Route::get('newsletter', [RouteController::class, 'newsletter'])->name('newsletter');
Route::get('pages', [RouteController::class, 'pages'])->name('pages');
Route::get('approvedcomments', [RouteController::class, 'approvedcomments'])->name('approvedcomments');
Route::get('pendingcomments', [RouteController::class, 'pendingcomments'])->name('pendingcomments');
Route::get('sponsor', [RouteController::class, 'sponsor'])->name('sponsor');
Route::get('users', [RouteController::class, 'users'])->name('users');

Route::get('edit_category/{id}', [RouteController::class, 'edit_category'])->name('edit_category');
Route::get('edit_post/{id}', [RouteController::class, 'edit_post'])->name('edit_post');
Route::get('edit_subcategory/{id}', [RouteController::class, 'edit_subcategory'])->name('edit_subcategory');
Route::get('delete_category/{id}', [CategoriesController::class, 'delete_category'])->name('delete_category');
Route::get('delete_subcategory/{id}', [CategoriesController::class, 'delete_subcategory'])->name('delete_subcategory');
Route::get('delete_post/{id}', [PostsController::class, 'delete_post'])->name('delete_post');
