<!DOCTYPE html>
<html lang="en">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .form-container {
        background-color: #ffffff;
        margin: 2rem auto;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 400px;
    }
    h2 {
        color: #333;
    }
    .button-group {
        text-align: center;
        margin-bottom: 1rem;
    }
    .form-button {
        padding: 10px 20px;
        margin: 0 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: #008CBA;
        color: white;
    }
    .form-button.active {
        background-color: #4CAF50;
    }
    form {
        display: none;
    }
    form.active {
        display: block;
    }
    label, input {
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 8px;
        font-size: 14px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>



<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Helper</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/" >Home</a></li>






                <li><a class="get-a-quote" href="/login">Login </a></li>
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
                        <h2>Register</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Register</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ... Existing HTML and links ... -->

    <!-- ======= Helper Registration Section ======= -->
    <!-- ======= Registration Section ======= -->
    <section id="registration" class="get-a-quote">
        <div class="page-link">
        <div class="button-group">
            <button type="button" class="form-button  active" onclick="toggleForm('client')">Client Registration</button>
            <button type="button" class="form-button" onclick="toggleForm('expert')">Expert Registration</button>
        </div>
        <div class="container" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-5 quote-bg" style="background-image: url({{asset('client/img/login1.png')}});">
                </div>
                <div class="col-lg-7">


                    <form action="/registerclient" method="POST" class="php-email-form active" id="client-form" >
                        @csrf
                    <h3>Client</h3>
 @if ($errors->any())

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

@endif

                        <div class="row gy-4">

                            <div class="col-lg-12">
                                <h4>Your Account Details</h4>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{old('firstname')}}" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{old('lastname')}}" required>
                            </div>

                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" placeholder="Email"  value="{{old('email')}}" required>
                            </div>

                            <div class="col-md-12">
                                <input type="tel" class="form-control" name="tel" placeholder="Phone number"  value="{{old('tel')}}" required>
                            </div>


                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>





                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                             <div class="error-message"></div>

                                <div class="sent-message">   dhfze dzd cdggds sdtfstd sdsihds </div>




                                <button type="submit">Register</button>
                            </div>

                        </div>
                    </form>


        <form action="/registerpartenaire" method="POST" class="php-email-form" id="expert-form">

        @csrf
    <h3>Expert Registration</h3>

    @if ($errors->any())

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

@endif
    <div class="row gy-4">
        <div class="col-lg-12">
            <h4>Your Account Details</h4>
        </div>

        <div class="col-md-6">
            <input type="text" name="nom" class="form-control" placeholder="First Name" value="{{old('nom')}}" required>
        </div>

        <div class="col-md-6">
            <input type="text" name="prenom" class="form-control" placeholder="Last Name" value="{{old('prenom')}}" required>
        </div>

        <div class="col-md-12">
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" required>
        </div>

        <div class="col-md-12">
            <input type="tel" class="form-control" name="telephone" placeholder="Phone number" value="{{old('telephone')}}" required>
        </div>

        <div class="col-md-12">
            <input type="text" class="form-control" name="adresse" placeholder="Address"  value="{{old('adresse')}}" required>
        </div>

        <div class="col-md-12">
            <select class="form-control" name="ville" required>
                <option value="">Select City</option>
                <option value="Tangier" {{ old('ville') == 'Tangier' ? 'selected' : '' }}>Tangier</option>
                <option value="Tetouan" {{ old('ville') == 'Tetouan' ? 'selected' : '' }}>Tetouan</option>
            </select>
        </div>

        <div class="col-md-12">
            <select name="categorie_id" class="form-control"  required >
    <option value="" disabled >Select a Category</option>
    <option value="1">Bricolage</option>
    <option value="2">Jardinage</option>
    <option value="3">Livraison</option>
            </select>
        </div>

        <div class="col-md-12">


    </div>
        <div class="col-md-12">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit">Register</button>
        </div>
    </div>
</form>
                </div><!-- End Registration Form -->

            </div>

        </div>
    </section>          <!-- End Registration Section -->
    <!-- End Helper Registration Section -->

    <!-- ... Existing HTML and scripts ... -->

    <script>
        function toggleForm(role) {
            var clientForm = document.getElementById('client-form');
            var expertForm = document.getElementById('expert-form');
            var clientButton = document.querySelector('.form-button:nth-child(1)');
            var expertButton = document.querySelector('.form-button:nth-child(2)');

            if (role === 'client') {
                clientForm.classList.add('active');
                expertForm.classList.remove('active');
                clientButton.classList.add('active');
                expertButton.classList.remove('active');
            } else {
                expertForm.classList.add('active');
                clientForm.classList.remove('active');
                expertButton.classList.add('active');
                clientButton.classList.remove('active');
            }
        }
    </script>


    <!-- End Get a Quote Section -->

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
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('accueil/Helper/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/aos/aos.js') }}"></script>
<!--  <script src="{{ asset('accueil/Helper/assets/vendor/php-email-form/validate.js') }}"></script> -->

  <!-- Template Main JS File -->
  <script src="{{ asset('accueil/Helper/assets/js/main.js') }}"></script>

</body>

</html>
