<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    //return view('welcome');
    return "<h1>Hello World</h1>";
});
Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/users/{id}', function ($id) {
    return 'This is user: '.$id;
});

//Route::get('/', [PagesController::class,"index"] );
Route::get('/about', [PagesController::class,"about"] );
Route::get('/services', [PagesController::class,"services"] );

Route::resource('/posts',PostsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);
Route::delete('/destroy/{id}', [HomeController::class,"destroy"] );

Route::get('/recreate', [App\Http\Controllers\PagesController::class, 'recreate']);

Route::get('/testimage', [App\Http\Controllers\PagesController::class, 'TestImage']);
Route::post('/upload', [App\Http\Controllers\PagesController::class, 'TestCloud']);