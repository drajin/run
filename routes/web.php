<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CategoriesController;
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


Route::view('/about', 'about')->name('about');
Route::get('/', [HomeController::class, 'welcome']);
Route::get('/{post}/show', [HomeController::class, 'show'])->name('single_post');

//Route::group([
//    'middleware' => 'auth',
//],function(){
//    Route::resource('/posts', PostsController::class);
//    Route::group([
//    ],function(){
//        Route::resource('/tags', TagsController::class,['except' => [ 'show' ]]);
//        Route::resource('/categories', TagsController::class,['except' => [ 'show' ]]);
//    });
//});

Route::group([
    'middleware' => 'auth',
],function(){
    Route::resource('/posts', PostsController::class);
    Route::resource('/tags', TagsController::class , [
        'except' => [ 'show' ]
    ]);
    Route::resource('/categories', CategoriesController::class , [
        'except' => [ 'show' ]
    ]);
});






Auth::routes();

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
