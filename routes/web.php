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
use App\Http\Controllers\LoginController;
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

//pengunjung
Route::get('/', [PengunjungController::class, 'index']) -> name('pengunjung');

Route::get('/tampilanberita', [PengunjungController::class, 'berita']) -> name('tampilanberita');

Route::get('/tampilandonasi', [PengunjungController::class, 'donasi']) -> name('tampilandonasi');

Route::get('/tampilandetaildonasi/{id}', [PengunjungController::class, 'detaildonasi']) -> name('tampilandetaildonasi');

Route::get('/tampilanwebinar', [PengunjungController::class, 'webinar']) -> name('tampilanwebinar');

Route::get('/tampilandetailwebinar/{id}', [PengunjungController::class, 'detailwebinar']) -> name('tampilandetailwebinar');

Route::get('/tampilangranddesign', [PengunjungController::class, 'granddesign']) -> name('tampilangranddesign');

Route::get('/tampilankajian', [PengunjungController::class, 'kajian']) -> name('tampilankajian');

Route::get('/tampilanregulasi', [PengunjungController::class, 'regulasi']) -> name('tampilanregulasi');

Route::get('/tampilantentangkami', [PengunjungController::class, 'tentangkami']) -> name('tampilantentangkami');

Route::get('/tampilandetailukm/{id}', [PengunjungController::class, 'detailukm']) -> name('tampilandetailukm');

Route::get('/tampilanukm', [PengunjungController::class, 'ukm']) -> name('tampilanukm');

Route::get('/tampilanka', [PengunjungController::class, 'ka']) -> name('tampilanka');

Route::get('/tampilankdn', [PengunjungController::class, 'kdn']) -> name('tampilankdn');

Route::get('/tampilankk', [PengunjungController::class, 'kk']) -> name('tampilankk');

Route::get('/tampilankkmi', [PengunjungController::class, 'kkmi']) -> name('tampilankkmi');

Route::get('/tampilankkph', [PengunjungController::class, 'kkph']) -> name('tampilankkph');

Route::get('/tampilankksa', [PengunjungController::class, 'kksa']) -> name('tampilankksa');

Route::get('/tampilankkslh', [PengunjungController::class, 'kkslh']) -> name('tampilankkslh');

Route::get('/tampilankln', [PengunjungController::class, 'kln']) -> name('tampilankln');

Route::get('/tampilankpo', [PengunjungController::class, 'kpo']) -> name('tampilankpo');

Route::get('/tampilankpp', [PengunjungController::class, 'kpp']) -> name('tampilankpp');

Route::get('/tampilankpsdm', [PengunjungController::class, 'kpsdm']) -> name('tampilankpsdm');

Route::get('/tampilanks', [PengunjungController::class, 'ks']) -> name('tampilanks');

Route::get('/tampilanupi', [PengunjungController::class, 'upi']) -> name('tampilanupi');
//pengunjung

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index']) -> name('dashboard') -> middleware('auth');
//dashboard

//Admin
//berita
Route::get('/berita', [NewsController::class, 'index']) -> name('berita') -> middleware('auth');

Route::get('/tambahberita', [NewsController::class, 'createnews']) -> name('tambahberita') -> middleware('auth');

Route::post('/insertberita', [NewsController::class, 'insertnews']) -> name('insertberita') -> middleware('auth');

Route::get('/tampilkanberita/{id}', [NewsController::class, 'tampilkannews']) -> name('tampilkanberita') -> middleware('auth');

Route::post('/editberita/{id}', [NewsController::class, 'editnews']) -> name('editberita') -> middleware('auth');

Route::get('/deleteberita/{id}', [NewsController::class, 'deletenews']) -> name('deleteberita') -> middleware('auth');
//berita

//donasi
Route::get('/donasi', [DonasiController::class, 'index']) -> name('donasi') -> middleware('auth');

Route::get('/tambahdonasi', [DonasiController::class, 'createdonasi']) -> name('tambahdonasi') -> middleware('auth');

