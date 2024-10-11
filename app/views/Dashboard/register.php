<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Bootstrap demo</title>
  <!--favicon-->
	<link rel="icon" href="http://localhost/skrishna/public/dashboard/images/favicon-32x32.png" type="image/png">

  <!--plugins-->
  <link href="http://localhost/skrishna/public/dashboard/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://localhost/skrishna/public/dashboard/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/skrishna/public/dashboard/plugins/metismenu/mm-vertical.css">
  <!--bootstrap css-->
  <link href="http://localhost/skrishna/public/dashboard/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="http://localhost/skrishna/public/dashboard/css/bootstrap-extended.css" rel="stylesheet">
  <link href="http://localhost/skrishna/public/dashboard/sass/main.css" rel="stylesheet">
  <link href="http://localhost/skrishna/public/dashboard/sass/dark-theme.css" rel="stylesheet">
  <link href="http://localhost/skrishna/public/dashboard/sass/responsive.css" rel="stylesheet">

  </head>

<body>
<div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">

        <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end">

          <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent">
            <div class="card-body">
              <img src="http://localhost/skrishna/public/dashboard/images/auth/register1.png" class="img-fluid auth-img-cover-login" width="650" alt="">
            </div>
          </div>

        </div>

        <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
          <div class="card rounded-0 m-3 border-0 shadow-none">
            <div class="card-body p-sm-5">
              <img src="http://localhost/skrishna/public/img/logo.png" class="mb-4" width="145" alt="">
              <h4 class="fw-bold">Get Started Now</h4>
              <p class="mb-0">Enter your credentials to create your account</p>

              

              <div class="form-body mt-4">
                <form action="" method="post" class="row g-3">
                  <div class="col-12">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Jhon">
                  </div>
                  <div class="col-12">
                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" id="inputEmailAddress" placeholder="example@user.com">
                  </div>
                  <div class="col-12">
                    <label for="inputChoosePassword" class="form-label">Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" name="password" class="form-control" id="inputChoosePassword"  placeholder="Enter Password">
                       <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                    </div>
                  </div>
                
                  <div class="col-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                      <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp; Conditions</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="text-start">
                      <p class="mb-0">Already have an account? <a href="auth-cover-login.html">Sign in here</a></p>
                    </div>
                  </div>
                </form>
              </div>

          </div>
          </div>
        </div>

      </div>
      <!--end row-->
    </div>
  </div>

  <script src="http://localhost/skrishna/public/dashboard/js/jquery.min.js"></script>
  
  <script>
    $(document).ready(function () {
      $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("bi-eye-slash-fill");
          $('#show_hide_password i').removeClass("bi-eye-fill");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("bi-eye-slash-fill");
          $('#show_hide_password i').addClass("bi-eye-fill");
        }
      });
    });
  </script>

</body>

</html>