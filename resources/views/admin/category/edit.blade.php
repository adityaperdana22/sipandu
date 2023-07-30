@extends('admin.layout.app')
@section('title')
    Edit Category
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
            <h1 class="h3 mb-0 text-gray-800">Form Edit Category</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item">Category</li>
              <li class="breadcrumb-item active" aria-current="page">Form Edit Category</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="{{ route('category.update',$category->category_id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Kategori</label>
                      <input type="text" name="category_nama" class="form-control" placeholder="Masukkan Nama Kategori" value="{{ $category->category_nama }}">
                      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                        email with anyone else.</small> --}}
                    </div>
                                        {{-- <div class="form-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div> --}}

                    <br>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('category.index') }}" class="btn btn-dark">Kembali</a>
                  </form>
                </div>
              </div>
            </div>

          </div>
          <!--Row-->

        </div>
        <!---Container Fluid-->

        @endsection
