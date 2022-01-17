<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Auth::routes();
// disable register
//  Auth::routes(['register' => false]);

Route::view('/about', 'about')->name('about');

Route::get('/', function(){
    return view('welcome')->with('posts', Post::paginate(5));
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/{post}', [HomeController::class, 'show'])->name('single_post');

// Admin Routs
Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin',
],function(){
    Route::resource('/posts', App\Http\Controllers\Admin\PostsController::class);
    Route::resource('/tags', App\Http\Controllers\Admin\TagsController::class , [
        'except' => [ 'show' ]
    ]);
    Route::resource('/categories', App\Http\Controllers\Admin\CategoriesController::class , [
        'except' => [ 'show' ]
    ]);
});



