
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('assets_admin') }}/img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="{{ asset('assets_admin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets_admin') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets_admin') }}/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('proses_login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">NIK</label>
                      <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Masukkan NIK">
                        @error('nik')
                          <small><i class="text-danger">{{ $message }}</i></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                      @error('password')
                      <small><i class="text-danger">{{ $message }}</i></small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Login sebagai</label>
                        <select name="level_user" id="" class="form-control">
                            <option value="admin">Admin</option>
                             <option value="warga">Warga</option>
                        </select>
                        @error('level_user')
                            <i class="text-danger">{{ $message }}</i>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="{{ asset('assets_admin') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('assets_admin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets_admin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{ asset('assets_admin') }}/js/ruang-admin.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if (session('error'))
      <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session("error") }}',
            })
      </script>
  @endif
</body>

</html>
