@extends('admin.layout.app')
@section('title')
Create Penduduk
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
        <h1 class="h3 mb-0 text-gray-800">Form Create Penduduk</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Penduduk</li>
            <li class="breadcrumb-item active" aria-current="page">Form Create Penduduk</li>
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
                    <form method="post" action="{{ route('penduduk.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIK</label>
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                          email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                        email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <textarea name="alamat" id="" cols="30" rows="3" class="form-control"></textarea>
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                      email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">RT / RW</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" name="rt" class="form-control"
                                                placeholder="Masukkan RT">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="rw" class="form-control"
                                                placeholder="Masukkan RW">
                                        </div>
                                    </div>
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                    email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Tempat Lahir</label>
                                          <input type="text" name="tempat_lahir" class="form-control"
                                              placeholder="Masukkan Tempat Lahir">
                                  {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                  email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                  email with anyone else.</small> --}}
                                </div>

                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
            email with anyone else.</small> --}}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status Kawin</label>
                                <select name="status_kawin" id="" class="form-control">
                                  <option value="">Pilih Status Kawin</option>
                                  <option value="belum kawin">Belum Kawin</option>
                                  <option value="sudah kawin">Sudah Kawin</option>
                              </select>
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
          email with anyone else.</small> --}}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama</label>
                                <select name="agama" id="" class="form-control">
                                  <option value="">Pilih Agama</option>
                                  <option value="islam">Islam</option>
                                  <option value="katolik">Katolik</option>
                                  <option value="protestan">Protestan</option>
                                  <option value="hindu">Hindu</option>
                                  <option value="buddha">Buddha</option>
                              </select>
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
        email with anyone else.</small> --}}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan" class="form-control" placeholder="Masukkan Kewarganegaraan">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
      email with anyone else.</small> --}}
                            </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Pendidikan</label>
                                <select name="pendidikan" id="" class="form-control">
                                  <option value="">Pilih Pendidikan</option>
                                  <option value="sd">SD</option>
                                  <option value="smp">SMP</option>
                                  <option value="sma">SMA</option>
                                  <option value="sarjana">Sarjana</option>
                                  <option value="magister">Magister</option>
                                  <option value="Doktor">Doktor</option>
                                </select>
                            </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control">
                                </div>
                            </div>

                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('penduduk.index') }}" class="btn btn-dark">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!--Row-->

</div>
<!---Container Fluid-->

@endsection
