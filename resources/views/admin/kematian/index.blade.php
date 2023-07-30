@extends('admin.layout.app')
@section('title')
Data Kematian
@endsection
@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Kematian</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Kematian</li>
            <li class="breadcrumb-item active" aria-current="page">Data Kematian</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6> --}}
                    <a href="{{ route('kematian.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="myTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama</th>
                                <th>Nama Lengkap / NIK</th>
                                <th>Tanggal Kematian</th>
                                <th>Sebab Kematian</th>
                                <th>Tempat Kematian</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kematian as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ucwords($data->nama)}} <br> <small>{{$data->nik}}</small>
                                    </td>
                                    <td>{{date('d-m-Y', strtotime($data->tgl_kematian))}}</td>
                                    <td>{{$data->sebab_kematian}}</td>
                                    <td>{{$data->tempat_kematian}}</td>
                                    <td>
                                        <a href="{{ route('penduduk.detail',$data->penduduk_id) }}" class="btn btn-info"><i class="fa fa-search"></i></a>
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->


</div>
<!---Container Fluid-->


@if (session('success') == TRUE)
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: '{{session("success")}}',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@elseif (session('error') == TRUE)
<script>
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: '{{session("error")}}',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif

@endsection

