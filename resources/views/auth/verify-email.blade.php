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

              <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>


              {{-- Session Error Message  --}}

              {{-- @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <p class="alert alert-warning">{{$error}}</p>
              @endforeach
          @endif --}}

          @if (session('status') == 'verification-link-sent')
          <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
              {{ __('A new verification link has been sent to the email address you provided during registration.') }}
          </div>
      @endif

          {{-- Session Error Message  --}}

          <div class="mt-4 flex items-center justify-between">

            <form class="pt-3" method="POST" action="{{route('verification.send') }}">
                @csrf

                <div class="my-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-large auth-form-btn" value="{{ __('Resend Verification Email') }}" />
                </div>

              </form>

              <form class="pt-3" method="POST" action="{{ route('logout') }}">
                @csrf

                <div class="my-3">
                    <button type="submit" class="btn btn-block btn-secondary btn-sm font-weight-large auth-form-btn">
                        {{ __('Log Out') }}
                    </button>
                  {{-- <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-large auth-form-btn" value="{{ __('Resend Verification Email') }}" /> --}}
                </div>

              </form>

          </div>



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