Route::post('/insertdonasi', [DonasiController::class, 'insertdonasi']) -> name('insertdonasi') -> middleware('auth');

Route::get('/tampilkandonasi/{id}', [DonasiController::class, 'tampilkandonasi']) -> name('tampilkandonasi')-> middleware('auth');

Route::post('/editdonasi/{id}', [DonasiController::class, 'editdonasi']) -> name('editdonasi') -> middleware('auth');

Route::get('/deletedonasi/{id}', [DonasiController::class, 'deletedonasi']) -> name('deletedonasi') -> middleware('auth');
//donasi

//grand design
Route::get('/gdesign', [GranddesignController::class, 'index']) -> name('gdesign') -> middleware('auth');

Route::get('/tambahgdesign', [GranddesignController::class, 'creategdesign']) -> name('tambahgdesign') -> middleware('auth');

Route::post('/insertgdesign', [GranddesignController::class, 'insertgdesign']) -> name('insertgdesign') -> middleware('auth');

Route::get('/tampilkangdesign/{id}', [GranddesignController::class, 'tampilkangdesign']) -> name('tampilkangdesign') -> middleware('auth');

Route::post('/editgdesign/{id}', [GranddesignController::class, 'editgdesign']) -> name('editgdesign') -> middleware('auth');

Route::get('/deletegdesign/{id}', [GranddesignController::class, 'deletegdesign']) -> name('deletegdesign')-> middleware('auth');
//grand design

//kajian
Route::get('/kajian', [KajianController::class, 'index']) -> name('kajian')-> middleware('auth');

Route::get('/tambahkajian', [KajianController::class, 'createkajian']) -> name('tambahkajian')-> middleware('auth');

Route::post('/insertkajian', [KajianController::class, 'insertkajian']) -> name('insertkajian')-> middleware('auth');

Route::get('/tampilkankajian/{id}', [KajianController::class, 'tampilkankajian']) -> name('tampilkankajian')-> middleware('auth');

Route::post('/editkajian/{id}', [KajianController::class, 'editkajian']) -> name('editkajian')-> middleware('auth');

Route::get('/deletekajian/{id}', [KajianController::class, 'deletekajian']) -> name('deletekajian')-> middleware('auth');
//kajian

//Regulasi
Route::get('/regulasi', [RegulasiController::class, 'index']) -> name('regulasi')-> middleware('auth');

Route::get('/tambahregulasi', [RegulasiController::class, 'createregulasi']) -> name('tambahregulasi')-> middleware('auth');

Route::post('/insertregulasi', [RegulasiController::class, 'insertregulasi']) -> name('insertregulasi')-> middleware('auth');

Route::get('/tampilkanregulasi/{id}', [RegulasiController::class, 'tampilkanregulasi']) -> name('tampilkanregulasi')-> middleware('auth');

Route::post('/editregulasi/{id}', [RegulasiController::class, 'editregulasi']) -> name('editregulasi')-> middleware('auth');

Route::get('/deleteregulasi/{id}', [RegulasiController::class, 'deleteregulasi']) -> name('deleteregulasi')-> middleware('auth');
//Regulasi

//ukm
Route::get('/ukm', [UkmController::class, 'index']) -> name('ukm')-> middleware('auth');

Route::get('/tambahukm', [UkmController::class, 'createukm']) -> name('tambahukm')-> middleware('auth');

Route::post('/insertukm', [UkmController::class, 'insertukm']) -> name('insertukm')-> middleware('auth');

Route::get('/tampilkanukm/{id}', [UkmController::class, 'tampilkanukm']) -> name('tampilkanukm')-> middleware('auth');

Route::post('/editukm/{id}', [UkmController::class, 'editukm']) -> name('editukm')-> middleware('auth');

Route::get('/deleteukm/{id}', [UkmController::class, 'deleteukm']) -> name('deleteukm')-> middleware('auth');
//ukm

//webinar
Route::get('/webinar', [WebinarController::class, 'index']) -> name('webinar')-> middleware('auth');

