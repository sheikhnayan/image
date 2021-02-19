<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <header style="background: url('{{asset('images/admin/bg.jpg')}}'); background-repeat: no-repeat;background-size: cover;background-position-y: center;">
    <nav class="navbar navbar-expand-lg navbar-light row" style="margin-right:0px; margin-left:0px; background: transparent;">
  <div class="col-md-4 row justify-content-center">
    <div class="col-md-4">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/"> <img class="img-fluid" src="{{asset('images/admin/logo.png')}}" alt=""> </a>
    </div>
  </div>
  <div class="collapse navbar-collapse col-md-4" style="padding-left: 100px;" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" style="color: #000 !important;" href="#">Category-1</a>
          <a class="dropdown-item" style="color: #000 !important;" href="#">Category-1</a>
          <a class="dropdown-item" style="color: #000 !important;" href="#">Category-1</a>
          <a class="dropdown-item" style="color: #000 !important;" href="#">Category-1</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
  <div class="col-md-4">
    <ul class="navbar-nav auth" style="float: right;">
      <li class="nav-item">
        <a class="nav-link" href="#">Buyer Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/seller-login">Seller Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="row" style="margin:0px;">
  <div class="col-md-12 header">
    <form class="" action="index.html" method="post">
      <div class="input-group row justify-content-center search">
        <div class="col-md-5">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
          aria-describedby="search-addon" /> <span></span>
        </div>
        <div class="col-md-2 type">
          <select class="form-control" name="type">
            <option value="image">Image</option>
            <option value="video">Video</option>
            <option value="content">Content</option>
          </select>
        </div>
        <div class="col-md-2 search-btn">
          <button type="submit" class="btn btn-outline-primary"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>
  </header>

  <main>
    <section>
        @yield('content')
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <h3 style="text-align: center; margin-top:30px; margin-bottom:10px">Popular Searches</h3>
          <ul class="tags" style="text-align: center;margin-bottom:20px">
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
            <li><a href="#">search1</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row justify-content-center footer" style="margin:0px;">
      <div class="col-md-2">
        <img class="img-fluid" src="{{asset('images/admin/logo.png')}}" style="padding: 30px;padding-bottom: 0px;" alt="">
        <p style="padding-left:20px; padding-top:30px; color: #000">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
      </div>
      <div class="col-md-2">
        <h4 style="padding-left:37px; padding-top:30px; padding-bottom:30px; color: #000">Company Info</h4>
        <ul class="useful">
          <li> <a href="#"> Home</a> </li>
          <li> <a href="#"> About Us</a> </li>
          <li> <a href="#"> Testimonial</a> </li>
          <li> <a href="#"> Image Search</a> </li>
        </ul>
      </div>
      <div class="col-md-2">
        <h4 style="padding-left:37px; padding-top:30px; padding-bottom:30px; color: #000">Learn More</h4>
        <ul class="useful">
          <li> <a href="#"> Pricing</a> </li>
          <li> <a href="#"> Licensing</a> </li>
          <li> <a href="#"> Contact Us</a> </li>
          <li> <a href="#"> Terms & Conditions</a> </li>
          <li> <a href="#"> Privacy Policy</a> </li>
        </ul>
      </div>
      <div class="col-md-2">
        <h4 style="padding-left:37px; padding-top:30px; padding-bottom:30px; color: #000">Need Help</h4>
        <ul class="useful">
          <li> <a href="#"> Contact Us</a> </li>
          <li> <a href="#"> Search Tips</a> </li>
          <li> <a href="#"> FAQ</a> </li>
          <li> <a href="#"> Technical</a> </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h4 style="padding-left:40px; padding-top:30px; padding-bottom:30px; color: #000">Get In Touch</h4>
        <ul>
          <li style="list-style: none; font-size: 15px"><b>Address:</b> Mirpur 12</li>
          <li style="list-style: none; font-size: 15px"><b>Phone:</b> +8801xxxxxxxxx</li>
          <li style="list-style: none; font-size: 15px"><b>Email:</b> support@imagedoorz.com</li>
        </ul>
        <ul class="social" style="display:block">
          <li style="background:#0166e1"> <a href="#"><i class="fab fa-facebook-f" style="color: #fff;"></i></a> </li>
          <li style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);"> <a href="#"><i class="fab fa-instagram" style="color: #fff;"></i></a> </li>
          <li style="background:#00acee"> <a href="#"> <i class="fab fa-twitter" style="color: #fff;"></i></a> </li>
          <li style="background:#0e76a8"> <a href="#"> <i class="fab fa-linkedin-in" style="color: #fff;"></i></a> </li>
          <li style="background:#FF0000 ; padding: 7px 10px;"> <a href="#"> <i class="fab fa-youtube" style="color: #fff;"></i></a> </li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://kit.fontawesome.com/73605b6102.js" crossorigin="anonymous"></script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
