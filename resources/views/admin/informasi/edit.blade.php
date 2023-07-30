@extends('admin.layout.app')
@section('title')
Edit Informasi
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
        <h1 class="h3 mb-0 text-gray-800">Form Edit Informasi</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Informasi</li>
            <li class="breadcrumb-item active" aria-current="page">Form Edit Informasi</li>
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
                    <form method="post" action="{{ route('informasi.update',$informasi->informasi_id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Kategori</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option value="">Silahkan Pilih Nama Kategori</option>
                                        @foreach ($kategori as $data)
                                        <option value="{{ $data->category_id }}" {{ $informasi->category_id == $data->category_id ? 'selected' : '' }}>
                                          {{ $data->category_nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul Informasi</label>
                                    <input type="text" name="informasi_title" class="form-control"
                                        placeholder="Masukkan Judul Informasi" value="{{ $informasi->informasi_title }}">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                          email with anyone else.</small> --}}
                                </div>

                                <div class="form-group">
                                  <label>Gambar</label><br>
                                  <img src="{{ asset('gambar/'.$informasi->informasi_gambar) }}" width="100px" alt="">
                                  <div class="custom-file">
                                      <input type="hidden" name="gambar_lama" value="{{ $informasi->informasi_gambar }}">
                                      <input type="file" name="informasi_gambar" class="custom-file-input"
                                          id="customFile">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Lampiran</label> <a href="{{ asset('lampiran/'.$informasi->informasi_lampiran) }}">( {{ $informasi->informasi_lampiran }} )</a>
                                  <div class="custom-file">
                                      <input type="hidden" name="lampiran_lama" value="{{ $informasi->informasi_lampiran }}">
                                      <input type="file" name="informasi_lampiran" class="custom-file-input"
                                          id="customFile">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                              </div>

                            </div>


                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputPassword1">Deskripsi</label>
                                  <textarea name="informasi_deskripsi" id="editor" cols="30" rows="10">{{ $informasi->informasi_deskripsi }}</textarea>
                              </div>
                            </div>

                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('informasi.index') }}" class="btn btn-dark">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!--Row-->

</div>
<!---Container Fluid-->

@endsection
