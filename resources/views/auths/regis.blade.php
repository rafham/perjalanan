<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Peduli Diri</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="row" style="width: 100%">
              <div class="col-md-6">
                <img src="{{asset('assets/images/passport.svg')}}"></img>
              </div>
              <div class="card col-md-6">
                <div class="card-body px-5 py-5">
                  <h3 class="card-title text-left mb-3">Register</h3>
                  <form action="/postregister" method="post">
                      @csrf
                      <div class="form-group">
                      <label>NIK</label>
                      <input type="text" class="form-control p_input" name="nik">
                    </div>
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control p_input" name="name">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control p_input" name="username">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control p_input" name="email">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control p_input" name="password">
                    </div>
                    <div class="form-group">
                      <label>No.Telp</label>
                      <input type="text" class="form-control p_input" name="telp">
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                    </div>
                    <p class="sign-up text-center">Already have an account?<a href="/login"> Log in</a></p>
                    <p class="terms">By signing up, you agree to our Terms , Data Policy and Cookies Policy </a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
  
</body></html>