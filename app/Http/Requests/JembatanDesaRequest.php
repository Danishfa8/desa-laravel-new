<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JembatanDesaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'desa_id' => 'required',
            'rt_rw_desa_id' => 'required',
            'nama_jembatan' => 'required|string',
            'panjang' => 'required',
            'lebar' => 'required',
            'kondisi' => 'required',
            'lokasi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'created_by' => 'required|string',
            'updated_by' => 'string',
            'status' => 'required',
            'approved_by' => 'string',
            'approved_at' => 'string',
            'latitude' => 'nullable|string',
            'longitude' => 'nullable|string',
        ];
    }
}
