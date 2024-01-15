@extends('layouts.app')

@section('title', 'Sistem')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Data</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Data</a></div>
                    <div class="breadcrumb-item">All Data</div>
                </div>
            </div>
            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Users</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('sistem.create') }}" class="btn btn-primary">New User</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET", action="{{ route('sistem.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>id</th>
                                            <th>no_ktp</th>
                                            <th>nama</th>
                                            <th>kelamin</th>
                                            <th>agama</th>
                                            <th>gol_darah</th>
                                            <th>nama_ayah</th>
                                            <th>nama_ibu</th>
                                            <th>nama_dusun</th>
                                            <th>alamat</th>
                                            <th>rt</th>
                                            <th>rw</th>
                                            <th>no_telepon</th>
                                            <th>tempat lahir</th>
                                            <th>tagal lahir</th>
                                            <th>foto</th>
                                            <th>kelainan fisik</th>
                                            <th>kelainan mental</th>
                                            <th>pendidikan</th>
                                            <th>pekerjaan</th>
                                            <th>status nikah</th>
                                            <th>warga negara</th>
                                            <th>status hidup</th>
                                        </tr>
                                        @foreach ($sistems as $sistem)
                                            <tr>
                                            <td>
                                                {{ $sistem->id }}
                                            </td>
                                            <td>
                                                {{ $sistem->no_ktp }}
                                            </td>
                                            <td>
                                                {{ $sistem->nama }}
                                            </td>
                                                <td>
                                                    {{ $sistem->kelamin }}
                                                </td>
                                                <td>
                                                    {{ $sistem->agama }}
                                                </td>
                                                   <td>
                                                    {{ $sistem->gol_darah }}
                                                </td>
                                                <td>
                                                    {{ $sistem->nama_ayah }}
                                                </td>
                                                <td>
                                                    {{ $sistem->nama_ibu }}
                                                </td>
                                                <td>
                                                    {{ $sistem->nama_dusun }}
                                                </td>
                                                <td>
                                                    {{ $sistem->alamat }}
                                                </td>
                                                <td>
                                                    {{ $sistem->rt }}
                                                </td>
                                                <td>
                                                    {{ $sistem->rw }}
                                                </td>
                                                <td>
                                                    {{ $sistem->no_telepon }}
                                                </td>
                                                <td>
                                                    {{ $sistem->tempat_lhr }}
                                                </td>
                                                <td>
                                                    {{ $sistem->tgl_lhr }}
                                                </td>
                                                <td>
                                                    {{ $sistem->foto }}
                                                </td>
                                                <td>
                                                    {{ $sistem->kl_fisik }}
                                                </td>
                                                <td>
                                                    {{ $sistem->kl_mental }}
                                                </td>
                                                <td>
                                                    {{ $sistem->pendidikan }}
                                                </td>
                                                <td>
                                                    {{ $sistem->pekerjaan }}
                                                </td>
                                                <td>
                                                    {{ $sistem->status_nikah }}
                                                </td>
                                                <td>
                                                    {{ $sistem->warga_negara }}
                                                </td>
                                                <td>
                                                    {{ $sistem->status_hidup }}
                                                </td>
                                                <td>
                                                <div class="d-flex justify-content-center">
                                                        <a href='{{ route('sistem.edit', $sistem->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('sistem.destroy', $sistem->id) }}" method="POST"
                                                            class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete" 
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')">
                                                            <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $sistems->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