Route::get('/tambahwebinar', [WebinarController::class, 'createwebinar']) -> name('tambahwebinar')-> middleware('auth');

Route::post('/insertwebinar', [WebinarController::class, 'insertwebinar']) -> name('insertwebinar')-> middleware('auth');

Route::get('/tampilkanwebinar/{id}', [WebinarController::class, 'tampilkanwebinar']) -> name('tampilkanwebinar')-> middleware('auth');

Route::post('/editwebinar/{id}', [WebinarController::class, 'editwebinar']) -> name('editwebinar')-> middleware('auth');

Route::get('/deletewebinar/{id}', [WebinarController::class, 'deletewebinar']) -> name('deletewebinar')-> middleware('auth');
//webinar

//tentang kami
Route::get('/tentangkami', [TentangkamiController::class, 'index']) -> name('tentangkami')-> middleware('auth');

Route::get('/tampilkantentangkami/1', [TentangkamiController::class, 'tampilkantentangkami']) -> name('tampilkantentangkami')-> middleware('auth');

Route::post('/edittentangkami/1', [TentangkamiController::class, 'edittentangkami']) -> name('edittentangkami')-> middleware('auth');
//tentang kami

//kementerian agama
Route::get('/kagama', [KagamaController::class, 'index']) -> name('kagama')-> middleware('auth');

Route::get('/tampilkankagama', [KagamaController::class, 'tampilkankagama']) -> name('tampilkankagama')-> middleware('auth');

Route::post('/editkagama', [KagamaController::class, 'editkagama']) -> name('editkagama')-> middleware('auth');
//kementerian agama

//kementerian dalam negeri
Route::get('/kdalamnegeri', [KdalamnegeriController::class, 'index']) -> name('kdalamnegeri')-> middleware('auth');

Route::get('/tampilkankdalamnegeri/1', [KdalamnegeriController::class, 'tampilkankdalamnegeri']) -> name('tampilkankdalamnegeri')-> middleware('auth');

Route::post('/editkdalamnegeri/1', [KdalamnegeriController::class, 'editkdalamnegeri']) -> name('editkdalamnegeri')-> middleware('auth');
//kementerian dalam negeri

//kementerian kajian
Route::get('/kkajian', [KkajianController::class, 'index']) -> name('kkajian')-> middleware('auth');

Route::get('/tampilkankkajian/1', [KkajianController::class, 'tampilkankkajian']) -> name('tampilkankkajian')-> middleware('auth');

Route::post('/editkkajian/1', [KkajianController::class, 'editkkajian']) -> name('editkkajian')-> middleware('auth');
//kementerian kajian

//kementerian komunikasi
Route::get('/kkomunikasi', [KkomunikasiController::class, 'index']) -> name('kkomunikasi')-> middleware('auth');

Route::get('/tampilkankkomunikasi/1', [KkomunikasiController::class, 'tampilkankkomunikasi']) -> name('tampilkankkomunikasi')-> middleware('auth');

Route::post('/editkkomunikasi/1', [KkomunikasiController::class, 'editkkomunikasi']) -> name('editkkomunikasi')-> middleware('auth');
//kementerian komunikasi

//kementerian kpolitik
Route::get('/kkpolitik', [KkpolitikController::class, 'index']) -> name('kkpolitik')-> middleware('auth');

Route::get('/tampilkankkpolitik/1', [KkpolitikController::class, 'tampilkankkpolitik']) -> name('tampilkankkpolitik')-> middleware('auth');

Route::post('/editkkpolitik/1', [KkpolitikController::class, 'editkkpolitik']) -> name('editkkpolitik')-> middleware('auth');
//kementerian kpolitik

//kementerian ksosial
Route::get('/kksosial', [KksosialController::class, 'index']) -> name('kksosial')-> middleware('auth');

Route::get('/tampilkankksosial/1', [KksosialController::class, 'tampilkankksosial']) -> name('tampilkankksosial')-> middleware('auth');

