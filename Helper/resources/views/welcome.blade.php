<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
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

      <a href = "/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Helper</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="/index" class="active" >Home</a></li>


            <li><a class="get-a-quote" href="/login">Login </a></li>

                <li><a class="get-a-quote" href="/register">Register </a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Reliable services At Your Fingertips </h2>
          <p data-aos="fade-up" data-aos-delay="100">Experience the convenience of professional home services right at your fingertips with HomeHelper. Our comprehensive platform connects you with trusted local experts ready to tackle all your home needs </p>

          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="ZIP code or CitY">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $clientCount }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $demandCount }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Reservations</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $expertCount }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Experts</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                <p>Services</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="{{ asset('accueil/Helper/assets/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

      <!-- ======= Featured Services Section ======= -->
      <section id="featured-services" class="featured-services">
          <div class="container">

              <div class="row gy-4">

                  <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                      <div class="icon flex-shrink-0"><i class="fa-solid fa-wrench"></i></div>
                      <div>
                          <h4 class="title">Professional Bricolage Services</h4>
                          <p class="description">From minor repairs to major home renovations, our skilled handymen are equipped to handle all your bricolage needs efficiently and with high-quality results.</p>
                          <a href="/login" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                      </div>
                  </div><!-- End Service Item -->

                  <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                      <div class="icon flex-shrink-0"><i class="fa-solid fa-seedling"></i></div>
                      <div>
                          <h4 class="title">Expert Gardening Solutions</h4>
                          <p class="description">Our gardening services offer everything from routine maintenance to complete garden makeovers, ensuring your green space is always at its best.</p>
                          <a href="/login" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                      </div>
                  </div><!-- End Service Item -->

                  <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                      <div>
                          <h4 class="title">Reliable Delivery Services</h4>
                          <p class="description">Whether it's parcel delivery or large-scale moving services, our reliable and timely delivery solutions ensure your items reach their destination safely.</p>
                          <a href="/login" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                      </div>
                  </div><!-- End Service Item -->

              </div>
          </div>
      </section><!-- End Featured Services Section -->
      <!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="{{ asset('accueil/Helper/assets/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0" alt="">

          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p>
              Helper is dedicated to connecting clients with skilled professionals in various home service sectors. Our mission is to simplify the process of finding reliable experts for your home needs.            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5> Our Mission</h5>
                  <p>At Helper, our mission is to provide efficient and high-quality home services while ensuring customer satisfaction. We aim to create a seamless experience for both clients and partners.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Our Value</h5>
                  <p>At Helper, we uphold values of integrity, transparency, and excellence in service delivery. We prioritize customer satisfaction and strive for continuous improvement.</p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->





      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
          <div class="container">

              <div class="slides-1 swiper" data-aos="fade-up">
                  <div class="swiper-wrapper">

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <img src="{{ asset('accueil/Helper/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                              <h3>Amelia Banks</h3>
                              <h4>Garden Enthusiast</h4>
                              <div class="stars">
                                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                              </div>
                              <p>
                                  <i class="bi bi-quote quote-icon-left"></i>
                                  The team transformed our backyard into a beautiful garden oasis. The attention to detail and the passion for their work were evident. I highly recommend their gardening services to anyone looking to enhance their outdoor space!
                                  <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <img src="{{ asset('accueil/Helper/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                              <h3>Lucas Martin</h3>
                              <h4>Homeowner</h4>
                              <div class="stars">
                                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                              </div>
                              <p>
                                  <i class="bi bi-quote quote-icon-left"></i>
                                  I used their bricolage services to fix multiple issues around my house, including plumbing and carpentry. The expert was punctual, professional, and very skilled. Everything was done perfectly on the first visit.
                                  <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <img src="{{ asset('accueil/Helper/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                              <h3>Sophia Clark</h3>
                              <h4>Business Owner</h4>
                              <div class="stars">
                                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                              </div>
                              <p>
                                  <i class="bi bi-quote quote-icon-left"></i>
                                  Our business regularly requires urgent delivery services and this platform has never let us down. Timely, reliable, and with excellent communication throughout the process. They truly understand the meaning of urgent!
                                  <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <img src="{{ asset('accueil/Helper/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                              <h3>Ethan Jones</h3>
                              <h4>Interior Designer</h4>
                              <div class="stars">
                                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                              </div>
                              <p>
                                  <i class="bi bi-quote quote-icon-left"></i>
                                  I regularly collaborate with experts from this platform for renovations. Their innovative approach and commitment to quality have greatly contributed to the success of my projects.
                                  <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <img src="{{ asset('accueil/Helper/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                              <h3>Grace Lee</h3>
                              <h4>Freelancer</h4>
                              <div class="stars">
                                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                              </div>
                              <p>
                                  <i class="bi bi-quote quote-icon-left"></i>
                                  The ease and convenience of booking a delivery service through this website have made it my go-to solution for sending packages. The detailed tracking and timely updates are just fantastic!
                                  <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                          </div>
                      </div><!-- End testimonial item -->

                  </div>
                  <div class="swiper-pagination"></div>
              </div>

          </div>
      </section><!-- End Testimonials Section -->

      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
          <div class="container" data-aos="fade-up">
              <div class="section-header">
                  <span>Frequently Asked Questions</span>
                  <h2>Frequently Asked Questions</h2>
              </div>
              <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-lg-10">
                      <div class="accordion accordion-flush" id="faqlist">
                          <div class="accordion-item">
                              <h3 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                      <i class="bi bi-question-circle question-icon"></i>
                                      How do I book a service on your website?
                                  </button>
                              </h3>
                              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                  <div class="accordion-body">
                                      To book a service, simply select the category you need help with (bricolage, gardening, or delivery), choose the specific service, and fill out the service request form. Once submitted, an expert will be in touch to confirm details and schedule the service.
                                  </div>
                              </div>
                          </div><!-- # Faq item-->

                          <div class="accordion-item">
                              <h3 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                      <i class="bi bi-question-circle question-icon"></i>
                                      What are your rates for delivery services?
                                  </button>
                              </h3>
                              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                  <div class="accordion-body">
                                      Our delivery rates depend on the size and weight of the package, as well as the distance to be covered. You can get an estimated cost by using the quote tool on our website or by contacting us directly for more details.
                                  </div>
                              </div>
                          </div><!-- # Faq item-->

                          <div class="accordion-item">
                              <h3 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                      <i class="bi bi-question-circle question-icon"></i>
                                      Are your experts qualified?
                                  </button>
                              </h3>
                              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                  <div class="accordion-body">
                                      Yes, all our experts are vetted and must meet strict qualifications. They have considerable experience and hold relevant certifications in their fields, ensuring quality and reliability in the services they provide.
                                  </div>
                              </div>
                          </div><!-- # Faq item-->

                          <div class="accordion-item">
                              <h3 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                      <i class="bi bi-question-circle question-icon"></i>
                                      What if I am not satisfied with the service?
                                  </button>
                              </h3>
                              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                  <div class="accordion-body">
                                      If you are not satisfied with the service, please contact us within 24 hours of the service completion. We offer a satisfaction guarantee and will work to resolve your issue, whether that means a refund or re-scheduling another expert to ensure your satisfaction.
                                  </div>
                              </div>
                          </div><!-- # Faq item-->

                          <div class="accordion-item">
                              <h3 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                      <i class="bi bi-question-circle question-icon"></i>
                                      How do I cancel a booked service?
                                  </button>
                              </h3>
                              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                  <div class="accordion-body">
                                      To cancel a booked service, please contact our support team or use the cancellation link provided in your service confirmation email. Please note that cancellations must be made at least 24 hours before the scheduled service time to avoid a cancellation fee.
                                  </div>
                              </div>
                          </div><!-- # Faq item-->

                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Frequently Asked Questions Section -->

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
  <script src="{{ asset('accueil/Helper/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('accueil/Helper/assets/js/main.js') }}"></script>

</body>

</html>
