<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistem extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_ktp',
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
        'no_telepon' ,
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

    public function sistem()
    {
        return $this->belongsTo(Sistem::class);
    }
}
