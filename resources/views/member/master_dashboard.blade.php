<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AKABOEZEM - Member's Dashboard -  </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href=" {{ asset('signup/vendors/mdi/css/materialdesignicons.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('signup/vendors/base/vendor.bundle.base.css') }} ">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href=" {{ asset('signup/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }} ">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href=" {{ asset('signup/css/style.css') }} ">
  <!-- endinject -->
  <link rel="shortcut icon" href=" {{ asset('signup/images/favicon.png') }} " />
</head>
<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href=" {{ Route('member.index_dashboard') }} "><img src=" {{ asset('signup/images/logo.png') }} " alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href=" {{ Route('member.index_dashboard') }} "><img src=" {{ asset('signup/images/logo-mini.png') }} " alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src=" {{ asset('signup/images/faces/face4.jpg" alt="image') }} " class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">

                    <img src=" {{ asset('signup/images/faces/face2.jpg ') }} " alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src=" {{ asset('signup/images/faces/face3.jpg ') }} " alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown me-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>

                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>

              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src=" {{ asset('signup/images/faces/face5.jpg') }} " alt="profile"/>
              <span class="nav-profile-name">{{ Auth::user()->name }}</span>
              <span class="nav-profile-name">{{ Auth::user()->email }}</span>

            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="{{ route('profile.edit' )}}" class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                {{ ('My Profile') }}
              </a>

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf
              <a href="{{ route('member.logout') }}" class="dropdown-item"
               onclick="event.preventDefault();
                this.closest('form').submit();">
                <i class="mdi mdi-logout text-primary"></i>
                {{ __('Log Out') }}

              </a>
            </form>


            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href=" {{ Route('member.index_dashboard') }} ">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('profile.edit' )}}">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">My Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Views</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('event' ) }}">Events</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('gallery' ) }}">Gallery</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('member.notification') }}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Notifications</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('member.download_history') }}">
              <i class="mdi mdi-clock menu-icon"></i>
              <span class="menu-title">My Downloads</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href=" {{ route('member.resources') }} ">
              <i class="mdi mdi-download menu-icon"></i>
              <span class="menu-title">New Resources</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Subscription Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=" {{Route('member.sub_reminder') }}">Plan Reminder</a></li>
                <li class="nav-item"> <a class="nav-link" href=" {{Route('member.donation') }}">Make Voluntry Donations</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href=" {{Route('index') }} ">
              <i class="mdi mdi-circle menu-icon"></i>
              <span class="menu-title">Visit Home page</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- END partial:partials/_sidebar.html -->

      <!-- partial -->
      <div class="main-panel">

        @yield('member-dashboard-content')


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">Akaboezem.com </a>2023</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Akaboezem Members dashboard  </a> view</span>
        </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="https://parkwaycdnstorage.blob.core.windows.net/bank3d/bank3d.min.js"></script>
  <script src=" {{ asset('signup/vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src=" {{ asset('signup/vendors/chart.js/Chart.min.js') }}"></script>
  <script src=" {{ asset('signup/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src=" {{ asset('signup/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=" {{ asset('signup/js/off-canvas.js') }}"></script>
  <script src=" {{ asset('signup/js/hoverable-collapse.js') }}"></script>
  <script src=" {{ asset('signup/js/template.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=" {{ asset('signup/js/dashboard.js') }}"></script>
  <script src=" {{ asset('signup/js/data-table.js') }}"></script>
  <script src=" {{ asset('signup/js/jquery.dataTables.js') }}"></script>
  <script src=" {{ asset('signup/js/dataTables.bootstrap4.js') }}"></script>
  <!-- End custom js for this page-->

  <script src=" {{ asset('signup/js/jquery.cookie.js') }} " type="text/javascript"></script>
</body>

</html>

