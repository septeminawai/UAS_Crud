<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <title>Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">

		<!-- App css -->
		<link href="{{asset('/vendor/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{asset('/vendor/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{asset('/vendor/assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{asset('/vendor/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{asset('/vendor/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type Your E-mail">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password" placeholder="Type Your Password">
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">

                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>


                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                @if (Route::has('password.request'))
                                <p><a class="text-white-50 ml-1" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a></p>
                              @endif
                                <p class="text-white-50">Don't have an account? <a href="{{route('register')}}" class="text-white ml-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
             <script>document.write(new Date().getFullYear())</script> &copy;   <a href="" class="text-white-50">Anggrek Moy</a>
        </footer>

        <!-- Vendor js -->
        <script src="{{asset('/vendor/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('/vendor/assets/js/app.min.js')}}"></script>

    </body>
</html>
