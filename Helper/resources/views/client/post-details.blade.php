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
	<style>
		.rating {
			display: inline-block;
		}
		
		.rating input[type="radio"] {
			display: none;
		}
		
		.rating label {
			cursor: pointer;
			font-size: 24px;
			color: #aaa;
			transition: color 0.3s;
		}
		
		.rating label:hover,
		.rating input[type="radio"]:checked ~ label {
			color: gold;
		}
		
	</style>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('client/images/favicon.png')}}">
	<link href="{{ asset('client/vendor/lightgallery/css/lightgallery.min.css')}}" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="{{ asset('client/images/favicon.png')}}">
	<link href="{{ asset('client/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Advanced</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Post Details</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo rounded"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="{{ asset('client/images/profile/profile.png')}}" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">Soeng Souy</h4>
											<p>Jardinnier</p>
										</div>
										
										<div class="dropdown ms-auto">
											<a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
											<ul class="dropdown-menu dropdown-menu-end">
												<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
												<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
												<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
												<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
											</ul>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				

                <div class="row">
                    <div class="col-xl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-statistics">
												
											<!-- Modal -->
											<div class="modal fade" id="sendMessageModal">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Send Message</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
														</div>
														<div class="modal-body">
															<form class="comment-form">
																<div class="row"> 
																	<div class="col-lg-6">
																		<div class="mb-3">
																			<label class="text-black font-w600 form-label">Name <span class="required">*</span></label>
																			<input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="mb-3">
																			<label class="text-black font-w600 form-label">Email <span class="required">*</span></label>
																			<input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="mb-3">
																			<label class="text-black font-w600 form-label">Comment</label>
																			<textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="mb-3 mb-0">
																			<input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">

							</div>
							<div class="col-xl-12">
								<div class="card">
									
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-news">
											<h5 class="text-primary d-inline">My latest Project</h5>
											<div class="media pt-3 pb-3">
												<img src="{{ asset('client/images/profile/5.jpg')}}" alt="image" class="me-3 rounded" width="75">
												<div class="media-body">
													<h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
													<p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
												</div>
											</div>
											<div class="media pt-3 pb-3">
												<img src="{{ asset('client/images/profile/6.jpg')}}" alt="image" class="me-3 rounded" width="75">
												<div class="media-body">
													<h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
													<p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
												</div>
											</div>
											<div class="media pt-3 pb-3">
												<img src="{{ asset('client/images/profile/7.jpg')}}" alt="image" class="me-3 rounded" width="75">
												<div class="media-body">
													<h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
													<p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
								<div class="post-details">
									<h3 class="mb-2 text-black">Collection of textile samples lay spread</h3>
									<ul class="mb-4 post-meta d-flex flex-wrap">
										<li class="post-author me-3">By Admin</li>
										<li class="post-date me-3"><i class="far fa-calendar-plus me-2"></i>18 Nov 2020</li>
										<li class="post-comment"><i class="far fa-comment me-2"></i>28</li>
									</ul>
									<img src="images/profile/8.jpg" alt="" class="img-fluid mb-3 w-100 rounded">
									<p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.</p>
									<p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
									<blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimencenturies.</blockquote>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
									<div class="profile-skills mt-5 mb-5">
										<h4 class="text-primary mb-2">Skills</h4>
										<a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Admin</a>
										<a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
										<a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
										<a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
										<a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Responsive</a>
										<a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Crypto</a>
									</div>
									<div class="comment-respond" id="respond">
										<h4 class="comment-reply-title text-primary mb-3" id="reply-title">Leave a Reply </h4>
										<form class="comment-form" id="commentform" method="post">
											<div class="row"> 
												<div class="col-lg-12">
													<div class="mb-3">
														<div class="rating">
															<input type="radio" id="star5" name="rating" value="5" />
															<label for="star5" title="5 stars">&#9733;</label>
															<input type="radio" id="star4" name="rating" value="4" />
															<label for="star4" title="4 stars">&#9733;</label>
															<input type="radio" id="star3" name="rating" value="3" />
															<label for="star3" title="3 stars">&#9733;</label>
															<input type="radio" id="star2" name="rating" value="2" />
															<label for="star2" title="2 stars">&#9733;</label>
															<input type="radio" id="star1" name="rating" value="1" />
															<label for="star1" title="1 star">&#9733;</label>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="comment" class="text-black font-w600 form-label">Comment</label>
														<textarea rows="8" class="form-control" name="comment" placeholder="Comment" id="comment"></textarea>
													</div>
												</div>
										
												<div class="col-lg-12">
													<div class="mb-3">
														<input type="submit" value="Post Comment" class="submit btn btn-primary" id="submit" name="submit">
													</div>
												</div>
											</div>
										</form>
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
	
	<!--removeIf(production)-->
        
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
		$('#lightgallery').lightGallery({
			thumbnail:true,
		});
	</script>
	
</body>
</html>