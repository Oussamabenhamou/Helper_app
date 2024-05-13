@php


@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('client/images/favicon.png')}}">
	<link href="{{ asset('client/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{ asset('client/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('client/vendor/nouislider/nouislider.min.css')}}">
	
	<!-- Style css -->
    <link href="{{ asset('client/css/style.css')}}" rel="stylesheet">
    <style>


        .card-header-custom {
            background-color: #ffffff; /* Light background color for the title area */
            color: #a189e5; /* Deep blue color for text */
            font-weight: bold; /* Bold font for emphasis */
            border-bottom: 1px solid #a189e5; /* Subtle border for separation */
        }
        .card {
            border: 4px solid #00BFFF;
            color: #a189e5; /* Change this color to your preferred border color */
        }
        .step-indicator {
            display: flex;
            justify-content: left;
            margin-top: 20px;
        }
        .title {
            color: #4a338d; /* Deep blue color for text */
            font-weight: bold; /* Bold font for emphasis */
            text-align: center;
        }

        .step-circle {
            width: 60px;
            height: 60px;
            border-radius: 100%;
            background-color: #ccc; /* Default background color for inactive steps */
            line-height: 60px;
            text-align: center;
            color: white;
            font-weight: bold;
            margin-right: 30px;
        }

        .step-circle:last-child {
            margin-right: 0;
        }

        .step-active {
            background-color: #007BFF; /* Bootstrap primary color for active step */
        }


    </style>
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="index.html" class="brand-logo">
				<div class="brand-title">
					<h2 class="">Helper.</h2>
				</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->

		@include('client.partials.navbar')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
		 <!--**********************************
            Sidebar start
        ***********************************-->
		@include('client.partials.sidebar')
		 <!--**********************************
            Sidebar end
        ***********************************-->
		<!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body d-flex align-items-center justify-content-center" >
			<div class="container-fluid bg-white py-5">
            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm">
                    <h3 class=" title ">ADD YOUR DETAILS </h3>


                </div></div>

            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <!-- Sub-Category Select with Encased Title -->
                        <div class="card mb-3 card ">
                            <div class="card-header card-header-custom  background-color">Service :</div>
                            <div class="card-body">
							<select class="form-select" id="subCategorySelect">
										<option value="Package delivery">Painting</option>
										<option value="Grocery delivery">Carpentry</option>
										<option value="Furniture delivery">Electrical repairs</option>
										<option value="Courier delivery">Plumbing</option>
									</select>
								</div>
								<!-- Price Slider -->
								<div class="card mb-3">
                            <div class="card-header card-header-custom">Price Range:</div>
                            <div class="card-body">

									
									<div id="priceSlider"></div>
									<div id="priceRange" class="mt-2">350 - 1700</div>
								</div>
								</div
								<!-- City Input -->
								 <div class="card mb-3">
                            <div class="card-header card-header-custom">City:</div>
                            <div class="card-body">
									
									<select class="form-select" id="citySelect">
										<option value="Tetouan">Tetouan</option>
										<option value="Tangier">Tangier</option>
									</select>
								</div>
								</div>

								<!-- Date Input -->
								 <div class="card mb-3">
                            <div class="card-header card-header-custom">Date:</div>
                            <div class="card-body">
									
									<input type="date" class="form-control" id="dateInput">
								</div>
								</div>

								<!-- Time Select -->
								 <div class="card mb-3">
                            <div class="card-header card-header-custom">Time:</div>
                            <div class="card-body">
									
									<select class="form-select" id="timeSelect">
										<option value="morning">Morning</option>
										<option value="evening">Evening</option>
									</select>
								</div>
								</div>

								<!-- Sub-category Select -->
								
								<!-- Description -->
								 <div class="card mb-3">
                            <div class="card-header card-header-custom">Description:</div>
                            <div class="card-body">
									
									<textarea class="form-control" id="description" rows="5" style="height: 150px;"></textarea>
								</div>
								</div>
								<!-- View Images Button -->
								<div class="d-flex justify-content-end">
									<button type="button" class="btn btn-primary mb-3" onclick="storeAndRedirect()">Suivant</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			function storeAndRedirect() {
				// Get values from form fields
				var city = document.getElementById('citySelect').value;
				var date = document.getElementById('dateInput').value;
				var time = document.getElementById('timeSelect').value;
				var subCategory = document.getElementById('subCategorySelect').value;
				var description = document.getElementById('description').value;
		
				// Retrieve price range values from the slider
				var priceRangeText = document.getElementById('priceRange').textContent;
				var [minPrice, maxPrice] = priceRangeText.split(' - ');
		
				// Send data to server-side PHP script via AJAX
				var xhr = new XMLHttpRequest();
				var formData = new FormData();
				formData.append('minPrice', minPrice);
				formData.append('maxPrice', maxPrice);
				formData.append('city', city);
				formData.append('date', date);
				formData.append('time', time);
				formData.append('subCategory', subCategory);
				formData.append('description', description);
				xhr.open('POST', '/store-expert-data');
				xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}'); // CSRF protection in Laravel
				xhr.onreadystatechange = function() {
					if (xhr.readyState === XMLHttpRequest.DONE) {
						if (xhr.status === 200) {
							// Data stored successfully
							console.log(xhr.responseText);
							// Redirect to next page
							window.location.href = '/test2';
						} else {
							console.error('Failed to send data');
						}
					}
				};
				xhr.send(formData);
			}
		
		</script>
		
		
		
		
	
		<script>
			document.addEventListener('DOMContentLoaded', function () {
				// Initialize Price Slider
				var priceSlider = document.getElementById('priceSlider');
				var priceRange = document.getElementById('priceRange');
		
				noUiSlider.create(priceSlider, {
					start: [50, 500],
					connect: true,
					range: {
						'min': 50,
						'max': 2500
					}
				});
		
				// Display initial range
				priceSlider.noUiSlider.on('update', function (values, handle) {
					priceRange.textContent = values.join(' - ');
				});
		
				// Custom Nice Select
				$(document).ready(function() {
					$('select').niceSelect();
				});
			});
		</script>
		<!-- Image Modal -->
		
	
		<script>
			var now = new Date();
			var hour = now.getHours();
			var dateInput = document.getElementById("dateInput");
			var today = now.toISOString().split('T')[0];
			var tomorrow = new Date(now);
			tomorrow.setDate(now.getDate() + 1);
			var nextDay = tomorrow.toISOString().split('T')[0];
	
			if (hour < 1) {
				// It's before 4:00 PM, allow selection of today's date for both morning and evening
				dateInput.setAttribute("min", today);
			} else {
				// It's after 4:00 PM, allow selection of tomorrow's date for morning and today's date for evening
				dateInput.setAttribute("min", nextDay);
			}
		</script>


		
		
        <!--**********************************
            Content body end
        ***********************************-->
		


		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('client/vendor/global/global.min.js')}}"></script>
	<script src="{{ asset('client/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{ asset('client/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
	
	<!-- Apex Chart -->
	<script src="{{ asset('client/vendor/apexchart/apexchart.js')}}"></script>
	
	<script src="{{ asset('client/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	
	<!-- Chart piety plugin files -->
    <script src="{{ asset('client/vendor/peity/jquery.peity.min.js')}}"></script>
	<!-- Dashboard 1 -->
	<script src="{{ asset('client/js/dashboard/dashboard-1.js')}}"></script>
	
	<script src="{{ asset('client/vendor/owl-carousel/owl.carousel.js')}}"></script>
	
    <script src="{{ asset('client/js/custom.min.js')}}"></script>
	<script src="{{ asset('client/js/dlabnav-init.js')}}"></script>
	<script src="{{ asset('client/js/demo.js')}}"></script>
    <script src="{{ asset('client/js/styleSwitcher.js')}}"></script>
	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		
	</script>
    <script src="{{ asset('client/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('client/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('client/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('client/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('client/js/main.js') }}"></script>


</body>
</html>