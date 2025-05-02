<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Login') }} - {{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/css/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets/css/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets/css/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="min-h-screen d-flex align-items-center justify-content-center bg-gradient-to-r from-indigo-50 to-blue-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-lg rounded-2xl bg-white">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <h2 class="mb-2 h1">{{ __('Welcome Back') }}</h2>
                                <p class="text-muted">{{ __('Sign in to continue') }}</p>
                            </div>
                            
                            <form method="POST" action="{{ route('loginPost') }}">
                                @csrf
                                
                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="fas fa-envelope text-muted"></i>
                                        </span>
                                        <input type="email" class="form-control border-0 shadow-sm" id="email" name="email" 
                                               placeholder="{{ __('Email address') }}" value="{{ old('email') }}" required>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="fas fa-lock text-muted"></i>
                                        </span>
                                        <input type="password" class="form-control border-0 shadow-sm" id="password" name="password" 
                                               placeholder="{{ __('Password') }}" required>
                                        <span class="input-group-text bg-light border-0" id="password-eye">
                                            <i class="fas fa-eye text-muted"></i>
                                        </span>
                                    </div>
                                </div>

                                
                                <script>
                                    const passwordEye = document.querySelector('#password-eye');

                                    passwordEye.addEventListener('mousedown', (e) => {
                                        const passwordInput = document.querySelector('#password');
                                        passwordInput.type = 'text';
                                    });

                                    passwordEye.addEventListener('mouseup', (e) => {
                                        const passwordInput = document.querySelector('#password');
                                        passwordInput.type = 'password';
                                    });
                                </script>
                                

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                            <label class="form-check-label text-muted" for="remember_me">
                                                {{ __('Remember me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <a href="{{ route('password.request') }}" class="text-primary text-decoration-none">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    </div>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        @foreach ($errors->all() as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                <div class="row mb-4 pt-4">
                                    <div class="col-5"></div>
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        {{ __('Sign in') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
