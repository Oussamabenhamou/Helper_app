<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="{{ asset('accueil/Helper/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('accueil/Helper/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('accueil/Helper/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/Helper/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/Helper/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/Helper/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/Helper/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/Helper/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('accueil/Helper/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Helper</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="/" >Home</a></li>






                <li><a class="get-a-quote" href="/register">Register </a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Login</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Login</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">
          <div class="col-lg-5 quote-bg" style="background-image: url({{asset('client/img/login1.png')}});">
          </div>

          <div class="col-lg-7">
            <form action="/con" method="POST" class="php-email-form">
              @method('post')
              @csrf
              <h3>Login</h3>
              <div class="row gy-4">



                <div class="col-lg-12">
                  <h4>Your Personal Details</h4>
                </div>



                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" required>
                </div>

                <div class="col-md-12">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>



                <div class="col-md-12 text-center">

                  <button type="submit" name="btn-sbt">login</button>

                    <p class="mt-3">Not registered yet? <a href="/register">Register here</a></p>

                 <!-- <li><a href="register.html">Home</a></li>  -->

                </div>


              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

      <div class="container">
          <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                  <a href="index.html" class="logo d-flex align-items-center">
                      <span>Helper</span>
                  </a>
                  <p>Providing expert solutions for your home and garden needs, including reliable delivery services.</p>
                  <div class="social-links d-flex mt-4">
                      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
              </div>

              <div class="col-lg-2 col-6 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                      <li><a href="/">Home</a></li>
                  </ul>
              </div>

              <div class="col-lg-2 col-6 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                      <li><a href="#">Bricolage</a></li>
                      <li><a href="#">Gardening</a></li>
                      <li><a href="#">Delivery</a></li>
                  </ul>
              </div>

              <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                  <h4>Contact Us</h4>
                  <p>
                      ENSATE <br>
                      Tétouan, 35022<br>
                      Morocco <br><br>
                      <strong>Phone:</strong> +212 780 456 896<br>
                      <strong>Email:</strong> contact@helper.com<br>
                  </p>
              </div>

          </div>
      </div>

      <div class="container mt-4">
          <div class="copyright">
              <strong><span>Helper</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
      </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="{{ asset('accueil/Helper/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/aos/aos.js') }}"></script>
 <!-- <script src="{{ asset('accueil/Helper/assets/vendor/php-email-form/validate.js') }}"></script> -->

  <!-- Template Main JS File -->
  <script src="{{ asset('accueil/Helper/assets/js/main.js') }}"></script>
</body>

</html>
