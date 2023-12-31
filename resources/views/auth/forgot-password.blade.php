<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User Forget Password</title>
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

             
              <h6 class="font-weight-light">Forget Password!</h6>


              <form class="pt-3" method="POST" action="{{ route('password.email') }}">
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
                     required autofocus
                    name="email"
                    placeholder="Enter Your Email"
                    required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                  </div>
                </div>


                <div class="my-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-large auth-form-btn" value="{{ __('Email Password Reset Link') }}" />
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
