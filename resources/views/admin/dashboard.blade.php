@extends('admin.layout.app')
@section('title')
Halaman Dashboard
@endsection
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    @if (session('level_user') === 'admin')
    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->jumlah }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Penduduk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $penduduk->jumlah }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Kategori Informasi</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $kategori->jumlah }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Informasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $informasi->jumlah }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif(session('level_user') === 'warga')
    <div class="card">
        <div class="card-header">
            <h5><i class="fa fa-user-check"></i> Biodata Penduduk</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="table-responsive">
                        <a target="_blank" href="{{ route('print.surat.domisili', ['id' => $warga->penduduk_id]) }}" class="btn btn-lg btn-success" style=" font-size:16px"><i class="fa fa-print"></i> PRINT SURAT DOMISILI</a>
                        @if ($cek_pindah === null)
                            <button onclick="pesan()" class="btn btn-lg btn-success" style="font-size:16px"><i class="fa fa-print"></i> PRINT SURAT PINDAH</button>
                        @else
                        <a target="_blank" href="{{ route('print.surat.pindah', ['id' => $warga->penduduk_id]) }}" class="btn btn-lg btn-success" style="font-size:16px"><i class="fa fa-print"></i> PRINT SURAT PINDAH</a>
                        @endif
                        <table class="table table-striped mt-4">
                            <tr>
                                <td>Nik</td>
                                <td>:</td>
                                <td>{{ $warga->nik }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $warga->nama }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $warga->alamat }}</td>
                            </tr>
                            <tr>
                                <td>RT / RW</td>
                                <td>:</td>
                                <td>{{ $warga->rt }} / {{ $warga->rw }}</td>
                            </tr>
                            <tr>
                                <td>Tempat / Tanggal lahir</td>
                                <td>:</td>
                                <td>{{ $warga->tempat_lahir }} / {{ date('d-m-Y', strtotime( $warga->tgl_lahir)) }}</td>
                            </tr>
                            <tr>
                                <td>Jenis kelamin</td>
                                <td>:</td>
                                <td>{{ $warga->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td>Status kawin</td>
                                <td>:</td>
                                <td>{{ $warga->status_kawin }}</td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td>{{ $warga->agama }}</td>
                            </tr>
                            <tr>
                                <td>Kewarganegaraan</td>
                                <td>:</td>
                                <td>{{ $warga->kewarganegaraan }}</td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td>{{ $warga->pendidikan }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td>{{ $warga->pekerjaan }}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
<!---Container Fluid-->
@endsection
<script>
    function pesan()
    {
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Anda belum mengajukan pindah, Harap mendatangi kantor lurah',
        })
    }
</script>
