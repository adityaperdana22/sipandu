<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\InformasiController;
use App\Http\Controllers\Admin\KelahiranController;
use App\Http\Controllers\Admin\KematianController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\PendatangController;
use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\Admin\PindahController;

use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//Halaman Frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('detail_informasi/{id}', [HomeController::class, 'detail_informasi'])->name('detail_informasi');

Route::prefix('admin')->group(function () {
    Route::middleware(['not_login'])->group(function () {
        Route::get('/', [AuthController::class, 'index'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('proses_login');
    });
    Route::middleware(['is_login'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/print-surat-domisili/{id}', [DashboardController::class, 'print_surat_domisili'])->name('print.surat.domisili');
        Route::get('/print-surat-pindah/{id}', [DashboardController::class, 'print_surat_pindah'])->name('print.surat.pindah');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        //User
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/user/create/', [UserController::class, 'create'])->name('user.create');
        Route::post('/user/store/', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

        //Category Informasi
        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create/', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store/', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

        //Informasi
        Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
        Route::get('/informasi/create/', [InformasiController::class, 'create'])->name('informasi.create');
        Route::post('/informasi/store/', [InformasiController::class, 'store'])->name('informasi.store');
        Route::get('/informasi/edit/{id}', [InformasiController::class, 'edit'])->name('informasi.edit');
        Route::post('/informasi/update/{id}', [InformasiController::class, 'update'])->name('informasi.update');
        Route::get('/informasi/delete/{id}', [InformasiController::class, 'delete'])->name('informasi.delete');

        //Penduduk
        Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
        Route::get('/penduduk/create/', [PendudukController::class, 'create'])->name('penduduk.create');
        Route::post('/penduduk/store/', [PendudukController::class, 'store'])->name('penduduk.store');
        Route::get('/penduduk/edit/{id}', [PendudukController::class, 'edit'])->name('penduduk.edit');
        Route::post('/penduduk/update/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
        Route::get('/penduduk/detail/{id}', [PendudukController::class, 'detail'])->name('penduduk.detail');
        Route::get('/penduduk/delete/{id}', [PendudukController::class, 'delete'])->name('penduduk.delete');

        Route::get('/kelahiran', [KelahiranController::class, 'index'])->name('kelahiran.index');
        Route::get('/kelahiran/create', [KelahiranController::class, 'create'])->name('kelahiran.create');
        Route::post('/kelahiran/store/', [KelahiranController::class, 'store'])->name('kelahiran.store');

        Route::get('/kematian', [KematianController::class, 'index'])->name('kematian.index');
        Route::get('/kematian/create', [KematianController::class, 'create'])->name('kematian.create');
        Route::post('/kematian/store/', [KematianController::class, 'store'])->name('kematian.store');

        Route::get('/pendatang', [PendatangController::class, 'index'])->name('pendatang.index');
        Route::get('/pendatang/create', [PendatangController::class, 'create'])->name('pendatang.create');
        Route::post('/pendatang/store/', [PendatangController::class, 'store'])->name('pendatang.store');

        Route::get('/pindah', [PindahController::class, 'index'])->name('pindah.index');
        Route::get('/pindah/create', [PindahController::class, 'create'])->name('pindah.create');
        Route::post('/pindah/store/', [PindahController::class, 'store'])->name('pindah.store');

        Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
        Route::post('/laporan/print', [LaporanController::class, 'print'])->name('laporan.print');
    });
});
