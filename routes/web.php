<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',             [MainController::class,   'index'])->name('home');
Route::get('/learn',        [LearnController::class,  'index']);
Route::get('/learn/{slug}', [LearnController::class,  'category']);
Route::post('/reviews',     [ReviewController::class, 'saveReview']);

Route::get('/blog',                [BlogController::class,    'index']);
Route::get('/blog/{article:slug}', [BlogController::class, 'article']);

Auth::routes();
