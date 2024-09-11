<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Arsha Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('arsha/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('arsha/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Other head elements like title, meta tags, etc. -->
  </head>


  <!-- Vendor CSS Files -->
  <link href="{{asset('arsha/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('arsha/assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('arsha/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet')}}">
  <link href="{{asset('arsha/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet')}}"><link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  <!-- Main CSS File -->
  <link href="{{asset('arsha/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top"  style="background-color: rgb(67, 83, 223)">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ route('landing-page')}}" class="logo d-flex align-items-center me-auto">
            <!-- Logo Image -->
            <img src="{{asset('arsha/assets/img/Logo-LSA.png')}}" alt="Logo" class="logo-img" />

            <!-- Text -->
            <h1 class="sitename" style="color: #d1001c;">Larose</h1> <!-- Warna merah hati -->
        </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('landing-page')}}" class="active">Home</a></li>
          <li><a href="{{ route('aboutus')}}">About</a></li>
          <li><a href="{{ route('portfolio')}}">Product</a></li>

          <li><a href="{{ route('services')}}">Services</a></li>
          <li><a href="{{ route('ourcustomer')}}">Our Customer</a></li>
          <li><a href="{{ route('career')}}">Career</a></li>
          <li><a href="{{ route('contactus')}}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{('download')}}">Download</a>

    </div>
  </header>

  <main class="main">



    @yield('content')

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">

        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">LAROSE</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('arsha/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('arsha/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('arsha/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('arsha/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('arsha/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('arsha/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      speed: 600,
      autoplay: {
        delay: 5000,
      },
      slidesPerView: 'auto',
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        480: {
          slidesPerView: 3,
          spaceBetween: 60,
        },
        640: {
          slidesPerView: 4,
          spaceBetween: 80,
        },
        992: {
          slidesPerView: 5,
          spaceBetween: 120,
        },
        1200: {
          slidesPerView: 6,
          spaceBetween: 120,
        },
      },
    });
  </script>


  <!-- Main JS File -->
  <script src="{{asset('arsha/assets/js/main.js')}}"></script>

</body>

</html>
