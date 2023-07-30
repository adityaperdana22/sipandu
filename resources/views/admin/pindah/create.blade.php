@extends('admin.layout.app')
@section('title')
Create Pindah
@endsection

@section('content')

@if (session('error') == TRUE)
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
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Create Data Pindah</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Pindah</li>
            <li class="breadcrumb-item active" aria-current="page">Data Pindah</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('pindah.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIK / Nama Penduduk</label>
                                    <select name="penduduk_id" id="" class="form-control" required>
                                        <option value="">--Pilih NIK</option>
                                        @foreach ($penduduk as $item)
                                        <option value="{{ $item->penduduk_id }}">{{ $item->nik }} / {{ ucwords($item->nama) }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                email with anyone else.</small> --}}
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal pindah</label>
                                    <input type="date" name="tanggal_pindah" class="form-control" required>
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                  email with anyone else.</small> --}}
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat pindah</label>
                                    <input type="text" name="alamat_pindah" class="form-control" placeholder="Alamat pindah" required>
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                          email with anyone else.</small> --}}
                                </div>
                                <div class="form-group">
                                    <label for="">Alasan pindah</label>
                                    <input type="text" name="alasan_pindah" class="form-control" placeholder="Alasan pindah" required>
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                          email with anyone else.</small> --}}
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('kelahiran.index') }}" class="btn btn-dark">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!--Row-->

</div>
<!---Container Fluid-->

@endsection
