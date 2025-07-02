<?php

namespace App\Http\Controllers\AdminDesa;

use App\Http\Controllers\Controller;
use App\Models\PendidikanDesa;
use App\Models\Desa;
use App\Http\Requests\PendidikanDesaRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class PendidikanDesaController extends Controller
{
<<<<<<< HEAD
    /* ========== INDEX ========== */
=======
>>>>>>> b6a6838bdac0b748db5828ffaaf444ff1e1ab06b
    public function index(Request $request): View
    {
        $pendidikanDesas = PendidikanDesa::with('desa', 'rtRwDesa')->paginate();
        return view('admin_desa.pendidikan-desa.index', compact('pendidikanDesas'))
            ->with('i', ($request->input('page', 1) - 1) * $pendidikanDesas->perPage());
    }

<<<<<<< HEAD
    /* ========== CREATE ========== */
    public function create(): View
    {
        $pendidikanDesa = new PendidikanDesa();
        $desas           = Desa::all();

        return view('admin_desa.pendidikan-desa.create', compact('pendidikanDesa', 'desas'));
    }

    /* ========== STORE ========== */
=======
    public function create(): View
    {
        $pendidikanDesa = new PendidikanDesa();
        $desas = Desa::all();
        return view('admin_desa.pendidikan-desa.create', compact('pendidikanDesa', 'desas'));
    }

>>>>>>> b6a6838bdac0b748db5828ffaaf444ff1e1ab06b
    public function store(PendidikanDesaRequest $request): RedirectResponse
    {
        $data = $request->validated();

<<<<<<< HEAD
        /* ── Upload foto jika ada ── */
        if ($request->hasFile('foto')) {
            $filename = time() . '_' . uniqid() . '.' . $request->foto->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('foto_pendidikan', $request->file('foto'), $filename);
            $data['foto'] = $filename;
=======
        if ($request->hasFile('foto')) {
            $filename = time() . '_' . uniqid() . '.' . $request->file('foto')->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('foto_pendidikan', $request->file('foto'), $filename);
            $validatedData['foto'] = $filename;
>>>>>>> b6a6838bdac0b748db5828ffaaf444ff1e1ab06b
        }

        PendidikanDesa::create($data);

        return Redirect::route('admin_desa.pendidikan-desa.index')
<<<<<<< HEAD
            ->with('success', 'Data Pendidikan Desa berhasil disimpan.');
    }

    /* ========== SHOW ========== */
    public function show($id): View
    {
        $pendidikanDesa = PendidikanDesa::with('desa', 'rtRwDesa')->findOrFail($id);

        return view('admin_desa.pendidikan-desa.show', compact('pendidikanDesa'));
    }

    /* ========== EDIT ========== */
    public function edit($id): View
    {
        $pendidikanDesa = PendidikanDesa::findOrFail($id);
        $desas           = Desa::all();

        return view('admin_desa.pendidikan-desa.edit', compact('pendidikanDesa', 'desas'));
    }

    /* ========== UPDATE ========== */

    public function update(PendidikanDesaRequest $request, PendidikanDesa $pendidikanDesa): RedirectResponse
{
    if (!in_array($pendidikanDesa->status, ['Arsip', 'Rejected'])) {
        return back()->with('error', 'Data yang sudah diajukan tidak dapat diedit.');
=======
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
>>>>>>> b6a6838bdac0b748db5828ffaaf444ff1e1ab06b
    }

    $data = $request->validated();

    // Tambahkan updated_by secara eksplisit
    $data['updated_by'] = Auth::user()->name;


    if ($request->hasFile('foto')) {
        if ($pendidikanDesa->foto && Storage::disk('public')->exists('foto_pendidikan/' . $pendidikanDesa->foto)) {
            Storage::disk('public')->delete('foto_pendidikan/' . $pendidikanDesa->foto);
        }

        $filename = time() . '_' . uniqid() . '.' . $request->foto->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('foto_pendidikan', $request->file('foto'), $filename);
        $data['foto'] = $filename;
    }

    $pendidikanDesa->update($data);

    return Redirect::route('admin_desa.pendidikan-desa.index')
        ->with('success', 'Data Pendidikan Desa berhasil diperbarui.');
}


    /* ========== DESTROY ========== */
    public function destroy($id): RedirectResponse
    {
        $pendidikanDesa = PendidikanDesa::findOrFail($id);

<<<<<<< HEAD
        /* Batasi hapus hanya untuk status Arsip / Rejected */
        if (!in_array($pendidikanDesa->status, ['Arsip', 'Rejected'])) {
            return back()->with('error', 'Data yang sudah diajukan tidak dapat dihapus.');
        }

        /* Hapus file foto jika ada */
=======
>>>>>>> b6a6838bdac0b748db5828ffaaf444ff1e1ab06b
        if ($pendidikanDesa->foto && Storage::disk('public')->exists('foto_pendidikan/' . $pendidikanDesa->foto)) {
            Storage::disk('public')->delete('foto_pendidikan/' . $pendidikanDesa->foto);
        }

        $pendidikanDesa->delete();

        return Redirect::route('admin_desa.pendidikan-desa.index')
<<<<<<< HEAD
            ->with('success', 'Data Pendidikan Desa berhasil dihapus.');
    }

    /* ========== AJUKAN KE ADMIN KABUPATEN ========== */
    public function ajukan($id): RedirectResponse
    {
        $pendidikanDesa = PendidikanDesa::findOrFail($id);

        if (!in_array($pendidikanDesa->status, ['Arsip', 'Rejected'])) {
            return back()->with('error', 'Hanya data dengan status Arsip atau Rejected yang dapat diajukan.');
        }

        $pendidikanDesa->status = 'Pending';
        $pendidikanDesa->save();

        return Redirect::route('admin_desa.pendidikan-desa.index')
            ->with('success', 'Data berhasil diajukan ke Admin Kabupaten.');
=======
            ->with('success', 'Data Pendidikan Desa berhasil dihapus.');
>>>>>>> b6a6838bdac0b748db5828ffaaf444ff1e1ab06b
    }
}