Route::post('/editkksosial/1', [KksosialController::class, 'editkksosial']) -> name('editkksosial')-> middleware('auth');
//kementerian ksosial

//kementerian kluarnegeri
Route::get('/kluarnegeri', [KluarnegeriController::class, 'index']) -> name('kluarnegeri')-> middleware('auth');

Route::get('/tampilkankluarnegeri/1', [KluarnegeriController::class, 'tampilkankluarnegeri']) -> name('tampilkankluarnegeri')-> middleware('auth');

Route::post('/editkluarnegeri/1', [KluarnegeriController::class, 'editkluarnegeri']) -> name('editkluarnegeri')-> middleware('auth');
//kementerian kluarnegeri

//kementerian kpemuda
Route::get('/kpemuda', [KpemudaController::class, 'index']) -> name('kpemuda')-> middleware('auth');

Route::get('/tampilkankpemuda/1', [KpemudaController::class, 'tampilkankpemuda']) -> name('tampilkankpemuda')-> middleware('auth');

Route::post('/editkpemuda/1', [KpemudaController::class, 'editkpemuda']) -> name('editkpemuda')-> middleware('auth');
//kementerian kpemuda

//kementerian kperempuan
Route::get('/kperempuan', [KperempuanController::class, 'index']) -> name('kperempuan')-> middleware('auth');

Route::get('/tampilkankperempuan/1', [KperempuanController::class, 'tampilkankperempuan']) -> name('tampilkankperempuan')-> middleware('auth');

Route::post('/editkperempuan/1', [KperempuanController::class, 'editkperempuan']) -> name('editkperempuan')-> middleware('auth');
//kementerian kperempuan

//kementerian ksdm
Route::get('/ksdm', [KsdmController::class, 'index']) -> name('ksdm')-> middleware('auth');

Route::get('/tampilkanksdm/1', [KsdmController::class, 'tampilkanksdm']) -> name('tampilkanksdm')-> middleware('auth');

Route::post('/editksdm/1', [KsdmController::class, 'editksdm']) -> name('editksdm')-> middleware('auth');
//kementerian ksdm

//kementerian ksekretariat
Route::get('/ksekretariat', [KsekretariatController::class, 'index']) -> name('ksekretariat')-> middleware('auth');

Route::get('/tampilkanksekretariat/1', [KsekretariatController::class, 'tampilkanksekretariat']) -> name('tampilkanksekretariat')-> middleware('auth');

Route::post('/editksekretariat/1', [KsekretariatController::class, 'editksekretariat']) -> name('editksekretariat')-> middleware('auth');
//kementerian ksekretariat

//kementerian kwirausaha
Route::get('/kwirausaha', [KwirausahaController::class, 'index']) -> name('kwirausaha')-> middleware('auth');

Route::get('/tampilkankwirausaha/1', [KwirausahaController::class, 'tampilkankwirausaha']) -> name('tampilkankwirausaha')-> middleware('auth');

Route::post('/editkwirausaha/1', [KwirausahaController::class, 'editkwirausaha']) -> name('editkwirausaha')-> middleware('auth');
//kementerian kwirausaha

//kementerian unitpenerangan
Route::get('/unitpenerangan', [UnitpeneranganController::class, 'index']) -> name('unitpenerangan')-> middleware('auth');

Route::get('/tampilkanunitpenerangan/1', [UnitpeneranganController::class, 'tampilkanunitpenerangan']) -> name('tampilkanunitpenerangan')-> middleware('auth');

Route::post('/editunitpenerangan/1', [UnitpeneranganController::class, 'editunitpenerangan']) -> name('editunitpenerangan')-> middleware('auth');
//kementerian unitpenerangan

//login
Route::get('/login', [LoginController::class, 'login']) -> name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses']) -> name('loginproses');
// Route::get('/register', [LoginController::class, 'register']) -> name('register');
Route::get('/logout', [LoginController::class, 'logout']) -> name('logout')-> middleware('auth');
//login