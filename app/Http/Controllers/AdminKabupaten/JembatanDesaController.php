<?php

namespace App\Http\Controllers\AdminKabupaten;

use App\Http\Controllers\Controller;
use App\Http\Requests\JembatanDesaKabupatenRequest;
use App\Models\Desa;
use App\Models\JembatanDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class JembatanDesaController extends Controller
{
    public function index(Request $request)
    {
        $jembatanDesas = JembatanDesa::with(['desa', 'rtRwDesa'])->paginate();

        return view('admin_kabupaten.jembatan-desa.index', compact('jembatanDesas'))
            ->with('i', ($request->input('page', 1) - 1) * $jembatanDesas->perPage());
    }

    public function show($id)
    {
        $jembatanDesa = JembatanDesa::with(['desa', 'rtRwDesa'])->findOrFail($id);

        return view('admin_kabupaten.jembatan-desa.show', compact('jembatanDesa'));
    }

    public function edit($id)
    {
        $jembatanDesa = JembatanDesa::findOrFail($id);

        if ($jembatanDesa->status !== 'Pending') {
            return redirect()->route('admin_kabupaten.jembatan-desa.show', $id)
                ->with('error', 'Data hanya dapat diedit jika statusnya Pending.');
        }

        $desas = Desa::all();

        return view('admin_kabupaten.jembatan-desa.edit', compact('jembatanDesa', 'desas'));
    }

    public function update(JembatanDesaKabupatenRequest $request, JembatanDesa $jembatanDesa)
    {
        if ($jembatanDesa->status !== 'Pending') {
            return redirect()->route('admin_kabupaten.jembatan-desa.show', $jembatanDesa->id)
                ->with('error', 'Data hanya bisa diupdate jika statusnya Pending.');
        }
    
        $data = $request->validated();
        $data['updated_by'] = Auth::user()->name;
    
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($jembatanDesa->foto && Storage::disk('public')->exists('foto_jembatan/' . $jembatanDesa->foto)) {
                Storage::disk('public')->delete('foto_jembatan/' . $jembatanDesa->foto);
            }
    
            // Simpan foto baru
            $filename = time() . '_' . uniqid() . '.' . $request->foto->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('foto_jembatan', $request->file('foto'), $filename);
            $data['foto'] = $filename;
        }
    
        $jembatanDesa->update($data);
    
        return redirect()->route('admin_kabupaten.jembatan-desa.index')
            ->with('success', 'Data berhasil diperbarui. Status tetap Pending sampai disetujui atau ditolak.');
    }
    
}
