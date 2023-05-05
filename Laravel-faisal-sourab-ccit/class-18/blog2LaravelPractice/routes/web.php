<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\StudentController;
use App\Models\StudentModel;
use App\Http\Controllers\BasicCurdController; // import controller
use App\Http\Controllers\FrontendController; // import controller
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

Route::get('/',[FrontendController::class,'index'])->name('welcome');
Route::get('/post-view/{post:slug}', [FrontendController::class, 'postView'])->name('post.view');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::GET('/add-blog',[BlogController::class,'addPost'])->name('blog.add');
Route::POST('/add-store',[BlogController::class,'store'])->name('blog.store');
Route::GET('/all-blogs',[BlogController::class,'allPosts'])->name('blog.all');
Route::GET('/status/{id}',[BlogController::class,'statusUpdate'])->name('blog.status');
Route::GET('/edit-blog/{id}',[BlogController::class,'editBlog'])->name('blog.edit');
Route::PUT('/update-blog/{id}', [BlogController::class,'updateBlog'])->name('blog.update');
Route::DELETE('/delete-blog/{id}', [BlogController::class,'deleteBlog'])->name('blog.delete');

// rabbil video 62
Route::get('/select',[BasicCurdController::class,'onSelect']);
//Route::get('/insert',);
//Route::get('/delete',);
//Route::get('/update',);

//rabbil video 63
Route::get('/insert',function (){
    return view('insert');
});

//rabbil video 64
Route::POST('/insertData',[BasicCurdController::class,'onInsert']);

// rabbil video 66
Route::POST('/deleteData',[BasicCurdController::class,'onDelete']);

Route::get('/delete',function (){
    return view('delete');
});

// rabbil video 67
Route::POST('/updateData',[BasicCurdController::class,'onUpdate']);

Route::get('/update',function (){
   return view('update');
});

// practice
Route::get ('emp/{id}', function ($id) {
    echo 'Employment '.$id;
});

// rabbil practice

Route::get('/all',[StudentController::class,'allSelect'] );


