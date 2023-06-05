<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\TrukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengirimanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route ke dashboard
// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/',[DashboardController::class, 'index'])->name('dashboard');



//Route Input -> Barang
Route::get('/iBarang',function(){
    return view('menu_input_data.iBarang');
});

// ====================================================== ROUTE ==================================================================
//Route Input -> BarangController---------------------------------------------------------------------
Route::get('/barang',[BarangController::class, 'index'])->name('barang');
//route Input Data Barang
Route::get('/iBarang', [BarangController::class, 'iBarang'])->name('iBarang');
//Route Insert Data Barang
Route::post('/instBarang', [BarangController::class, 'instBarang'])->name('instBarang');
//Route Tampilkan Data Barang Untuk edit
Route::get('/editBarang/{id}', [BarangController::class, 'editBarang'])->name('editBarang');
//Route Update Data Barang
Route::post('/updateBarang/{id}', [BarangController::class, 'updateBarang'])->name('updateBarang');
//Route Hapus Data Barang
Route::get('/delBarang/{id}', [BarangController::class, 'delBarang'])->name('delBarang');
//Route LAPORAN Data Barang
Route::get('/rBarang', function(){
    return view('report.rBarang');
});
Route::get('/rBarang', [BarangController::class, 'rBarang'])->name('rBarang');
//Route PDF Data Barang
Route::get('/exportBarang/{id}', [BarangController::class, 'exportBarang'])->name('exportBarang');


//Route Input -> Gudang---------------------------------------------------------------------
Route::get('/Gudang',[GudangController::class, 'index'])->name('Gudang');
//route Input Data Gudang
Route::get('/iGudang', [GudangController::class, 'iGudang'])->name('iGudang');
//Route Insert Data Gudang
Route::post('/instGudang', [GudangController::class, 'instGudang'])->name('instGudang');
//Route Tampilkan Data Gudang Untuk edit
Route::get('/editGudang/{id}', [GudangController::class, 'editGudang'])->name('editGudang');
//Route Update Data Gudang
Route::post('/updateGudang/{id}', [GudangController::class, 'updateGudang'])->name('updateGudang');
//Route Hapus Data Gudang
Route::get('/delGudang/{id}', [GudangController::class, 'delGudang'])->name('delGudang');
//ROute Report Data Gudang
Route::get('/rGudang', [GudangController::class, 'rGudang'])->name('rGudang');
//Route PDF Data Gudang
Route::get('/exportGudang/{id}', [GudangController::class, 'exportGudang'])->name('exportGudang');


//Route Input -> Outlet---------------------------------------------------------------------
Route::get('/Outlet',[OutletController::class, 'index'])->name('Outlet');
//route Input Data Outlet
Route::get('/iOutlet', [OutletController::class, 'iOutlet'])->name('iOutlet');
//Route Insert Data Outlet
Route::post('/instOutlet', [OutletController::class, 'instOutlet'])->name('instOutlet');
//Route Tampilkan Data Outlet Untuk edit
Route::get('/editOutlet/{id}', [OutletController::class, 'editOutlet'])->name('editOutlet');
//Route Update Data Outlet
Route::post('/updateOutlet/{id}', [OutletController::class, 'updateOutlet'])->name('updateOutlet');
//Route Hapus Data Outlet
Route::get('/delOutlet/{id}', [OutletController::class, 'delOutlet'])->name('delOutlet');


//Route Input -> Pegawai---------------------------------------------------------------------
Route::get('/Pegawai',[PegawaiController::class, 'index'])->name('Pegawai');
//route Input Data Pegawai
Route::get('/iPegawai', [PegawaiController::class, 'iPegawai'])->name('iPegawai');
//Route Insert Data Pegawai
Route::post('/instPegawai', [PegawaiController::class, 'instPegawai'])->name('instPegawai');
//Route Tampilkan Data Pegawai Untuk edit
Route::get('/editPegawai/{id}', [PegawaiController::class, 'editPegawai'])->name('editPegawai');
//Route Update Data Pegawai
Route::post('/updatePegawai/{id}', [PegawaiController::class, 'updatePegawai'])->name('updatePegawai');
//Route Hapus Data Pegawai
Route::get('/delPegawai/{id}', [PegawaiController::class, 'delPegawai'])->name('delPegawai');
//ROute Report Data Pegawai
Route::get('/rPegawai', [PegawaiController::class, 'rPegawai'])->name('rPegawai');
//Route PDF Data Pegawai
Route::get('/exportPegawai/{id}', [PegawaiController::class, 'exportPegawai'])->name('exportPegawai');


//Route Input -> Karyawan---------------------------------------------------------------------
Route::get('/Karyawan',[KaryawanController::class, 'index'])->name('Karyawan');
//route Input Data Karyawan
Route::get('/iKaryawan', [KaryawanController::class, 'iKaryawan'])->name('iKaryawan');
//Route Insert Data Karyawan
Route::post('/instKaryawan', [KaryawanController::class, 'instKaryawan'])->name('instKaryawan');
//Route Tampilkan Data Karyawan Untuk edit
Route::get('/editKaryawan/{id}', [KaryawanController::class, 'editKaryawan'])->name('editKaryawan');
//Route Update Data Karyawan
Route::post('/updateKaryawan/{id}', [KaryawanController::class, 'updateKaryawan'])->name('updateKaryawan');
//Route Hapus Data Karyawan
Route::get('/delKaryawan/{id}', [KaryawanController::class, 'delKaryawan'])->name('delKaryawan');
//Route Data Pegawai

