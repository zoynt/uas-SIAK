<?php

namespace App\Http\Controllers;

use App\Models\Sistem;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\StoreSistemRequest;
use App\Http\Requests\StoreSistemRequest;
use App\Http\Requests\UpdateSistemRequest;
class SistemController extends Controller
{
    public function index(Request $request)
    {
        $sistems = DB::table('sistems')
            ->when($request->input('nama'), function ($query, $nama) {
                return $query->where('nama', 'like', '%' . $nama . '%');
            })
            ->select('id','no_ktp', 'nama' , 'kelamin' , 'agama' , 'gol_darah' , 'nama_ayah' , 'nama_ibu' , 'nama_dusun' , 
            'alamat', 'rt' , 'rw' , 'no_telepon' , 'tempat_lhr' , 'tgl_lhr'  , 'foto'  , 'kl_fisik'  , 
            'kl_mental'  , 'pendidikan'   , 'pekerjaan'   , 'status_nikah'  , 'warga_negara' , 'status_hidup' , )    
            ->orderBy('id', 'desc')
            ->paginate(15);
        return view('pages.sistems.index', compact('sistems'));
    }

    public function create()
    {
        return view('pages.sistems.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSistemRequest $request)
    {
        Sistem::create([
        'no_ktp'=> $request['no_ktp'],
        'nama' => $request['nama'],
        'kelamin' => $request['kelamin'],
        'agama' => $request['agama'],
        'gol_darah' => $request['gol_darah'],
        'nama_ayah' => $request['nama_ayah'],
        'nama_ibu' => $request['nama_ibu'],
        'nama_dusun' => $request['nama_dusun'],
        'alamat' => $request['alamat'],
        'rt' => $request['rt'],
        'rw' => $request['rw'],
        'no_telepon' => $request['no_telepon'],
        'tempat_lhr' => $request['tempat_lhr'],
        'tgl_lhr'  => $request['tgl_lhr'],
        'foto'  => $request['foto'],
        'kl_fisik'  => $request['kl_fisik'],
        'kl_mental'  => $request['kl_mental'],
        'pendidikan'   => $request['pendidikan'],
        'pekerjaan'   => $request['pekerjaan'],
        'status_nikah'  => $request['status_nikah'],
        'warga_negara' => $request['warga_negara'],
        'status_hidup' => $request['status_hidup'],
        ]);

        return redirect(route('sistem.index'))->with('success', 'data berhasil ditambahkan');
    }

    public function edit(Sistem $sistem)
    {
        return view('pages.sistems.edit')->with('sistem', $sistem);
    }

    public function update(UpdateSistemRequest $request, Sistem $sistem)
    {
        $validate = $request->validated();
        $sistem->update($validate);
        return redirect()->route('sistem.index')->with('success', ' Data Berhasil diperbarui');
    }

    public function destroy(Sistem $sistem)
    {
        $sistem->delete();
        return redirect()->route('sistem.index')->with('success', ' Data Berhasil dihapus');
    }
}
