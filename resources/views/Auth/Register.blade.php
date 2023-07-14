<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMK Negeri 11 | Login</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/loggo.png')}}" />
</head>

<body>
    <div class="container-scroller d-flex">
        <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
            <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-transparent text-left p-5 text-center">
                            <img src="{{ asset ('images/SMK11.png') }}" class="lock-profile-img" alt="loggo">
                            <div class="mt-2">
                                <h2 class="text-light"> SMK Negeri 11 Malang | Register</h2>
                            </div>
                            <form action="{{route('Register_User')}}" method="post" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="username" class="text-light">Username</label>
                                        <input type="text" name="username" value="{{old('username')}}"
                                            class="form-control text-center text-light" placeholder="Username"/>
                                        @error('username')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">

                                        <label for="password" class="text-light">Password</label>
                                        <input type="password" name="password"
                                            class="form-control text-center text-light" id="examplePassword1"
                                            placeholder="********" />
                                        @error('password')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_akun" class="form-label text-light">Jenis Akun</label>
                                        <select class="form-control text-light" name="jenis_akun">
                                            <option value="pilih" class="text-black" disabled selected>--Pilih Admin--
                                            </option>
                                            <option value="Kesiswaan" class="text-black">Kesiswaaan</option>
                                            <option value=" Wali Kelas" class="text-black">Wali Kelas</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <!-- <a class="btn btn-block btn-success btn-lg font-weight-medium"
                                        href="{{route('Register_User')}}">Login</a> -->
                                    <button type="submit" class="btn btn-success btn-block">Daftar</button>
                                </div>
                                <div class="mt-3">
                                    <a class="btn btn-block btn-info btn-lg font-weight-medium"
                                        href="{{route('sign')}}">Batal</a>
                                </div>
                                <div class="mt-3 text-center">
                                    <a href="#" class="auth-link text-white"></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/template.js')}}"></script>
    <!-- endinject -->
</body>

</html>
