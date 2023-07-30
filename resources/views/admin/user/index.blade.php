@extends('admin.layout.app')
@section('title')
Data User
@endsection
@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data User</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">User</li>
            <li class="breadcrumb-item active" aria-current="page">Data User</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6> --}}
                    <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="myTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Level User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{$data->level_user}}</td>
                                    <td>
                                        <a href="{{ route('user.edit',$data->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data?')" href="{{ route('user.delete',$data->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

