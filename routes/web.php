<?php

use App\Http\Controllers\AdminKabupaten\ApprovalController;
use App\Http\Controllers\DataAngkaController;
use App\Http\Controllers\DataDalamPetaController;
use App\Http\Controllers\BukuDesaController;
use App\Http\Controllers\InformasiDesaController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileDesaController;
use App\Http\Controllers\Superadmin\KelembagaanDesaController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::get('profile-desa', [ProfileDesaController::class, 'index'])->name('profile.desa');
// Route::get('data-angka', [DataAngkaController::class, 'index'])->name('data.angka');
Route::get('/get-rt-rw/{desa_id}', [KelembagaanDesaController::class, 'getRtRw'])->name('get-rt-rw');
Route::get('/profile-desa/show-desa/{kecamatan_id}', [ProfileDesaController::class, 'showDesa'])->name('profile.show-desa');
Route::get('/detail-desa/{desa_id}', [ProfileDesaController::class, 'detailDesa'])->name('detail.desa');
Route::get('/desa-section/{desaId}/{section}', [ProfileDesaController::class, 'getDesaSection'])->name('desa.section');

// web.php
Route::get('/desa-dalam-peta', [DataDalamPetaController::class, 'index'])->name('peta.dinamik');




// Ex
Route::get('/desa-dalam-angka', [DataAngkaController::class, 'index'])->name('data.index');
Route::post('/data-angka/get-by-category', [DataAngkaController::class, 'getDataByCategory'])->name('data.getByCategory');
Route::post('/data-angka/get-desa-by-kecamatan', [DataAngkaController::class, 'getDesaByKecamatan'])->name('data.getDesaByKecamatan');
Route::post('/data-angka/get-result', [DataAngkaController::class, 'getResult'])->name('data.getResult');
// Debug routes (hapus setelah selesai debugging)
Route::get('/debug-table-structure', [DataAngkaController::class, 'debugTableStructure'])->name('debug.tableStructure');
Route::get('/debug-query', [DataAngkaController::class, 'debugQuery'])->name('debug.query');


// Tambahkan route untuk Buku Desa
Route::get('/desa-dalam-buku', [BukuDesaController::class, 'index'])->name('desa-dalam-buku');
Route::get('/desa-dalam-buku/pdf', [BukuDesaController::class, 'generatePdf'])->name('desa-dalam-buku.pdf');
Route::get('/desa-dalam-buku/download', [BukuDesaController::class, 'downloadPdf'])->name('desa-dalam-buku.download');

//Route Informasi Data
Route::get('/informasi-data', [InformasiDesaController::class, 'index'])->name('data.informasi');

require __DIR__ . '/auth.php';
require __DIR__ . '/superadmin.php';
require __DIR__ . '/admin_desa.php';
require __DIR__ . '/admin_kabupaten.php';
require __DIR__ . '/api.php';


