<?php

namespace App\Http\Controllers\AdminDesa;

use App\Http\Controllers\Controller;
use App\Models\PendidikanDesa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PendidikanDesaRequest;
use App\Models\Desa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PendidikanDesaController extends Controller
{
    public function index(Request $request): View
    {
        $pendidikanDesas = PendidikanDesa::with('desa', 'rtRwDesa')->paginate();
        return view('admin_desa.pendidikan-desa.index', compact('pendidikanDesas'))
            ->with('i', ($request->input('page', 1) - 1) * $pendidikanDesas->perPage());
    }

    public function create(): View
    {
        $pendidikanDesa = new PendidikanDesa();
        $desas = Desa::all();
        return view('admin_desa.pendidikan-desa.create', compact('pendidikanDesa', 'desas'));
    }

    public function store(PendidikanDesaRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        if ($request->hasFile('foto')) {
            $filename = time() . '_' . uniqid() . '.' . $request->file('foto')->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('foto_pendidikan', $request->file('foto'), $filename);
            $validatedData['foto'] = $filename;
        }

        PendidikanDesa::create($validatedData);

        return Redirect::route('admin_desa.pendidikan-desa.index')
            ->with('success', 'Data Pendidikan Desa berhasil disimpan.');
    }

    public function show($id): View
    {
        $pendidikanDesa = PendidikanDesa::findOrFail($id);
        return view('admin_desa.pendidikan-desa.show', compact('pendidikanDesa'));
    }

    public function edit($id): View
    {
        $pendidikanDesa = PendidikanDesa::findOrFail($id);
        $desas = Desa::all();
        return view('admin_desa.pendidikan-desa.edit', compact('pendidikanDesa', 'desas'));
    }

    public function update(PendidikanDesaRequest $request, PendidikanDesa $pendidikanDesa): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pendidikanDesa->foto && Storage::disk('public')->exists('foto_pendidikan/' . $pendidikanDesa->foto)) {
                Storage::disk('public')->delete('foto_pendidikan/' . $pendidikanDesa->foto);
            }

            // Simpan foto baru
            $filename = time() . '_' . uniqid() . '.' . $request->file('foto')->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('foto_pendidikan', $request->file('foto'), $filename);
            $data['foto'] = $filename;
        }

        $pendidikanDesa->update($data);

        return Redirect::route('admin_desa.pendidikan-desa.index')
            ->with('success', 'Data Pendidikan Desa berhasil diperbarui.');
    }

    public function destroy($id): RedirectResponse
    {
        $pendidikanDesa = PendidikanDesa::findOrFail($id);

        if ($pendidikanDesa->foto && Storage::disk('public')->exists('foto_pendidikan/' . $pendidikanDesa->foto)) {
            Storage::disk('public')->delete('foto_pendidikan/' . $pendidikanDesa->foto);
        }

        $pendidikanDesa->delete();

        return Redirect::route('admin_desa.pendidikan-desa.index')
            ->with('success', 'Data Pendidikan Desa berhasil dihapus.');
    }
}
