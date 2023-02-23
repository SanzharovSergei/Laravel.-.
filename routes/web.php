<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RequestFormController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
