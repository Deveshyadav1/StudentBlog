<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blogs', [StudentController::class, 'showBlogList'])->name('blogs');

Route::middleware(['auth'])->group(function () {
   
    Route::get('/blogs', [StudentController::class, 'showBlogList'])->name('blogs');

    Route::get('/add_blog', [StudentController::class, 'createBlogList'])->name('blogs');

    Route::post('/submit-blog', [StudentController::class, 'submitBlog'])->name('submit-blog');
});