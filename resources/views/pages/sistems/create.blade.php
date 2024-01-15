@extends('layouts.app')

@section('title', 'New Dara')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">New User</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('sistem.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New User</h4>
                        </div>
                        <div class="card-body">
                            
                        <div class="form-group">
                                <label>NO KTP</label>
                                <input type="text"
                                    class="form-control @error('no_ktp')
                                    is-invalid
                                @enderror""
                                    name="no_ktp">
                                    @error('no_telepon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    name="nama"> @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control @error('kelamin') is-invalid @enderror" name="kelamin">
                                        <option value="" {{ old('kelamin') === '' ? 'selected' : '' }}>Jenis Kelamin</option>
                                        <option value="laki-laki" {{ old('kelamin') === 'laki-laki' ? 'selected' : '' }}>laki-laki</option>
                                        <option value="perempuan" {{ old('kelamin') === 'perempuan' ? 'selected' : '' }}>perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>agama</label>
                                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                        <option value="" {{ old('agama') === '' ? 'selected' : '' }}>Jenis agama</option>
                                        <option value="islam" {{ old('agama') === 'islam' ? 'selected' : '' }}>islam</option>
                                        <option value="protestan" {{ old('agama') === 'protestan' ? 'selected' : '' }}>protestan</option>
                                        <option value="katholik" {{ old('agama') === 'katholik' ? 'selected' : '' }}>katholik</option>
                                        <option value="hindu" {{ old('agama') === 'hindu' ? 'selected' : '' }}>hindu</option>
                                        <option value="budha" {{ old('agama') === 'budha' ? 'selected' : '' }}>budha</option>
                                        <option value="khonghucu" {{ old('agama') === 'khonghucu' ? 'selected' : '' }}>khonghucu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>gol_darah</label>
                                <select class="form-control @error('gol_darah') is-invalid @enderror" name="gol_darah">
                                        <option value="" {{ old('gol_darah') === '' ? 'selected' : '' }}>golongan darah</option>
                                        <option value="O" {{ old('gol_darah') === 'O' ? 'selected' : '' }}>O</option>
                                        <option value="A" {{ old('gol_darah') === 'A' ? 'selected' : '' }}>A</option>
                                        <option value="B" {{ old('gol_darah') === 'B' ? 'selected' : '' }}>B</option>
                                        <option value="AB" {{ old('gol_darah') === 'AB' ? 'selected' : '' }}>AB</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>nama ayah</label>
                                <input type="text"
                                    class="form-control"
                                    name="nama_ayah" >
                            </div>

                            <div class="form-group">
                                <label>nama ibu</label>
                                <input type="text"
                                    class="form-control"
                                    name="nama_ibu" >
                            </div>

                            <div class="form-group">
                                <label>nama dusun</label>
                                <input type="text"
                                    class="form-control"
                                    name="nama_dusun" >
                            </div>

                            <div class="form-group">
                                <label>alamat</label>
                                <input type="text"
                                    class="form-control"
                                    name="alamat" >
                            </div>
                        
                            <div class="form-group">
                                <label>RT</label>
                                <input type="text"
                                    class="form-control"
                                    name="rt" >
                            </div>

                            <div class="form-group">
                                <label>RW</label>
                                <input type="text"
                                    class="form-control"
                                    name="rw" >
                            </div>

                            <div class="form-group">
                                <label>NO Telepon</label>
                                <input type="text"
                                    class="form-control @error('no_telepon') 
                                    is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon') }}"
                                    name="no_telepon" >
                                    @error('no_telepon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text"
                                    class="form-control"
                                    name="tempat_lhr" >
                            </div>

                            <div class="form-group">
                                <label>tanggal lahir</label>
                                <input type="date"
                                    class="form-control"
                                    name="tgl_lhr" >
                            </div>

                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input class="form-control" type="file" id="foto" name="foto">
                            </div>

                            <div class="form-group">
                                <label>Kelainan Fisik</label>
                                <input type="text"
                                    class="form-control"
                                    name="kl_fisik" >
                            </div>

                            <div class="form-group">
                                <label>Kelainan Mental</label>
                                <input type="text"
                                    class="form-control"
                                    name="kl_mental" >
                            </div>
                            
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <select class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan">
                                        <option value="" {{ old('pendidikan') === '' ? 'selected' : '' }}>Pilih Status Pernikahan</option>
                                        <option value="SD" {{ old('pendidikan') === 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ old('pendidikan') === 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA" {{ old('pendidikan') === 'SMA' ? 'selected' : '' }}>SMA</option>
                                        <option value="D1" {{ old('pendidikan') === 'D1' ? 'selected' : '' }}>D1</option>
                                        <option value="D2" {{ old('pendidikan') === 'D2' ? 'selected' : '' }}>D2</option>
                                        <option value="D3" {{ old('pendidikan') === 'D3' ? 'selected' : '' }}>D3</option>
                                        <option value="S1" {{ old('pendidikan') === 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ old('pendidikan') === 'S2' ? 'selected' : '' }}>S2</option>
                                        <option value="S3" {{ old('pendidikan') === 'S3' ? 'selected' : '' }}>S2</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <select class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan">
                                        <option value="" {{ old('pekerjaan') === '' ? 'selected' : '' }}>pekerjaan</option>
                                        <option value="PNS" {{ old('pekerjaan') === 'PNS' ? 'selected' : '' }}>PNS</option>
                                        <option value="wiraswasta" {{ old('pekerjaan') === 'WIRASWASTA' ? 'selected' : '' }}>WIRASWASTA</option>
                                        <option value="Petani" {{ old('pekerjaan') === 'Petani' ? 'selected' : '' }}>Petani</option>
                                        <option value="Pedagang" {{ old('pekerjaan') === 'Pedagang' ? 'selected' : '' }}>Pedagang</option>
                                        <option value="Buruh" {{ old('pekerjaan') === 'Buruh' ? 'selected' : '' }}>Buruh</option>
                                        <option value="TNI" {{ old('pekerjaan') === 'TNI' ? 'selected' : '' }}>TNI</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Status Nikah</label>
                                <select class="form-control @error('status_nikah') is-invalid @enderror" name="status_nikah">
                                        <option value="" {{ old('status_pernikahan') === '' ? 'selected' : '' }}>Pilih Status Pernikahan</option>
                                        <option value="nikah" {{ old('status_pernikahan') === 'nikah' ? 'selected' : '' }}>nikah</option>
                                        <option value="Belum nikah" {{ old('status_pernikahan') === 'Belum nikah' ? 'selected' : '' }}>Belum nikah</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Warga Negara</label>
                                <select class="form-control @error('warga_negara') is-invalid @enderror" name="warga_negara">
                                        <option value="" {{ old('warga_negara') === '' ? 'selected' : '' }}>Warga Negara</option>
                                        <option value="WNI" {{ old('warga_negara') === 'WNI' ? 'selected' : '' }}>WNI</option>
                                        <option value="WNA" {{ old('warga_negara') === 'WNA' ? 'selected' : '' }}>WNA</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Status Hidup</label>
                                <select class="form-control @error('status_hidup') is-invalid @enderror" name="status_hidup">
                                        <option value="" {{ old('status_hidup') === '' ? 'selected' : '' }}>Warga Negara</option>
                                        <option value="hidup" {{ old('status_hidup') === 'hidup' ? 'selected' : '' }}>hidup</option>
                                        <option value="mati" {{ old('status_hidup') === 'mati' ? 'selected' : '' }}>mati</option>
                                </select>                           
                             </div>
                        </div>
                        <div class="card-footer text-right">
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
