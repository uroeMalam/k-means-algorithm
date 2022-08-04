<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DataCenterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\PerhitunganController;
use Illuminate\Support\Facades\Artisan;


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
// Create Storage Link For CPanel
// after upload to Cpanel Remember to RUN This route before you launch the web
Route::get('/foo', function () {
    Artisan::call('storage:link');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    // Artisan::call('migrate:fresh --seed');
    return redirect()->route('kabupaten');
});

// route login
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/authenticate', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // kabupaten
    Route::get('/kabupaten', [KabupatenController::class, 'index'])->name('kabupaten');
    Route::delete('/kabupaten',[KabupatenController::class, 'destroy'])->name('kabupaten_destroy');
    Route::get('/kabupaten/tambah', [KabupatenController::class, 'create'])->name('kabupaten_create');
    Route::post('/kabupaten/simpan',[KabupatenController::class, 'store'])->name('kabupaten-simpan');
    Route::get('/kabupaten/edit/{id}',[KabupatenController::class, 'edit'])->name('kabupaten-edit');
    Route::post('/kabupaten/update',[KabupatenController::class, 'update'])->name('kabupaten-update');
    Route::get('/kabupaten/data-table', [KabupatenController::class, 'DataTable'])->name('kabupaten_dataTable');

    // kecamatan
    Route::get('/kecamatan', [KecamatanController::class, 'index'])->name('kecamatan');
    Route::delete('/kecamatan',[KecamatanController::class, 'destroy'])->name('kecamatan_destroy');
    Route::get('/kecamatan/tambah', [KecamatanController::class, 'create'])->name('kecamatan_create');
    Route::post('/kecamatan/simpan',[KecamatanController::class, 'store'])->name('kecamatan-simpan');
    Route::get('/kecamatan/edit/{id}',[KecamatanController::class, 'edit'])->name('kecamatan-edit');
    Route::post('/kecamatan/update',[KecamatanController::class, 'update'])->name('kecamatan-update');
    Route::post('/kecamatan/data-table', [KecamatanController::class, 'DataTable'])->name('kecamatan_dataTable');

    // data 
    Route::get('/data', [DataController::class, 'index'])->name('data');
    Route::delete('/data',[DataController::class, 'destroy'])->name('data_destroy');
    Route::get('/data/tambah', [DataController::class, 'create'])->name('data_create');
    Route::post('/data/simpan',[DataController::class, 'store'])->name('data-simpan');
    Route::get('/data/edit/{id}',[DataController::class, 'edit'])->name('data-edit');
    Route::post('/data/update',[DataController::class, 'update'])->name('data-update');
    Route::post('/data/data-table', [DataController::class, 'DataTable'])->name('data_dataTable');

    // data center
    Route::get('/dataCenter', [DataCenterController::class, 'index'])->name('dataCenter');
    Route::delete('/dataCenter',[DataCenterController::class, 'destroy'])->name('dataCenter_destroy');
    Route::get('/dataCenter/tambah/{id_kabupaten}/{tahun}', [DataCenterController::class, 'create'])->name('dataCenter_create');
    Route::post('/dataCenter/simpan',[DataCenterController::class, 'store'])->name('dataCenter-simpan');
    Route::get('/dataCenter/edit/{id}',[DataCenterController::class, 'edit'])->name('dataCenter-edit');
    Route::post('/dataCenter/update',[DataCenterController::class, 'update'])->name('dataCenter-update');
    Route::post('/dataCenter/data-table', [DataCenterController::class, 'DataTable'])->name('dataCenter_dataTable');


    // Hasil Perhitungan
    Route::get('/perhitungan', [PerhitunganController::class, 'index'])->name('perhitungan');
    Route::post('/perhitungan/data-table', [PerhitunganController::class, 'DataTable'])->name('perhitungan_dataTable');
    Route::post('/perhitungan/data-table-total', [PerhitunganController::class, 'DataTableTotal'])->name('perhitungan_dataTable_total');


});

Route::get('/perhitungan/rawData/{tahun}/{id_kabupaten}', [PerhitunganController::class, 'rawData'])->name('perhitungan_rawData');

Route::get('/token', function () {
    return csrf_token(); 
});

// dashboard depan
Route::get('/', [UtamaController::class, 'index'])->name('utama');
