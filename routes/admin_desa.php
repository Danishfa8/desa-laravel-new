<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDesa\{
    AjukanController,
    KecamatanController,
    DesaController,
    ProfileDesaController,
    PerangkatDesaController,
    RtRwDesaController,
    PendapatanDesaController,
    PengeluaranController,
    KelembagaanDesaController,
    LpmdkController,
    BumdeController,
    PkkDesaController,
    JembatanDesaController,
    JalanDesaController,
    JalanKabupatenDesaController,
    KerawananSosialDesaController,
    KondisiLingkunganKeluargaDesaController,
    TempatTinggalDesaController,
    DisabilitasDesaController,
    BalitaDesaController,
    LansiaDesaController,
    PendidikanDesaController,
    OlahragaDesaController,
    PelakuUmkmDesaController,
    SaranaKesehatanDesaController,
    SaranaPendukungKesehatanDesaController,
    SaranaIbadahDesaController,
    SaranaLainyaDesaController,
    EkonomiController,
    UsahaEkonomiController,
    IndustriPenghasilLimbahDesaController,
    EnergiDesaController,
    SumberDayaAlamDesaController
};

Route::middleware(['auth', 'role:admin_desa'])->prefix('admin_desa')->name('admin_desa.')->group(function () {
    // Profil Wilayah
    Route::resource('kecamatans', KecamatanController::class);
    Route::resource('desas', DesaController::class);

    // Profil Desa (manual routes)
    Route::get('profile-desa', [ProfileDesaController::class, 'index'])->name('profile-desas');
    Route::get('profile-desa/{desa_id}/create', [ProfileDesaController::class, 'create'])->name('profile-desas.create');
    Route::post('profile-desa/store', [ProfileDesaController::class, 'store'])->name('profile-desas.store');
    Route::get('profile-desa/{id}/edit', [ProfileDesaController::class, 'edit'])->name('profile-desas.edit');
    Route::put('profile-desa/{id}', [ProfileDesaController::class, 'update'])->name('profile-desas.update');
    Route::delete('profile-desa/{id}', [ProfileDesaController::class, 'destroy'])->name('profile-desas.destroy');

    Route::resource('perangkat-desa', PerangkatDesaController::class);
    Route::resource('rt-rw-desa', RtRwDesaController::class);

    // Keuangan
    Route::resource('pendapatan-desas', PendapatanDesaController::class);
    Route::resource('pengeluaran', PengeluaranController::class);

    // Kelembagaan
    Route::resource('kelembagaan-desa', KelembagaanDesaController::class);
    Route::get('/get-rt-rw/{desa_id}', [KelembagaanDesaController::class, 'getRtRw'])->name('get-rt-rw');
    Route::resource('lpmdk', LpmdkController::class);
    Route::resource('bumdes', BumdeController::class);
    Route::resource('pkk-desa', PkkDesaController::class);

    // Infrastruktur
    Route::resource('jembatan-desa', JembatanDesaController::class);
    Route::resource('jalan-desa', JalanDesaController::class);
    Route::resource('jalan-kabupaten-desa', JalanKabupatenDesaController::class);

    // Sosial
    Route::resource('kerawanan-sosial-desa', KerawananSosialDesaController::class);
    Route::resource('kondisi-lingkungan-keluarga-desa', KondisiLingkunganKeluargaDesaController::class);
    Route::resource('tempat-tinggal-desa', TempatTinggalDesaController::class);
    Route::resource('disabilitas-desa', DisabilitasDesaController::class);
    Route::resource('balita-desa', BalitaDesaController::class);
    Route::resource('lansia-desa', LansiaDesaController::class);
    Route::resource('pendidikan-desa', PendidikanDesaController::class);
    Route::resource('olahraga-desa', OlahragaDesaController::class);
    Route::resource('pelaku-umkm-desa', PelakuUmkmDesaController::class);

    // Sarana & Prasarana
    Route::resource('sarana-kesehatan-desa', SaranaKesehatanDesaController::class);
    Route::resource('sarana-pendukung-kesehatan-desa', SaranaPendukungKesehatanDesaController::class);
    Route::resource('sarana-ibadah-desa', SaranaIbadahDesaController::class);
    Route::resource('sarana-lainya-desa', SaranaLainyaDesaController::class);
    

    // Ekonomi
    Route::resource('ekonomi', EkonomiController::class);
    Route::resource('usaha-ekonomi', UsahaEkonomiController::class);

    // Industri & Energi
    Route::resource('industri-penghasil-limbah-desa', IndustriPenghasilLimbahDesaController::class);
    Route::resource('energi-desa', EnergiDesaController::class);

    // Sumber Daya Alam
    Route::resource('sumber-daya-alam-desa', SumberDayaAlamDesaController::class);

    // Route Pengajuan Universal (HARUS DI AKHIR)
    Route::patch('{resource}/{id}/ajukan', [AjukanController::class, 'ajukan'])
        ->name('universal.ajukan')
        ->where('resource', '[a-z-]+')
        ->where('id', '[0-9]+');
});

// Dashboard Admin Desa
Route::view('admin_desa/dashboard', 'admin_desa.home.index');
