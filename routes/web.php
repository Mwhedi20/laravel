<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('posts', [TestController::class, 'index']) -> name ('p');
Route::get('posts/create', [TestController::class, 'create']) ->name('cr');
Route::post('posts/Updatee/{id}', [TestController::class, 'up']) -> name('uu');
Route::post('posts/insert', [TestController::class, 'insert']);
Route::get('posts/delete/{id}', [TestController::class, 'delete']) ->name('del');
Route::get('posts/update/{id}', [TestController::class, 'update']) ->name('upd');
