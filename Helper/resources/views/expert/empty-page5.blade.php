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
	<link rel="shortcut icon" type="image/png" href="{{ asset('expert/images/favicon.png')}}">
	<link href="{{ asset('expert/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{ asset('expert/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('expert/vendor/nouislider/nouislider.min.css')}}">

	<!-- Style css -->
    <link href="{{ asset('expert/css/style.css')}}" rel="stylesheet">
</head>
<body>

<!--*******************
    Preloader start
********************-->

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
    <a href="{{ url('/dashboard') }}" class="brand-logo">
        <svg width="55" height="55" viewbox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <linearGradient id="hGradient" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:rgb(255,0,255);stop-opacity:1" />
            <stop offset="100%" style="stop-color:rgb(255, 153, 255);stop-opacity:1" />
        </linearGradient>
    </defs>
    <path d="M15,5 L15,50 M15,27.5 L40,27.5 M40,5 L40,50" stroke="url(#hGradient)" stroke-width="8" fill="none"/>
</svg>

			<div class="brand-title">
				<h2 class="">HELPER</h2>
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
        Chat box start
    ***********************************-->

	<!--**********************************
        Chat box End
    ***********************************-->

	<!--**********************************
        Header start
    ***********************************-->
	@include('expert.partials.header')
	<!--**********************************
        Header end ti-comment-alt
    ***********************************-->

	<!--**********************************
        Sidebar start
    ***********************************-->
	@include('expert.partials.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		<!--**********************************
            Content body start
        ***********************************-->


        <div class="content-body">
        <div class="container-fluid">
        <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">EXPERT</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">COMMENTS</a></li>
					</ol>
                </div>
        <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-10">
            <div class="card border-0 pb-0">
        <div class="card-header border-0 pb-0">
            <h4 class="card-title">Comments </h4>
        </div>
        <div class="card-body">
            <div id="DZ_W_Todo2" class="widget-media dlab-scroll height370">
                <ul class="timeline">
                    @foreach($comments as $comment)
                    <li>
                        <div class="timeline-panel">
                            <div class="media me-2">
                                <img alt="image" width="50" src="{{ $comment->client->nom }} "> <!-- Modify or use dynamic source if needed -->
                            </div>
                            <div class="media-body">
                            <h4 class="mb-1" style="color: #4285F4;" >{{ $comment->client->nom }} {{ $comment->client->prenom}}</h4> <!-- Assuming 'comment' is the field name -->

                                <h5 class="mb-1">{{ $comment->comment }}</h5> <!-- Assuming 'comment' is the field name -->
                                <small class="d-block">{{ $comment->date }}</small> <!-- Display date directly from database -->
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                        </g>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
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
            <p>Copyright © Helper 2024</p>
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
    <script src="{{ asset('expert/vendor/global/global.min.js')}}"></script>
<script src="{{ asset('expert/vendor/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('expert/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

<!-- Apex Chart -->
<script src="{{ asset('expert/vendor/apexchart/apexchart.js')}}"></script>

<!-- Additional scripts -->
<script src="{{ asset('expert/vendor/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('expert/vendor/peity/jquery.peity.min.js')}}"></script>

<!-- Dashboard script -->
<script src="{{ asset('expert/js/dashboard/dashboard-1.js')}}"></script>

<!-- Carousel -->
<script src="{{ asset('expert/vendor/owl-carousel/owl.carousel.js')}}"></script>

<!-- Custom scripts -->
<script src="{{ asset('expert/js/custom.min.js')}}"></script>
<script src="{{ asset('expert/js/dlabnav-init.js')}}"></script>
<script src="{{ asset('expert/js/demo.js')}}"></script>
<script src="{{ asset('expert/js/styleSwitcher.js')}}"></script>
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