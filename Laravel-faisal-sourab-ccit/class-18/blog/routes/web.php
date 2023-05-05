<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\backend\BlogController;

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

Route::get('/', [FrontendController::class,'index'])->name('welcome');
Route::get('/post-view/{post:slug}',[FrontendController::class,'postView'])->name('post.view');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::GET('/add-blog',[BlogController::class,'addPost'])->name('blog.add');
Route::POST('/store-blog',[BlogController::class,'store'])->name('blog.store');
Route::GET('all-blogs',[BlogController::class,'allPosts'])->name('blog.all');

Route::GET('/status/{id}',[BlogController::class,'statusUpdate'])->name('blog.status');
Route::GET('/edit-blog/{id}',[BlogController::class,'editBlog'])->name('blog.edit');
Route::PUT('/update-blog/{id}',[BlogController::class,'updateBlog'])->name('blog.update');
Route::DELETE('/delete-blog/{id}',[BlogController::class,'deleteBlog'])->name('blog.delete');
