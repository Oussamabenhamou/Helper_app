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
	<meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('client/images/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/star-rating/star-rating-svg.css')}}">
	<link rel="shortcut icon" type="image/png" href="{{ asset('client/images/favicon.png')}}">
	<link href="{{ asset('client/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{ asset('client/css/style.css')}}" rel="stylesheet">
	<style>
	.small-image {
		width: 400px;  /* Adjust width as needed */
		height: auto;  /* Keeps the aspect ratio */
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
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Layout</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Blank</a></li>
					</ol>
                </div>
                <div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-3 col-lg-6 col-md-6 col-xxl-5">
										<!-- Expert image -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane fade show active" id="first">
												<img class="img-fluid small-image" src="{{ asset('client/images/pic4.jpg')}}" alt="Expert Image">
											</div>
										</div>
									</div>
									<div class="col-xl-9 col-lg-6 col-md-6 col-xxl-7 col-sm-12">
										<div class="expert-detail-content">
											<!-- Expert details -->
											<div class="expert-info pr">
												<h4>Davis Siphron</h4>
												<div class="comment-review star-rating">
													<ul>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
													</ul>
													<span class="review-text">(34 reviews) / </span><a class="expert-review" href="" data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
												</div>
												<div class="d-table mb-2">
													<p class="price float-start d-block">$50.00/hr</p> <!-- Hourly rate -->
												</div>
												<p>Availability: <span class="item">Monday to Saturday <i class="fa fa-calendar-check"></i></span></p>
												<p>Expertise: <span class="item">Home Repairs, Plumbing</span></p>
												<p>Experience: <span class="item">10+ years</span></p>
												<p>Services Offered: <span class="item">Home repair, Plumbing, Electrical services</span></p>
												<p class="text-content">Davis Siphron is a highly skilled expert with over 10 years of experience in home repairs and plumbing services. He offers a wide range of services including home repair, plumbing, and electrical services. With his expertise and dedication, Davis ensures top-notch service quality and customer satisfaction.</p>
												<div class="d-flex align-items-end flex-wrap mt-4">
													<!-- Contact button -->
													
													<!-- Book now button -->
													<div class="book-expert mb-2 me-3">
														<a class="btn btn-success" href="javascript:void();"><i class="fa fa-calendar-plus me-2"></i>Book Now</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
	F			<!-- review -->
					<div class="modal fade" id="reviewModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Review</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal">
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="text-center mb-4">
											<img class="img-fluid rounded" width="78" src="images/avatar/1.jpg" alt="DexignZone">
										</div>
										<div class="mb-3">
											<div class="rating-widget mb-4 text-center">
												<!-- Rating Stars Box -->
												<div class="rating-stars">
													<ul id="stars">
														<li class="star" title="Poor" data-value="1">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Fair" data-value="2">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Good" data-value="3">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Excellent" data-value="4">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="WOW!!!" data-value="5">
															<i class="fa fa-star fa-fw"></i>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
										</div>
										<button class="btn btn-success btn-block">RATE</button>
									</form>
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
	<script src="{{ asset('client/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{ asset('client/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('client/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{ asset('client/vendor/lightgallery/js/lightgallery-all.min.js')}}"></script>
    <script src="{{ asset('client/js/custom.min.js')}}"></script>
	<script src="{{ asset('client/js/dlabnav-init.js')}}"></script>
	<script src="{{ asset('client/js/demo.js')}}"></script>
    <script src="{{ asset('client/js/styleSwitcher.js')}}"></script>
</body>
</html>