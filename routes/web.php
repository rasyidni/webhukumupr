<?php

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GranddesignController;
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

// Route::get('/dashboard', function () {
//     return view('welcome');
// });

//Admin
//berita
Route::get('/berita', [NewsController::class, 'index']) -> name('berita');

Route::get('/tambahberita', [NewsController::class, 'createnews']) -> name('tambahberita');

Route::post('/insertberita', [NewsController::class, 'insertnews']) -> name('insertberita');

Route::get('/tampilkanberita/{id}', [NewsController::class, 'tampilkannews']) -> name('tampilkanberita');

Route::post('/editberita/{id}', [NewsController::class, 'editnews']) -> name('editberita');

Route::get('/deleteberita/{id}', [NewsController::class, 'deletenews']) -> name('deleteberita');
//berita

//donasi
Route::get('/donasi', [DonasiController::class, 'index']) -> name('donasi');

Route::get('/tambahdonasi', [DonasiController::class, 'createdonasi']) -> name('tambahdonasi');

Route::post('/insertdonasi', [DonasiController::class, 'insertdonasi']) -> name('insertdonasi');

Route::get('/tampilkandonasi/{id}', [DonasiController::class, 'tampilkandonasi']) -> name('tampilkandonasi');

Route::post('/editdonasi/{id}', [DonasiController::class, 'editdonasi']) -> name('editdonasi');

Route::get('/deletedonasi/{id}', [DonasiController::class, 'deletedonasi']) -> name('deletedonasi');
//donasi

//grand design
Route::get('/gdesign', [GranddesignController::class, 'index']) -> name('gdesign');

Route::get('/tambahgdesign', [GranddesignController::class, 'creategdesign']) -> name('tambahgdesign');

Route::post('/insertgdesign', [GranddesignController::class, 'insertgdesign']) -> name('insertgdesign');

Route::get('/tampilkangdesign/{id}', [GranddesignController::class, 'tampilkangdesign']) -> name('tampilkangdesign');

Route::post('/editgdesign/{id}', [GranddesignController::class, 'editgdesign']) -> name('editgdesign');

Route::get('/deletegdesign/{id}', [GranddesignController::class, 'deletegdesign']) -> name('deletegdesign');
//grand design




