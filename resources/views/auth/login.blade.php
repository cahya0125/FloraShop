<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flora Shop</title>
  <link rel="icon" href="assets/images/logoflora1.png" type="image/png">
  <style>
    body {
        background: linear-gradient(135deg, #e0f7e0, #ffffff);
        color: #333;
    }
    .container {
        margin-top: 50px;
    }
    .card {
        background: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-green {
        background-color: #4fa49a;
        border-color: #4fa49a;
        color: #fff;
    }
    .btn-green:hover {
        background-color: #3c837a;
        border-color: #3c837a;
    }
</style>

  <link href="assets/css/pace.min.css" rel="stylesheet">
  <script src="assets/js/pace.min.js"></script>
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="sass/main.css" rel="stylesheet">
  <link href="sass/dark-theme.css" rel="stylesheet">
  <link href="sass/blue-theme.css" rel="stylesheet">
  <link href="sass/responsive.css" rel="stylesheet">
</head>
<body>
  <div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">
        <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">
          <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
            <div class="card-body">
              <img src="assets/images/auth/login1flora.png" class="img-fluid auth-img-cover-login" width="650" alt="">
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center border-top border-4 border-primary border-gradient-1">
          <div class="card rounded-0 m-3 mb-0 border-0 shadow-none bg-none">
            <div class="card-body p-sm-5">
              <img src="assets/images/logoFlora.png" class="mb-4" width="145" alt="">
              <h4 class="fw-bold">Get Started Now</h4>
              <p class="mb-0">Enter your credentials to login your account</p>
              <div class="row g-3 my-4">
                <div class="col-12 col-lg-6">
                  <button class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/apps/05.png" width="20" class="me-2" alt="">Google</button>
                </div>
                <div class="col col-lg-6">
                  <button class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/apps/17.png" width="20" class="me-2" alt="">Facebook</button>
                </div>
              </div>
              <div class="separator section-padding">
                <div class="line"></div>
                <p class="mb-0 fw-bold">OR</p>
                <div class="line"></div>
              </div>
              <div class="form-body mt-4">
                <form class="row g-3" action="/login" method="POST">
                  @csrf
                  <div class="col-12">
                    <label for="inputEmailAddress" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmailAddress" placeholder="jhon@example.com">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="inputChoosePassword" class="form-label">Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputChoosePassword" placeholder="Enter Password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                      <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-md-6 text-end">
                    <a href="auth-cover-forgot-password.html">Forgot Password ?</a>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-success">Login</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="text-start">
                      <p class="mb-0">Don't have an account yet? <a href="{{url('/register')}}">Sign up here</a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
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