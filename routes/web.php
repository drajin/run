<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostsController;

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

// Route redirect
Route::redirect('/home', '/');
// Admin Routs
Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin',
],function(){
    Route::get('/trash', [PostsController::class, 'trash'])->name('trash');
    Route::get('/trash/restore/{post}', [PostsController::class, 'restore'])->name('restore');
    Route::get('/trash/restore_all', [PostsController::class, 'restore_all'])->name('restore_all');
    Route::get('/trash/destroy_permanently/{post}', [PostsController::class, 'destroy_permanently'])->name('destroy_permanently');
    Route::get('/trash/destroy_permanently_all', [PostsController::class, 'destroy_permanently_all'])->name('destroy_permanently_all');

    Route::resource('/posts', App\Http\Controllers\Admin\PostsController::class);
    Route::resource('/tags', App\Http\Controllers\Admin\TagsController::class , [
        'except' => [ 'show' ]
    ]);
    Route::resource('/categories', App\Http\Controllers\Admin\CategoriesController::class , [
        'except' => [ 'show' ]
    ]);
});



