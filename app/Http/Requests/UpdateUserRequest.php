<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'nama' ,
            'kelamin' ,
            'agama' ,
            'gol_darah' ,
            'nama_ayah' ,
            'nama_ibu' ,
            'nama_dusun' ,
            'alamat' ,
            'rt' ,
            'rw' ,
            'no_telepon' => 'required|numeric',
            'tempat_lhr' ,
            'tgl_lhr'  ,
            'foto'  ,
            'kl_fisik'  ,
            'kl_mental'  ,
            'pendidikan'   ,
            'pekerjaan'   ,
            'status_nikah'  ,
            'warga_negara' ,
            'status_hidup' ,
        ];
    }
}
