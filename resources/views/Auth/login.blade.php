<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{asset('assetsadmin')}}/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Login BeadOutbound</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assetsadmin')}}/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assetsadmin')}}/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="{{asset('assetsadmin')}}/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="{{asset('assetsadmin')}}/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assetsadmin')}}/vendor/libs/sweetalert2/sweetalert2.css" />
    <script src="{{asset('assetsadmin')}}/vendor/libs/sweetalert2/sweetalert2.js"></script>

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('assetsadmin')}}/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="{{asset('assetsadmin')}}/vendor/js/helpers.js"></script>
    <script src="{{asset('assetsadmin')}}/js/config.js"></script>
  </head>

  <body>
    <div class="authentication-wrapper authentication-cover authentication-bg">
      <div class="authentication-inner row">

        <!-- Left Illustration -->
        <div class="d-none d-lg-flex col-lg-7 p-0">
          <div class="auth-cover-bg d-flex justify-content-center align-items-center">
            <img src="{{asset('assetsadmin')}}/img/illustrations/auth-login-illustration-light.png" alt="auth-login-cover" class="img-fluid my-5 auth-illustration" />
          </div>
        </div>
        <!-- /Left -->

        <!-- Login Form -->
        <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
          <div class="w-px-400 mx-auto">
            
            <!-- Logo -->
            <div class="app-brand mb-4 text-center">
              <a href="/" class="app-brand-link">
                <img src="{{asset('assetsadmin')}}/img/flipvmush55.png" alt="Logo" style="max-height:60px;">
              </a>
            </div>
            <!-- /Logo -->

            <h3 class="mb-1 fw-bold">Welcome to BeadOutbound! 👋</h3>
            <p class="mb-4">Silakan login untuk masuk ke dashboard.</p>

            <form method="POST" action="{{ route('login.action') }}">
              @csrf
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required autofocus />
              </div>

              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label for="password" class="form-label">Password</label>
                  <a class="text-primary" href="/reset/sandi"><small>Lupa Password?</small></a>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" required placeholder="********" />
                  <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
              </div>

              @if (session('error'))
                <p class="text-danger">{{ session('error') }}</p>
              @endif

              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" />
                  <label class="form-check-label" for="remember-me">Ingat saya</label>
                </div>
              </div>

              <button type="submit" class="btn btn-primary d-grid w-100">Login</button>
            </form>

            <div class="text-center mt-3">
              <span>Belum punya akun?</span>
              <a class="text-primary" href="{{ route('register') }}">Register</a>
            </div>
          </div>
        </div>
        <!-- /Login -->
      </div>
    </div>

    <!-- Core JS -->
    <script src="{{asset('assetsadmin')}}/vendor/js/core.js"></script>
    <script src="{{asset('assetsadmin')}}/js/main.js"></script>
  </body>
</html>
