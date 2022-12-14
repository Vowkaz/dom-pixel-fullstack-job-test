<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/', function () {
    return 'API Fullstack Job Test - DomPixel running';
});

Route::resource('products',ProductController::class);
