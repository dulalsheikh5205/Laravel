<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::view('/','welcome');
// Route::view('/','Home');
Route::GET('/',[HomeController::class,'home'])->name('home');
Route::GET('/about/{id}/{name}',[HomeController::class,'about'])->name('about');

Route::GET('/services',[HomeController::class,'services']);


// Route::GET('/',function(){
//     return "<h1>hello</h1>";
// });
// Route::GET('/about',function(){
//     return "<h1>Good</h1>";
// });
