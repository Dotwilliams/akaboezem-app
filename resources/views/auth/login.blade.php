<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - AKABOEZEM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href=" {{ asset('signup/vendors/mdi/css/materialdesignicons.min.css') }} ">
  <link rel="stylesheet" href="  {{ asset('signup/vendors/base/vendor.bundle.base.css') }}  ">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href=" {{ asset('signup/css/style.css') }} ">
  <!-- endinject -->
  <link rel="shortcut icon" href=" {{ asset('signup/images/favicon.png') }} " />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                {{-- <img src=" {{ asset('signup/images/logo.png') }} " alt="logo"> --}}
              </div>

              <h6 class="font-weight-light">Happy to see you again!</h6>

              {{-- Session Error Message  --}}
              @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <p class="alert alert-warning">{{$error}}</p>
              @endforeach
          @endif
          {{-- Session Error Message  --}}

              <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>

                    <input type="text" class="form-control form-control-lg border-left-0" id="email"
                    name="email"
                    placeholder="Enter Email"
                    required>

                  </div>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>

                    <input type="password" class="form-control form-control-lg border-left-0" id="password"
                    name="password"
                    placeholder="Enter your password"
                    required>

                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label for="remember_me" class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                      <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                  </div>
                  <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-large auth-form-btn" value="Login" />
                  {{-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">LOGIN</a> --}}
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
                </div>
              </form>


            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=" {{ asset('signup/vendors/base/vendor.bundle.base.js') }} "></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src=" {{ asset('signup/js/off-canvas.js') }} "></script>
  <script src=" {{ asset('signup/js/hoverable-collapse.js') }} "></script>
  <script src=" {{ asset('signup/js/template.js') }} "></script>
  <!-- endinject -->
</body>

</html>
