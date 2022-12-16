<?php

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GranddesignController;
use App\Http\Controllers\KajianController;
use App\Http\Controllers\RegulasiController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\KagamaController;
use App\Http\Controllers\KdalamnegeriController;
use App\Http\Controllers\KkajianController;
use App\Http\Controllers\KkomunikasiController;
use App\Http\Controllers\KkpolitikController;
use App\Http\Controllers\KksosialController;
use App\Http\Controllers\KluarnegeriController;
use App\Http\Controllers\KpemudaController;
use App\Http\Controllers\KperempuanController;
use App\Http\Controllers\KsdmController;
use App\Http\Controllers\KsekretariatController;
use App\Http\Controllers\KwirausahaController;
use App\Http\Controllers\UnitPeneranganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengunjungController;
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

Route::get('/', [PengunjungController::class, 'index']) -> name('pengunjung');
Route::get('/pengunjung', [PengunjungController::class, 'index2']) -> name('pengunjung2');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index']) -> name('dashboard');
//dashboard

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

//tentang kami
Route::get('/tentangkami', [TentangkamiController::class, 'index']) -> name('tentangkami');

Route::get('/tampilkantentangkami/1', [TentangkamiController::class, 'tampilkantentangkami']) -> name('tampilkantentangkami');

Route::post('/edittentangkami/1', [TentangkamiController::class, 'edittentangkami']) -> name('edittentangkami');
//tentang kami

//kementerian agama
Route::get('/kagama', [KagamaController::class, 'index']) -> name('kagama');

Route::get('/tampilkankagama/1', [KagamaController::class, 'tampilkankagama']) -> name('tampilkankagama');

Route::post('/editkagama/1', [KagamaController::class, 'editkagama']) -> name('editkagama');
//kementerian agama

//kementerian dalam negeri
Route::get('/kdalamnegeri', [KdalamnegeriController::class, 'index']) -> name('kdalamnegeri');

Route::get('/tampilkankdalamnegeri/1', [KdalamnegeriController::class, 'tampilkankdalamnegeri']) -> name('tampilkankdalamnegeri');

Route::post('/editkdalamnegeri/1', [KdalamnegeriController::class, 'editkdalamnegeri']) -> name('editkdalamnegeri');
//kementerian dalam negeri

//kementerian kajian
Route::get('/kkajian', [KkajianController::class, 'index']) -> name('kkajian');

Route::get('/tampilkankkajian/1', [KkajianController::class, 'tampilkankkajian']) -> name('tampilkankkajian');

Route::post('/editkkajian/1', [KkajianController::class, 'editkkajian']) -> name('editkkajian');
//kementerian kajian

//kementerian komunikasi
Route::get('/kkomunikasi', [KkomunikasiController::class, 'index']) -> name('kkomunikasi');

Route::get('/tampilkankkomunikasi/1', [KkomunikasiController::class, 'tampilkankkomunikasi']) -> name('tampilkankkomunikasi');

Route::post('/editkkomunikasi/1', [KkomunikasiController::class, 'editkkomunikasi']) -> name('editkkomunikasi');
//kementerian komunikasi

//kementerian kpolitik
Route::get('/kkpolitik', [KkpolitikController::class, 'index']) -> name('kkpolitik');

Route::get('/tampilkankkpolitik/1', [KkpolitikController::class, 'tampilkankkpolitik']) -> name('tampilkankkpolitik');

Route::post('/editkkpolitik/1', [KkpolitikController::class, 'editkkpolitik']) -> name('editkkpolitik');
//kementerian kpolitik

//kementerian ksosial
Route::get('/kksosial', [KksosialController::class, 'index']) -> name('kksosial');

Route::get('/tampilkankksosial/1', [KksosialController::class, 'tampilkankksosial']) -> name('tampilkankksosial');

Route::post('/editkksosial/1', [KksosialController::class, 'editkksosial']) -> name('editkksosial');
//kementerian ksosial

//kementerian kluarnegeri
Route::get('/kluarnegeri', [KluarnegeriController::class, 'index']) -> name('kluarnegeri');

Route::get('/tampilkankluarnegeri/1', [KluarnegeriController::class, 'tampilkankluarnegeri']) -> name('tampilkankluarnegeri');

Route::post('/editkluarnegeri/1', [KluarnegeriController::class, 'editkluarnegeri']) -> name('editkluarnegeri');
//kementerian kluarnegeri

//kementerian kpemuda
Route::get('/kpemuda', [KpemudaController::class, 'index']) -> name('kpemuda');

Route::get('/tampilkankpemuda/1', [KpemudaController::class, 'tampilkankpemuda']) -> name('tampilkankpemuda');

Route::post('/editkpemuda/1', [KpemudaController::class, 'editkpemuda']) -> name('editkpemuda');
//kementerian kpemuda

//kementerian kperempuan
Route::get('/kperempuan', [KperempuanController::class, 'index']) -> name('kperempuan');

Route::get('/tampilkankperempuan/1', [KperempuanController::class, 'tampilkankperempuan']) -> name('tampilkankperempuan');

Route::post('/editkperempuan/1', [KperempuanController::class, 'editkperempuan']) -> name('editkperempuan');
//kementerian kperempuan

//kementerian ksdm
Route::get('/ksdm', [KsdmController::class, 'index']) -> name('ksdm');

Route::get('/tampilkanksdm/1', [KsdmController::class, 'tampilkanksdm']) -> name('tampilkanksdm');

Route::post('/editksdm/1', [KsdmController::class, 'editksdm']) -> name('editksdm');
//kementerian ksdm

//kementerian ksekretariat
Route::get('/ksekretariat', [KsekretariatController::class, 'index']) -> name('ksekretariat');

Route::get('/tampilkanksekretariat/1', [KsekretariatController::class, 'tampilkanksekretariat']) -> name('tampilkanksekretariat');

Route::post('/editksekretariat/1', [KsekretariatController::class, 'editksekretariat']) -> name('editksekretariat');
//kementerian ksekretariat

//kementerian kwirausaha
Route::get('/kwirausaha', [KwirausahaController::class, 'index']) -> name('kwirausaha');

Route::get('/tampilkankwirausaha/1', [KwirausahaController::class, 'tampilkankwirausaha']) -> name('tampilkankwirausaha');

Route::post('/editkwirausaha/1', [KwirausahaController::class, 'editkwirausaha']) -> name('editkwirausaha');
//kementerian kwirausaha

//kementerian unitpenerangan
Route::get('/unitpenerangan', [UnitpeneranganController::class, 'index']) -> name('unitpenerangan');

Route::get('/tampilkanunitpenerangan/1', [UnitpeneranganController::class, 'tampilkanunitpenerangan']) -> name('tampilkanunitpenerangan');

Route::post('/editunitpenerangan/1', [UnitpeneranganController::class, 'editunitpenerangan']) -> name('editunitpenerangan');
//kementerian unitpenerangan