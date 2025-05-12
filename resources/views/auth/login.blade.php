<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Login') }} - {{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: stretch;
        }
        .login-image {
            background: url('{{ asset('assets/images/login-bg.jpg') }}') no-repeat center center;
            background-size: cover;
        }
        .login-form {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container-fluid login-container">
        <!-- Left Image -->
        <div class="col-md-6 d-none d-md-block login-image">
            <img src="{{asset('/images/logo.jpg')}}" alt="">
        </div>

        <!-- Right Form -->
        <div class="col-md-6 login-form bg-white shadow-lg">
            <div class="w-100" style="max-width: 400px;">
                <h2 class="mb-4 text-center">{{ __('Welcome Back') }}</h2>
                <p class="text-muted text-center mb-4">{{ __('Sign in to your account') }}</p>

                <form method="POST" action="{{ route('loginPost') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email address') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <span class="input-group-text" id="toggle-password"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>

                    <script>
                        document.getElementById('toggle-password').addEventListener('click', function () {
                            const passwordInput = document.getElementById('password');
                            const icon = this.querySelector('i');
                            if (passwordInput.type === 'password') {
                                passwordInput.type = 'text';
                                icon.classList.replace('fa-eye', 'fa-eye-slash');
                            } else {
                                passwordInput.type = 'password';
                                icon.classList.replace('fa-eye-slash', 'fa-eye');
                            }
                        });
                    </script>

                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label" for="remember">
                                {{ __('Remember me') }}
                            </label>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">{{ __('Forgot password?') }}</a>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">{{ __('Sign in') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
