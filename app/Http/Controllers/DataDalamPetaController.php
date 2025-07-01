<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\KategoriPeta;
use App\Models\JembatanDesa;

class DataDalamPetaController extends Controller
{
    public function index(Request $request)
    {
        $kecamatans = Kecamatan::orderBy('nama_kecamatan')->get();
        $desas = Desa::with('kecamatan')->orderBy('nama_desa')->get();
        $kategoriPeta = KategoriPeta::orderBy('nama')->get();

        $selectedKecamatan = $request->get('kecamatan');
        $selectedDesa = $request->get('desa');
        $selectedKategori = $request->get('kategori');

        $viewPeta = null;
        $jembatanMarkers = [];
        $desaLat = null;
        $desaLng = null;

        // Ambil data jembatan jika semua filter valid dan kategori = 9
        if ($selectedKecamatan && $selectedDesa && $selectedKategori == 9) {
            $desa = Desa::where('id', $selectedDesa)
                        ->where('kecamatan_id', $selectedKecamatan)
                        ->first();
        
            $viewPeta = 'web.partials.peta-jembatan'; // <-- Pindahkan ini ke atas
        
            if ($desa) {
                $desaLat = $desa->latitude;
                $desaLng = $desa->longitude;
        
                $jembatanMarkers = JembatanDesa::with('desa')
                    ->where('desa_id', $selectedDesa)
                    ->where('status', 'Approved')
                    ->whereNotNull('latitude')
                    ->whereNotNull('longitude')
                    ->get();
            }
        }        
        // if ($selectedKecamatan && $selectedDesa && $selectedKategori == 9) {
        //     $desa = Desa::where('id', $selectedDesa)
        //                 ->where('kecamatan_id', $selectedKecamatan)
        //                 ->first();

        //     if ($desa) {
        //         $desaLat = $desa->latitude;
        //         $desaLng = $desa->longitude;

        //         $jembatanMarkers = JembatanDesa::with('desa')
        //             ->where('desa_id', $selectedDesa)
        //             ->where('status', 'Approved')
        //             // ->where('approved_by', 'Admin Kabupaten')
        //             ->whereNotNull('latitude')
        //             ->whereNotNull('longitude')
        //             ->get();

        //         $viewPeta = 'web.partials.peta-jembatan';
        //     }
        // }

        return view('web.data-peta', compact(
            'kecamatans',
            'desas',
            'kategoriPeta',
            'selectedKecamatan',
            'selectedDesa',
            'selectedKategori',
            'viewPeta',
            'jembatanMarkers',
            'desaLat',
            'desaLng'
        ));
    }
}
