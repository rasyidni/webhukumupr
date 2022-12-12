<?php

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GranddesignController;
use App\Http\Controllers\KajianController;
use App\Http\Controllers\RegulasiController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\WebinarController;
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

//kajian
Route::get('/kajian', [KajianController::class, 'index']) -> name('kajian');

Route::get('/tambahkajian', [KajianController::class, 'createkajian']) -> name('tambahkajian');

Route::post('/insertkajian', [KajianController::class, 'insertkajian']) -> name('insertkajian');

Route::get('/tampilkankajian/{id}', [KajianController::class, 'tampilkankajian']) -> name('tampilkankajian');

Route::post('/editkajian/{id}', [KajianController::class, 'editkajian']) -> name('editkajian');

Route::get('/deletekajian/{id}', [KajianController::class, 'deletekajian']) -> name('deletekajian');
//kajian

//Regulasi
Route::get('/regulasi', [RegulasiController::class, 'index']) -> name('regulasi');

Route::get('/tambahregulasi', [RegulasiController::class, 'createregulasi']) -> name('tambahregulasi');

Route::post('/insertregulasi', [RegulasiController::class, 'insertregulasi']) -> name('insertregulasi');

Route::get('/tampilkanregulasi/{id}', [RegulasiController::class, 'tampilkanregulasi']) -> name('tampilkanregulasi');

Route::post('/editregulasi/{id}', [RegulasiController::class, 'editregulasi']) -> name('editregulasi');

Route::get('/deleteregulasi/{id}', [RegulasiController::class, 'deleteregulasi']) -> name('deleteregulasi');
//Regulasi

//ukm
Route::get('/ukm', [UkmController::class, 'index']) -> name('ukm');

Route::get('/tambahukm', [UkmController::class, 'createukm']) -> name('tambahukm');

Route::post('/insertukm', [UkmController::class, 'insertukm']) -> name('insertukm');

Route::get('/tampilkanukm/{id}', [UkmController::class, 'tampilkanukm']) -> name('tampilkanukm');

Route::post('/editukm/{id}', [UkmController::class, 'editukm']) -> name('editukm');

Route::get('/deleteukm/{id}', [UkmController::class, 'deleteukm']) -> name('deleteukm');
//ukm

//webinar
Route::get('/webinar', [WebinarController::class, 'index']) -> name('webinar');

Route::get('/tambahwebinar', [WebinarController::class, 'createwebinar']) -> name('tambahwebinar');

Route::post('/insertwebinar', [WebinarController::class, 'insertwebinar']) -> name('insertwebinar');

Route::get('/tampilkanwebinar/{id}', [WebinarController::class, 'tampilkanwebinar']) -> name('tampilkanwebinar');

Route::post('/editwebinar/{id}', [WebinarController::class, 'editwebinar']) -> name('editwebinar');

Route::get('/deletewebinar/{id}', [WebinarController::class, 'deletewebinar']) -> name('deletewebinar');
//webinar


