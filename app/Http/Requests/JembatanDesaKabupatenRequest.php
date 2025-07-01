<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JembatanDesaKabupatenRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // pastikan middleware role sudah diatur
    }

    public function rules(): array
    {
        return [
            'desa_id' => 'required|exists:desas,id',
            'rt_rw_desa_id' => 'required|exists:rt_rw_desas,id',
            'nama_jembatan' => 'required|string|max:255',
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric',
            'kondisi' => 'required|string',
            'lokasi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'latitude' => 'nullable|string',
            'longitude' => 'nullable|string',
        ];
    }
}
