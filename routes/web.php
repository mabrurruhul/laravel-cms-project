<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\NewsController;
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

Route::get('/',[FrontController::class,'home']);
Route::get('/home', function () {
    return view('layout');
});
Route::get('/single1', function () {
    return view('newsview');
})->name('s');
Route::get('adminh',[BackendController::class,'body']);
Route::get('cimec',[NewsController::class,'every']);
Route::resource('news',NewsController::class)->names('mbr');
Route::get('/sports',[AboutController::class,('about')])->name('sports');
Route::get('/fashion',[AboutController::class,('fashion')])->name('fashion');
Route::get('/politics',[AboutController::class,('politics')])->name('politics');
Route::get('/lifestyle',[AboutController::class,('lifestyle')])->name('lifestyle');





