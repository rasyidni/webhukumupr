<?php

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

Route::get('/', function () {
    return view('welcome');
});

//berita
Route::get('/berita', [NewsController::class, 'index']) -> name('berita');

Route::get('/tambahberita', [NewsController::class, 'createnews']) -> name('tambahberita');

Route::post('/insertberita', [NewsController::class, 'insertnews']) -> name('insertberita');

Route::get('/tampilkanberita/{id}', [NewsController::class, 'tampilkannews']) -> name('tampilkanberita');

Route::post('/editberita/{id}', [NewsController::class, 'editnews']) -> name('editberita');

Route::get('/deleteberita/{id}', [NewsController::class, 'deletenews']) -> name('deleteberita');
//berita





