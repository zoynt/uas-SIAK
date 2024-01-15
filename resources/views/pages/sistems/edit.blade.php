@extends('layouts.app')

@section('title', 'Edit Sistem')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">Edit Data</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('sistem.update', $sistem) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Data</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="text"
                                    class="form-control @error('no_ktp') is-invalid @enderror"
                                    name="no_ktp" value="{{ $sistem->no_ktp }}">
                                    @error('no_ktp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    
                                @enderror"
                                    name="nama" value="{{ $sistem->nama }}">
                                </div>

                            <div class="form-group">
                                <label>kelamin</label>
                                <select class="form-control @error('kelamin') is-invalid @enderror" name="kelamin">
                                        <option value="laki-laki" {{ $sistem->kelamin == 'laki-laki' ? 'selected' : '' }}>laki-laki</option>
                                        <option value="perempuan" {{ $sistem->kelamin == 'perempuan' ? 'selected' : '' }}>perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>agama</label>
                                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                        <option value="islam"       {{ $sistem->agama == 'islam' ? 'selected' : '' }}>islam</option>
                                        <option value="protestan"   {{ $sistem->agama == 'protestan' ? 'selected' : '' }}>protestan</option>
                                        <option value="katholik"    {{ $sistem->agama == 'katholik' ? 'selected' : '' }}>katholik</option>
                                        <option value="hindu"       {{ $sistem->agama == 'hindu' ? 'selected' : '' }}>hindu</option>
                                        <option value="budha"       {{ $sistem->agama == 'budha' ? 'selected' : '' }}>budha</option>
                                        <option value="khonghucu"   {{ $sistem->agama == 'khonghucu' ? 'selected' : '' }}>khonghucu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>gol_darah</label>
                                <select class="form-control @error('gol_darah') is-invalid @enderror" name="gol_darah">
                                        <option value="O" {{ $sistem->gol_darah == 'O' ? 'selected' : '' }}>O</option>
                                        <option value="A" {{ $sistem->gol_darah == 'A' ? 'selected' : '' }}>A</option>
                                        <option value="B" {{ $sistem->gol_darah == 'B' ? 'selected' : '' }}>B</option>
                                        <option value="AB"{{ $sistem->gol_darah == 'AB' ? 'selected' : '' }}>AB</option>
                                </select>
>
                            </div>

                            <div class="form-group">
                                <label>nama ayah</label>
                                <input type="text"
                                    class="form-control "
                                    name="nama_ayah" value="{{ $sistem->nama_ayah }}">
                            </div>

                            <div class="form-group">
                                <label>nama ibu</label>
                                <input type="text"
                                    class="form-control "
                                    name="nama_ibu" value="{{ $sistem->nama_ibu }}">
                            </div>

                            <div class="form-group">
                                <label>nama dusun</label>
                                <input type="text"
                                    class="form-control "
                                    name="nama_dusun" value="{{ $sistem->nama_dusun }}">
                            </div>

                            <div class="form-group">
                                <label>alamat</label>
                                <input type="text"
                                    class="form-control "
                                    name="alamat" value="{{ $sistem->alamat }}">
                            </div>

                            <div class="form-group">
                                <label>rt</label>
                                <input type="text"
                                    class="form-control "
                                    name="rt" value="{{ $sistem->rt }}">
                            </div>

                            <div class="form-group">
                                <label>rw</label>
                                <input type="text"
                                    class="form-control "
                                    name="rw" value="{{ $sistem->rw }}">
                            </div>

                            <div class="form-group">
                                <label>no_telepon</label>
                                <input type="text"
                                    class="form-control "
                                    name="no_telepon" value="{{ $sistem->no_telepon }}">
                            </div>

                            <div class="form-group">
                                <label>tempat lahir</label>
                                <input type="text"
                                    class="form-control "
                                    name="tempat_lhr" value="{{ $sistem->tempat_lhr }}">
                            </div>

                            <div class="form-group">
                                <label>tanggal lahir</label>
                                <input type="date"
                                    class="form-control "
                                    name="tgl_lhr" value="{{ $sistem->tgl_lhr }}">
                            </div>

                            <div class="form-group">
                                <label>foto</label>
                                <input type="text"
                                    class="form-control "
                                    name="foto" value="{{ $sistem->foto }}">
                            </div>

                            <div class="form-group">
                                <label>kl_fisik</label>
                                <input type="text"
                                    class="form-control "
                                    name="kl_fisik" value="{{ $sistem->kl_fisik }}">
                            </div>

                            <div class="form-group">
                                <label>kl_mental</label>
                                <input type="text"
                                    class="form-control "
                                    name="kl_mental" value="{{ $sistem->kl_mental }}">
                            </div>
                            
                            <div class="form-group">
                                <label>pendidikan</label>
                                <select class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan">
                                        <option value="SD" {{ $sistem->pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP"{{ $sistem->pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA"{{ $sistem->pendidikan == 'SMA' ? 'selected' : '' }}>SMA</option>
                                        <option value="D1" {{ $sistem->pendidikan == 'D1' ? 'selected' : '' }}>D1</option>
                                        <option value="D2" {{ $sistem->pendidikan == 'D2' ? 'selected' : '' }}>D2</option>
                                        <option value="D3" {{ $sistem->pendidikan == 'D3' ? 'selected' : '' }}>D3</option>
                                        <option value="S1" {{ $sistem->pendidikan == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ $sistem->pendidikan == 'S2' ? 'selected' : '' }}>S2</option>
                                        <option value="S3" {{ $sistem->pendidikan == 'S3' ? 'selected' : '' }}>S2</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>pekerjaan</label>
                                <select class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan">
                                        <option value="PNS" {{ $sistem->pekerjaan == 'PNS' ? 'selected' : '' }}>PNS</option>
                                        <option value="wiraswasta" {{ $sistem->pekerjaan == 'WIRASWASTA' ? 'selected' : '' }}>WIRASWASTA</option>
                                        <option value="Petani" {{ $sistem->pekerjaan == 'Petani' ? 'selected' : '' }}>Petani</option>
                                        <option value="Pedagang" {{ $sistem->pekerjaan == 'Pedagang' ? 'selected' : '' }}>Pedagang</option>
                                        <option value="Buruh" {{ $sistem->pekerjaan == 'Buruh' ? 'selected' : '' }}>Buruh</option>
                                        <option value="TNI" {{ $sistem->pekerjaan == 'TNI' ? 'selected' : '' }}>TNI</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>status_nikah</label>
                                <select class="form-control @error('status_nikah') is-invalid @enderror" name="status_nikah">
                                        <option value="nikah" {{ $sistem->status_nikah == 'nikah' ? 'selected' : '' }}>nikah</option>
                                        <option value="Belum nikah" {{ $sistem->status_nikah == 'Belum nikah' ? 'selected' : '' }}>Belum nikah</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>warga_negara</label>
                                <select class="form-control @error('warga_negara') is-invalid @enderror" name="warga_negara">
                                        <option value="WNI" {{ $sistem->warga_negara == 'WNI' ? 'selected' : '' }}>WNI</option>
                                        <option value="WNA" {{ $sistem->warga_negara == 'WNA' ? 'selected' : '' }}>WNA</option>
                                </select>                            
                            </div>

                            <div class="form-group">
                                <label>status_hidup</label>
                                <select class="form-control @error('status_hidup') is-invalid @enderror" name="status_hidup">
                                        <option value="hidup" {{ $sistem->status_hidup == 'hidup' ? 'selected' : '' }}>hidup</option>
                                        <option value="mati"  {{ $sistem->status_hidup == 'mati' ? 'selected' : '' }}>mati</option>
                                </select>         
                            </div>

                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
