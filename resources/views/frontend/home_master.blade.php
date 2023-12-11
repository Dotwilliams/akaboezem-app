<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Akaboezem - Members</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />


    <!-- Favicons -->
    <link href=" {{ asset('frontend/assets/img/favicon.png') }} " rel="icon" />
    <link href=" {{asset('frontend/assets/img/apple-touch-icon.png')}} " rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href=" {{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}} "
      rel="stylesheet"
    />
    <link
      href=" {{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}} "
      rel="stylesheet"
    />
    <link href=" {{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}} " rel="stylesheet" />
    <link
      href=" {{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}} "
      rel="stylesheet"
    />
    <link href=" {{asset('frontend/assets/vendor/remixicon/remixicon.css')}} " rel="stylesheet" />
    <link href=" {{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}} " rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="  {{asset('frontend/assets/css/style.css')}}  " rel="stylesheet" />

    <!-- =======================================================
  * Template Name: MeFamily
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo"
          ><img src=" {{ asset('frontend/assets/img/ac-logo.png') }}  " alt="site-logo" class="img-fluid"
        /></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href="{{ route('index') }}">Home</a></li>

            <li><a href="{{ route('about') }}">About Us</a></li>

            <!-- <li><a href="events.html">Events</a></li> -->

            <li><a href="{{ route('membership') }}">Membership</a></li>

            <!-- <li><a href="gallery.html">Gallery</a></li> -->

            <li><a href="{{ route('contact') }}">Contact</a></li>

            <li>
              <a href="{{ route('login') }}">
                <button type="button" class="btn btn-primary">
                  Sign Up
                </button></a
              >
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <h3>Akaboezem</h3>
        <p>
          Akaboeze Community is a vibrant and close-knit community located in
          Nigeria, known for its rich cultural heritage and warm hospitality.
        </p>
        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
          &copy; Copyright <strong><span>Akaboezem Community</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
          Designed by
          <a href="https://commondigitalsense.com/">Common Digital Sense</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>


    <!-- Vendor JS Files -->
    <script src=" {{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}} "></script>
    <script src=" {{asset('frontend/assets/vendor/php-email-form/validate.js')}} "></script>

    <!-- Template Main JS File -->
    <script src=" {{asset('frontend/assets/js/main.js')}} "></script>
  </body>
</html>
