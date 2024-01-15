<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSistemRequest extends FormRequest
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
            'no_ktp' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'agama' => 'required',
            'gol_darah' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'nama_dusun' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'no_telepon' => 'required|numeric',
            'tempat_lhr' => 'required',
            'tgl_lhr'  => 'required',
            'foto'  => 'required',
            'kl_fisik'  => 'required',
            'kl_mental'  => 'required',
            'pendidikan'   => 'required',
            'pekerjaan'   => 'required',
            'status_nikah'  => 'required',
            'warga_negara' => 'required',
            'status_hidup' => 'required',
        ];
    }
}