//Route Input -> Rute---------------------------------------------------------------------
Route::get('/Rute',[RuteController::class, 'index'])->name('Rute');
//route Input Data Rute
Route::get('/iRute', [RuteController::class, 'iRute'])->name('iRute');
//Route Insert Data Rute
Route::post('/instRute', [RuteController::class, 'instRute'])->name('instRute');
//Route Tampilkan Data Rute Untuk edit
Route::get('/editRute/{id}', [RuteController::class, 'editRute'])->name('editRute');
//Route Update Data Rute
Route::post('/updateRute/{id}', [RuteController::class, 'updateRute'])->name('updateRute');
//Route Hapus Data Rute
Route::get('/delRute/{id}', [RuteController::class, 'delRute'])->name('delRute');
//Route Data Rute
Route::get('/rRute', function () {
    return view('menu_input_data.Rute');
});

//Route Input -> Supir---------------------------------------------------------------------
Route::get('/Supir',[SupirController::class, 'index'])->name('Supir');
//route Input Data Supir
Route::get('/iSupir', [SupirController::class, 'iSupir'])->name('iSupir');
//Route Insert Data Supir
Route::post('/instSupir', [SupirController::class, 'instSupir'])->name('instSupir');
//Route Tampilkan Data Supir Untuk edit
Route::get('/editSupir/{id}', [SupirController::class, 'editSupir'])->name('editSupir');
//Route Update Data Supir
Route::post('/updateSupir/{id}', [SupirController::class, 'updateSupir'])->name('updateSupir');
//Route Hapus Data Supir
Route::get('/delSupir/{id}', [SupirController::class, 'delSupir'])->name('delSupir');
//Route Data Supir
Route::get('/rSupir', function () {
    return view('menu_input_data.Supir');
});

//Route Input -> Truk---------------------------------------------------------------------
Route::get('/Truk',[TrukController::class, 'index'])->name('Truk');
//route Input Data Truk
Route::get('/iTruk', [TrukController::class, 'iTruk'])->name('iTruk');
//Route Insert Data Truk
Route::post('/instTruk', [TrukController::class, 'instTruk'])->name('instTruk');
//Route Tampilkan Data Truk Untuk edit
Route::get('/editTruk/{id}', [TrukController::class, 'editTruk'])->name('editTruk');
//Route Update Data Truk
Route::post('/updateTruk/{id}', [TrukController::class, 'updateTruk'])->name('updateTruk');
//Route Hapus Data Truk
Route::get('/delTruk/{id}', [TrukController::class, 'delTruk'])->name('delTruk');

Route::get('/rTruk', [TrukController::class, 'rTruk'])->name('rTruk');
//Route PDF Data Jadwal
Route::get('/exportTruk/{id}', [TrukController::class, 'exportTruk'])->name('exportTruk');

//Route Input -> User---------------------------------------------------------------------
Route::get('/User',[UserController::class, 'index'])->name('User');
//route Input Data User
Route::get('/iUser', [UserController::class, 'iUser'])->name('iUser');
//Route Insert Data User
Route::post('/instUser', [UserController::class, 'instUser'])->name('instUser');
//Route Tampilkan Data User Untuk edit
Route::get('/editUser/{id}', [UserController::class, 'editUser'])->name('editUser');
//Route Update Data Gudang
Route::post('/updateUser/{id}', [UserController::class, 'updateUser'])->name('updateUser');
//Route Hapus Data User
Route::get('/delUser/{id}', [UserController::class, 'delUser'])->name('delUser');
//Route Data User
Route::get('/rUser', function () {
    return view('menu_input_data.User');
});

//Route Input -> Jadwal---------------------------------------------------------------------
Route::get('/Jadwal',[JadwalController::class, 'index'])->name('Jadwal');
//route Input Data User
Route::get('/iJadwal', [JadwalController::class, 'iJadwal'])->name('iJadwal');
//Route Insert Data User
Route::post('/instJadwal', [JadwalController::class, 'instJadwal'])->name('instJadwal');
//Route Tampilkan Data User Untuk edit
Route::get('/editJadwal/{id}', [JadwalController::class, 'editJadwal'])->name('editJadwal');
//Route Update Data Gudang
Route::post('/updateJadwal/{id}', [JadwalController::class, 'updateJadwal'])->name('updateJadwal');
//Route Hapus Data User
Route::get('/delJadwal/{id}', [JadwalController::class, 'delJadwal'])->name('delJadwal');

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/rJadwalPengiriman', [JadwalController::class, 'rJadwalPengiriman'])->name('rJadwalPengiriman');
//Route PDF Data Jadwal
Route::get('/exportJadwal/{id}', [JadwalController::class, 'exportJadwal'])->name('exportJadwal');
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//Route Input -> Pengiriman---------------------------------------------------------------------
Route::get('/Pengiriman',[PengirimanController::class, 'index'])->name('Pengiriman');
//route Input Data Pengiriman
Route::get('/iPengiriman', [PengirimanController::class, 'iPengiriman'])->name('iPengiriman');
//Route Insert Data Pengiriman
Route::post('/instPengiriman', [PengirimanController::class, 'instPengiriman'])->name('instPengiriman');
//Route Tampilkan Data Pengiriman Untuk edit
Route::get('/editPengiriman/{id}', [PengirimanController::class, 'editPengiriman'])->name('editPengiriman');
//Route Update Data Pengiriman
Route::post('/updatePengiriman/{id}', [PengirimanController::class, 'updatePengiriman'])->name('updatePengiriman');
//Route Hapus Data Pengiriman
Route::get('/delPengiriman/{id}', [PengirimanController::class, 'delPengiriman'])->name('delPengiriman');
//ROute Report Data Pengiriman
Route::get('/rPengiriman', [PengirimanController::class, 'rPengiriman'])->name('rPengiriman');
//Route PDF Data Pengiriman
Route::get('/exportPengiriman/{id}', [PengirimanController::class, 'exportPengiriman'])->name('exportPengiriman');


// ====================================================== REPORT ==================================================================