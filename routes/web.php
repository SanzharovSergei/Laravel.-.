<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RequestFormController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ParserController;
use App\Http\Controllers\NewsController;

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

Route::get('/about', function () {
    return view('about', ['articles' => App\Models\Article::take(3)->latest()->get()]);
});

Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');
Route::post('/articles', [ArticlesController::class, 'store']);
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
Route::put('/articles/{article}', [ArticlesController::class, 'update']);

Route::get('/forms', [FormController::class, 'index'])->name('forms.index');
Route::post('/forms', [FormController::class, 'store']);
Route::get('/forms/create', [FormController::class, 'create']);
Route::get('/forms/{form}', [FormController::class, 'show'])->name('forms.show');

Route::get('/request_form', [RequestFormController::class, 'index'])->name('request_form.index');
Route::post('/request_form', [RequestFormController::class, 'store']);
Route::get('/request_form/create', [RequestFormController::class, 'create']);
Route::get('/request_form/{request_form}', [RequestFormController::class, 'show'])->name('request_form.show');

Route::get('/auth/social', [LoginController::class, 'show'])->name('social.login');
Route::get('/oauth/{driver}', [LoginController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('/oauth/{driver}/callback', [LoginController::class, 'handleProviderCallback'])->name('social.callback');

Route::get('/parser', [ParserController::class, 'index'])->name('parser');
Route::post('/parser/store', [ParserController::class, 'store']);
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{item}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/{item}/edit', [NewsController::class, 'edit']);
Route::put('/news/{item}', [NewsController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
