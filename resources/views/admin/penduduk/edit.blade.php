@extends('admin.layout.app')
@section('title')
Edit Penduduk
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
        <h1 class="h3 mb-0 text-gray-800">Form Edit Penduduk</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Penduduk</li>
            <li class="breadcrumb-item active" aria-current="page">Form Edit Penduduk</li>
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
                    <form method="post" action="{{ route('penduduk.update',$penduduk->penduduk_id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIK</label>
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" value="{{ $penduduk->nik }}">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                          email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{ $penduduk->nama }}">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                        email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <textarea name="alamat" id="" cols="30" rows="3" class="form-control">{{ $penduduk->alamat }}</textarea>
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                      email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">RT / RW</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" name="rt" class="form-control" value="{{ $penduduk->rt }}"
                                                placeholder="Masukkan RT">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="rw" class="form-control"
                                                placeholder="Masukkan RW" value="{{ $penduduk->rw }}">
                                        </div>
                                    </div>
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                    email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Tempat Lahir</label>
                                          <input type="text" name="tempat_lahir" class="form-control"
                                              placeholder="Masukkan Tempat Lahir" value="{{ $penduduk->tempat_lahir }}">
                                  {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                  email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="{{ $penduduk->tgl_lahir }}">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                  email with anyone else.</small> --}}
                                </div>

                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="laki-laki" {{ $penduduk->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                                    <option value="perempuan" {{ $penduduk->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
            email with anyone else.</small> --}}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status Kawin</label>
                                <select name="status_kawin" id="" class="form-control">
                                  <option value="">Pilih Status Kawin</option>
                                  <option value="belum kawin" {{ $penduduk->status_kawin == 'belum kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                  <option value="sudah kawin" {{ $penduduk->status_kawin == 'sudah kawin' ? 'selected' : '' }}>Sudah Kawin</option>
                              </select>
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
          email with anyone else.</small> --}}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama</label>
                                <select name="agama" id="" class="form-control">
                                  <option value="">Pilih Agama</option>
                                  <option value="islam" {{ $penduduk->agama == 'islam' ? 'selected' : '' }}>Islam</option>
                                  <option value="katolik" {{ $penduduk->agama == 'katolik' ? 'selected' : '' }}>Katolik</option>
                                  <option value="protestan" {{ $penduduk->agama == 'protestan' ? 'selected' : '' }}>Protestan</option>
                                  <option value="hindu" {{ $penduduk->agama == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                  <option value="buddha" {{ $penduduk->agama == 'buddha' ? 'selected' : '' }}>Buddha</option>
                              </select>
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
        email with anyone else.</small> --}}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan" class="form-control" placeholder="Masukkan Kewarganegaraan" value="{{ $penduduk->kewarganegaraan }}">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
      email with anyone else.</small> --}}
                            </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Pendidikan</label>
                                <select name="pendidikan" id="" class="form-control">
                                  <option value="">Pilih Pendidikan</option>
                                  <option value="sd" {{ $penduduk->pendidikan == 'sd' ? 'selected' : '' }}>SD</option>
                                  <option value="smp" {{ $penduduk->pendidikan == 'smp' ? 'selected' : '' }}>SMP</option>
                                  <option value="sma" {{ $penduduk->pendidikan == 'sma' ? 'selected' : '' }}>SMA</option>
                                  <option value="sarjana" {{ $penduduk->pendidikan == 'sarjana' ? 'selected' : '' }}>Sarjana</option>
                                  <option value="magister" {{ $penduduk->pendidikan == 'magister' ? 'selected' : '' }}>Magister</option>
                                  <option value="Doktor" {{ $penduduk->pendidikan == 'doktor' ? 'selected' : '' }}>Doktor</option>
                                </select>
                            </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" value="{{ $penduduk->pekerjaan }}">
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
