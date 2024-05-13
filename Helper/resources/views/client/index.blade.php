@php
$collection = ['k','p','o'];


$coupons = [
    (object)[
        'name' => 'SAVE5$',
        'description' => 'Get 5$ off on your next service',
        'discount' => '5$',
        'validity' => 'Expires on 2024-06-01',
    ],
    (object)[
		'name' => 'SAVE10$',
		'description' => 'Get 10$ off on your next service',
		'discount' => '10$',
		'validity' => 'Expires on 2024-06-01',
	],
	(object)[
		'name' => 'SAVE15$',
		'description' => 'Get 15$ off on your next service',
		'discount' => '15$',
		'validity' => 'Expires on 2024-06-01',
	],
];
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
	<style>
		.items {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.profile-k {
    display: flex;
    align-items: center; /* Align items vertically */
}

.bg-success {
    margin-right: 10px;
	margin-bottom: 10px; /* Adds spacing between "O" and the name */
}

.name {
    margin-left: 10px;
	font-family: Georgia, 'Times New Roman', Times, serif;
	font-size: 15px;
	
	font-weight: bold;
	 /* Adds spacing between "O" and the name */
}
</style>
	
	<!-- PAGE TITLE HERE -->
	<title>Client HOME</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('client/images/favicon.png')}}">
	<link href="{{ asset('client/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{ asset('client/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('client/vendor/nouislider/nouislider.min.css')}}">
	
	<!-- Style css -->
    <link href="{{ asset('client/css/style.css')}}" rel="stylesheet">
	
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
		<div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<!-- Card 1 -->
							<div class="col-xl-4">
								<div class="card tryal-gradient">
									<div class="card-body tryal row">
										<div class="col-xl-7 col-sm-6">
											<h2>Bricolage Services</h2>
											<span>Find skilled professionals for plumbing, electrical work, carpentry, and more.</span>
											<a href="/moredetails1" class="btn btn-rounded fs-18 font-w500">Explore Services</a>						
										</div>
										<div class="col-xl-5 col-sm-6">
											<img src="{{ asset('client/images/BricolageIcon.png')}}" alt="" class="sd-shape">
										</div>
									</div>
								</div>
							</div>
							<!-- Card 2 -->
							<div class="col-xl-4">
								<div class="card tryal-gradient">
									<div class="card-body tryal row">
										<div class="col-xl-7 col-sm-6">
											<h2>Gardening Services</h2>
											<span>Transform your outdoor space with expert gardening and landscaping services.</span>
											<a href="/moredetails2" class="btn btn-rounded fs-18 font-w500">Explore Services</a>
										</div>
										<div class="col-xl-5 col-sm-6">
											<img src="{{ asset('client/images/gardening.png')}}" alt="" class="sd-shape">
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4">
								<div class="card tryal-gradient">
									<div class="card-body tryal row">
										<div class="col-xl-7 col-sm-6">
											<h2>Delivery Services</h2>
											<span>Experience reliable and efficient delivery solutions for your packages and parcels.</span>
											<a href="/moredetails" class="btn btn-rounded fs-18 font-w500">Explore Delivery</a>
										</div>
										<div class="col-xl-5 col-sm-6">
											<img src="{{ asset('client/images/chart.png')}}" alt="" class="sd-shape">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12">
							<div class="card">
								<div class="card-header border-0">
									<div>
										<h4 class="fs-20 font-w700">Most In-Demand Services</h4>
									</div>
								</div>
							
								<div class="card-body px-500"> <!-- Changed px-0 to px-500 for padding -->
									<div class="owl-carousel card-slider">
										<div class="items text-center"> <!-- Added class text-center here -->
											<h4 class="fs-20 font-w500 mb-4">Plumbing Services</h4>
											<span class="fs-14 font-w400">Fixing leaks, repairing faucets, and clearing clogged drains for your plumbing needs.</span>
											<div class="d-flex justify-content-between align-items-center mt-3"> <!-- Added d-flex justify-content-between align-items-center for flex layout -->
												<a href="/moredetails" style="color: #6c4bae;">Learn More</a>
											</div>
										</div>
										<div class="items text-center">
											<h4 class="fs-20 font-w500 mb-4">Packages Delivery</h4>
											<span class="fs-14 font-w400">
												Fixing leaks, repairing faucets, and clearing clogged drains for your plumbing needs.
											</span>
											<div class="d-flex justify-content-between align-items-center mt-3">
												<!-- Added inline style for the color -->
												<a href="/moredetails" style="color: #6c4bae;">Learn More</a>
											</div>
										</div>
										<div class="items text-center"> <!-- Added class text-center here -->
											<h4 class="fs-20 font-w500 mb-4">Electrical repairs</h4>
											<span class="fs-14 font-w400">Fixing leaks, repairing faucets, and clearing clogged drains for your plumbing needs.</span>
											<div class="d-flex justify-content-between align-items-center mt-3"> <!-- Added d-flex justify-content-between align-items-center for flex layout -->
												<a href="/moredetails" style="color: #6c4bae;">Learn More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						

						<div class="row">
							<!-- First Card -->
							<div class="col-xl-6 mb-4">
								<div class="card h-100">
									<div class="card-header border-0">
										<div>
											<h4 class="fs-20 font-w700">Recent Demands</h4>
										</div>
										<div>
											<a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded fs-18">View More</a>
										</div>
									</div>
									<div class="card-body px-0">
										
										@foreach ($demands as $demand)
										<div class="d-flex justify-content-between recent-emails">
											<a class="d-flex" href="#">
												<div class="profile-k">
													<span class="bg-success">o</span> <!-- Display user image -->
												</div>
												<div class="ms-3">
													<h4 class="fs-18 font-w500">{{ $demand->service_name }}</h4> <!-- Display service name -->
													<span class="font-w400 d-block">Requested by: {{ $demand->prenom }} {{ $demand->nom }}</span> <!-- Display user's full name -->
													<span class="font-w400 d-block">Status: {{ $demand->statut }}</span> <!-- Display demand status -->
													<span class="font-w400 d-block">Date: {{ $demand->date }}</span> <!-- Display demand creation date -->
												</div>
											</a>
										</div>
										@endforeach
										
									</div>
								</div>
							</div>
						
		
							<!-- Second Card -->
							<div class="col-xl-6 mb-4">
								<div class="card h-100">
									<div class="card-body py-3">
										<div class="row">
											<div class="card">
												<div class="card-header border-0">
													<div>
														<h4 class="fs-20 font-w700">Recent Provider Feedback On Me</h4>
													</div>
													<div>
														<a href="/clientComments" class="btn btn-outline-primary btn-rounded fs-18">View More</a>
													</div>
												</div>
				
												@foreach ($comments as $item)
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box">
															<img src="{{ asset('client\images\\'.$item['image'])}}" alt="">
														</div>
														<div class="ms-3 w-100 ">
															<h4 class="fs-18 font-w600">{{ $item['name'] }}</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">{{ $item['comment'] }}</span>
															</div>
														</div>
													</div>
												</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="row">
							<!-- Coupon Section -->
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<div>
											<h4 class="fs-20 font-w700">Available Coupons</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											@foreach ($coupons as $coupon)
											<div class="col-md-4 mb-4">
												<div class="card h-100">
													<div class="card-body">
														<h5 class="card-title">{{ $coupon->name }}</h5>
														<p class="card-text">{{ $coupon->description }}</p>
														<p class="card-text">Discount: {{ $coupon->discount }}</p>
														<p class="card-text">Validity: {{ $coupon->validity }}</p>
														<a href="#" class="btn btn-primary">Apply Coupon</a>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		


		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp;2024</p>
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

</body>
</html>