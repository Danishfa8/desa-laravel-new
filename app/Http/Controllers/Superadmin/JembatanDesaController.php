<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\JembatanDesa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JembatanDesaKabupatenRequest;
use App\Models\Desa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class JembatanDesaController extends Controller
{
    public function index(Request $request): View
    {
        $jembatanDesas = JembatanDesa::with('desa', 'rtRwDesa')->paginate();

        return view('superadmin.jembatan-desa.index', compact('jembatanDesas'))
            ->with('i', ($request->input('page', 1) - 1) * $jembatanDesas->perPage());
    }

    public function create(): View
    {
        $jembatanDesa = new JembatanDesa();
        $desas = Desa::all();

        return view('superadmin.jembatan-desa.create', compact('jembatanDesa', 'desas'));
    }

    public function store(JembatanDesaKabupatenRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $filename = time() . '_' . uniqid() . '.' . $request->foto->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('foto_jembatan', $request->file('foto'), $filename);
            $data['foto'] = $filename;
        }

        $data['status'] = 'Approved';
        $data['created_by'] = auth()->id();
        $data['approved_by'] = auth()->id();

        JembatanDesa::create($data);

        return Redirect::route('superadmin.jembatan-desa.index')
            ->with('success', 'Data jembatan berhasil dibuat.');
    }

    public function show($id): View
    {
        $jembatanDesa = JembatanDesa::findOrFail($id);

        return view('superadmin.jembatan-desa.show', compact('jembatanDesa'));
    }

    public function edit($id): View
    {
        $jembatanDesa = JembatanDesa::findOrFail($id);
        $desas = Desa::all();

        return view('superadmin.jembatan-desa.edit', compact('jembatanDesa', 'desas'));
    }

    public function update(JembatanDesaKabupatenRequest $request, $id): RedirectResponse
    {
        $jembatanDesa = JembatanDesa::findOrFail($id);
        $data = $request->validated();

        unset($data['status'], $data['created_by'], $data['approved_by']);
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($jembatanDesa->foto && Storage::disk('public')->exists('foto_jembatan/' . $jembatanDesa->foto)) {
                Storage::disk('public')->delete('foto_jembatan/' . $jembatanDesa->foto);
            }
        
            // Simpan foto baru
            $filename = time() . '_' . uniqid() . '.' . $request->foto->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('foto_jembatan', $request->file('foto'), $filename);
            $data['foto'] = $filename;
        }

        $jembatanDesa->update($data);

        return Redirect::route('superadmin.jembatan-desa.index')
            ->with('success', 'Data jembatan berhasil diperbarui.');
    }

    public function destroy($id): RedirectResponse
    {
        $jembatanDesa = JembatanDesa::findOrFail($id);

        if ($jembatanDesa->foto && Storage::exists('public/foto_jembatan/' . $jembatanDesa->foto)) {
            Storage::delete('public/foto_jembatan/' . $jembatanDesa->foto);
        }

        $jembatanDesa->delete();

        return Redirect::route('superadmin.jembatan-desa.index')
            ->with('success', 'Data jembatan berhasil dihapus.');
    }
}
