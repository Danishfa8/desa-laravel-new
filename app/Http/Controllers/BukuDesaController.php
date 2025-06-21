<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BukuDesaController extends Controller
{
    /**
     * Menampilkan halaman buku desa
     */
    public function index(Request $request)
    {
        // Ambil data kecamatan dan desa
        $kecamatans = Kecamatan::orderBy('nama_kecamatan')->get();
        $desas = Desa::orderBy('nama_desa')->get();
        
        // Jika ada filter yang dipilih
        $selectedData = null;
        if ($request->filled(['tahun', 'kecamatan', 'desa'])) {
            // Di sini Anda bisa mengambil data spesifik berdasarkan filter
            // Contoh: $selectedData = DataDesa::where(...)->get();
        }
        
        return view('web.buku-desa', compact('kecamatans', 'desas', 'selectedData'));
    }
    
    /**
     * Generate PDF untuk buku desa
     */
    public function generatePdf(Request $request)
    {
        // Validasi request
        $request->validate([
            'tahun' => 'required|integer|min:2020|max:2025',
            'kecamatan' => 'required|exists:kecamatans,id',
            'desa' => 'required|exists:desas,id',
        ]);
        
        // Ambil data yang diperlukan
        $tahun = $request->tahun;
        $kecamatan = Kecamatan::findOrFail($request->kecamatan);
        $desa = Desa::findOrFail($request->desa);
        
        // Ambil data untuk buku desa
        // Contoh: $bukuData = DataBukuDesa::where(...)->get();
        
        // Generate PDF
        $pdf = PDF::loadView('pdf.buku-master', [
            'tahun' => $tahun,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            // 'bukuData' => $bukuData,
        ]);
        
        // Set paper size dan orientasi
        $pdf->setPaper('a4', 'portrait');
        
        // Tampilkan PDF di browser (stream) alih-alih langsung download
        return $pdf->stream("Buku_Desa_{$desa->nama_desa}_{$tahun}.pdf");
    }

    /**
     * Download PDF untuk buku desa
     */
    public function downloadPdf(Request $request)
    {
        // Validasi request
        $request->validate([
            'tahun' => 'required|integer|min:2020|max:2025',
            'kecamatan' => 'required|exists:kecamatans,id',
            'desa' => 'required|exists:desas,id',
        ]);
        
        // Ambil data yang diperlukan
        $tahun = $request->tahun;
        $kecamatan = Kecamatan::findOrFail($request->kecamatan);
        $desa = Desa::findOrFail($request->desa);
        
        // Generate PDF
        $pdf = PDF::loadView('pdf.buku-master', [
            'tahun' => $tahun,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            // 'bukuData' => $bukuData,
        ]);
        
        // Set paper size dan orientasi
        $pdf->setPaper('a4', 'portrait');
        
        // Download PDF dengan nama yang sesuai
        return $pdf->download("Buku_Desa_{$desa->nama_desa}_{$tahun}.pdf");
    }
}


