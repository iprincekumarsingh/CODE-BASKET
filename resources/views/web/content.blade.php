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
  <link href="http://127.0.0.1:8000/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="http://127.0.0.1:8000/frontend/assets/css/style.css" rel="stylesheet">

</head>

<style>

</style>

<body>

  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo">
        <a href="{{url('/')}}" class="logo"><img src="{{url('frontend/assets/img/logo2.png')}}" alt=""
            class="img-fluid"></a>
      </h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000">Home</a></li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000#about">About</a></li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000#services">Services</a></li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000#team">Team</a></li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000#contact">Contact</a></li>
          <li>
            <a class="getstarted scrollto" href="#about">Get Started</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <style>
    /* .uu {
        padding: 10px;
        margin: 5px;
    } */
    .uf {
      display: flex;
      flex-wrap: wrap
    }

    .u {
      padding: 10px;
    }

    .ub {
      align-items: flex-end width: 200px
    }
  </style>
  <!-- End Breadcrumbs -->
  <?php
      $randomString = Str::random(30)
      ?>
  <section class="inner-page ">
    <div class="container">
      <a href="{{route('fortify.register')}}" style="--clr:#ff22bb;--i:0;"><Span>Contribute here !</Span></a>

      @isset($pageno)

      @if ($pageno==0)

      <a href="{{route('women.explore',['id'=>1])}}" style="--clr:#ff22bb;--i:0;"><Span>OPPORTUNITIES FOR
          WOMEN</Span></a>



      @endif
      @endisset
    </div>

    <div class="row u ">
      @foreach ($search as $result)

      <div class="col-md-4 col-sm-4 col-xs-12 u">
        <div style="margin: 5px; border:1px solid rgba(212, 212, 212, 0.712); padding:10px;border-radius:10px"
          class="row section-success  text-center">
          <div class="col-md-12 section1">
            @if ($result->post_photo1==null)
            <img style="border-radius: 0px; width:455px;height:270px"
              src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20191105192037/What-Are-The-Best-Resources-For-Competitive-Programming.png">
            @else

            <img style="border-radius: 0px; width:455px;height:270px"
              src="{{url('/upload/oppurtunity/'.$result->post_photo1)}}">
            @endif


          </div>
          <div class="col-md-12 section2 pb-3">
            <p>{{$result->name}}</p>
            {{-- {{$result- >description}} --}}

          </div>

          <a href="{{route('read.more',['id'=>$result->opid])}}" class=" ub btn btn-primary">View</a>
        </div>
      </div>
      @endforeach


    </div>
  </section>
  {{-- !-- ======= Footer ======= --> --}}
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Code Basket</h3>
            <p>
              Jagamara, Khandagiri <br>
              Bhubaneshwar<br>
              Odisha <br><br>
              <strong>Phone:</strong> +91 9864355567 <br>
              <strong>Email:</strong> codebasket@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Resources</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Projects</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Student Aids</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Play and Code</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Opportunities</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Stay updated with application dates and new Opportunities</p>
            <form action="http://127.0.0.1:8000/news" method="post">
              <input type="hidden" name="_token" value="318PtJcRX3Yt9wNeRvTI5AUQn1L9wo0z2uWRm9hg"> <input type="email"
                name="email">
              <input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Code Basket</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->

          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="http://127.0.0.1:8000/frontend/assets/vendor/purecounter/purecounter.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/vendor/aos/aos.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="http://127.0.0.1:8000/frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="http://127.0.0.1:8000/frontend/assets/js/main.js"></script>

</body>

</html>
{{-- @endsection --}}