<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('vendor_login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('vendor_login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('vendor_login/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('vendor_login/css/style.css')}}">

    <title>Seller Login</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('vendor_login/images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <a href="/" style="color: #fb771a"> <- back </a>
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase">Login as <strong>Seller</strong></h3>
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" name="email" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Your Password" id="password">
                </div>

                <input type="submit" value="Log In" class="btn btn-block py-2 btn-primary">
                <br>
                <p>Don't have an account? <a href="/seller-registation" style="color:#fb771a; font-weight:bold;">Create Account</a></p>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('vendor_login/fonts/icomoon/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('vendor_login/fonts/icomoon/js/popper.min.js')}}"></script>
    <script src="{{asset('vendor_login/fonts/icomoon/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor_login/fonts/icomoon/js/main.js')}}"></script>
  </body>
</html>