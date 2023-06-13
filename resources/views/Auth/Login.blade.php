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
                                <h2 class="text-light"> SMK Negeri 11 Malang | Login</h2>
                            </div>
                            <form class="mt-3" action="{{route('Login_User')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    @if (session()->has('register_success'))
                                                    <div class="alert alert-info alert-dismissible fade show"
                                                        role="alert">
                                                        {{ session('register_success') }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    @if (session()->has('loginError'))
                                                    <div class="alert alert-danger alert-dismissible fade show"
                                                        role="alert">
                                                        {!! session('loginError') !!}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- //username -->
                                    <div class="mb-3">
                                        <label for="username" class="text-light">Username</label>
                                        <input type="text" name="Username" value="{{old('Username')}}" class="form-control text-center text-light @error('username')
                                                            is-invalid
                                                        @enderror" placeholder="Username" autofocus required />
                                        @error('username')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- //password -->
                                    <div class="mb-3">

                                        <label for="Password" class="text-light">Password</label>
                                        <input type="password" name="Password" class="form-control text-center text-light @error('password')
                                                            is-invalid
                                                        @enderror" id="Password" placeholder="********" required />
                                        @error('password')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- //button -->
                                <div class="mt-3">
                                    <a class="btn btn-block btn-success btn-lg font-weight-medium"
                                        href="{{route('Login_User')}}">Login</a>
                                </div>
                                <div class="mt-3">
                                    <a class="btn btn-block btn-info btn-lg font-weight-medium"
                                        href="{{route('Register')}}">Register</a>
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
