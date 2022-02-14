<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Code Basket</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('frontend/assets/css/style.css')}}" rel="stylesheet">

 
</head>
{{-- background: rgb(39 33 88 / 80%);/ --}}
<style>

</style>

<body>

  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo">
        
        <a href="{{url('/')}}" class="logo"><img src="{{url('frontend/assets/img/logo2.png')}}" alt=""
          class="img-fluid"></a>         
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}#services">Services</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}#team">Team</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}#contact">Contact</a></li>
          <li>
            <a class="getstarted scrollto" href="#about">Get Started</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
</section>
<!-- End Breadcrumbs -->
<?php
      $randomString = Str::random(30)
      ?>

<section class="inner-page">
  <div class="container">
    <a href="{{route('web.explore',['id'=>1,'pageno'=>0])}}"
      style="--clr:#ff22bb;--i:0;"><Span>OPPORTUNITIES</Span></a>
    <a href="{{route('web.explore',['id'=>2,'pageno'=>1])}}"
      style="--clr:#00ccff;--i:0;"><Span>RESOURCES</Span></a>
    <a href="{{route('web.explore',['id'=>3,'pageno'=>1])}}"
      style="--clr:#ff22bb;--i:0;"><Span>PROJECTS</Span></a>

    <a href="{{route('web.explore',['id'=>5,'pageno'=>1])}}"
      style="--clr:#ff22bb;--i:0;"><Span>FUN
        AND LEARN</Span></a>
  </div>
</section>
</main>
<!-- End #main -->
{{-- @endsection --}}