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
	<meta name="format-detection" content="telephone=no">
	<style>
		.profile-photo {
			width: 200px;  /* Set width */
			height: 200px; /* Set height */
			margin: 0 auto; /* Center the image horizontally */
		}
	
		.profile-photo img {
			width: 100%; /* Make the image fill its container */
			height: 100%; /* Make the image fill its container */
			object-fit: cover; /* Cover the entire area of the container */
			border-radius: 50%; /* Ensure rounded corners for a circle */
		}
	</style>
	<!-- PAGE TITLE HERE -->
	<title>PROFILE</title>

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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Expert</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
					</ol>
				</div>

				@if (session()->has('success'))
				<!-- Success Message -->
				<div class="succes">
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<p class="err"><i class="fa-solid fa-circle-check"></i>{{ session('success') }}</p>
					</div>
				</div>
				<script>
					// Hide the success message after 5 seconds
					setTimeout(function() {
						$('.alert').alert('close');
					}, 5000);
				</script>
				@endif


				<!-- row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="form-validation">
									<form action="/updateexpert" method="post" class="needs-validation"  enctype="multipart/form-data" novalidate>
										@csrf
										@method('PUT')
										<div class="row">
											<!-- Left Side with Profile Picture -->
											<div class="col-xl-6">
												<div class="col-xl-12 text-center mb-4">
													<div class="profile-photo">
														@if(session('expert')['image'] == null)
															<img src="{{ asset('client/img/default.png')}}" class="img-fluid rounded-circle" alt="">
														@else
															<img src="{{ asset('expert/img/'.session('expert')['image'])}}" class="img-fluid rounded-circle" alt="">
														@endif
													</div>
													<div class="mt-3">
														<label for="profileImage" class="btn btn-outline-primary btn-rounded px-5">Modifier
															<input type="file" id="profileImage" class="d-none" name="image" accept="image/*" onchange="updateProfilePicture(this)">
														</label>
													</div>
												</div>
											</div>
											<!-- Right Side with Form Fields -->
											<div class="col-xl-6">
												<div class="col-xl-12">
													<!-- nom Field -->
													<div class="mb-3 row">
														<label class="col-lg-4 col-form-label" for="nom">Name <span class="text-danger">*</span></label>
														<div class="col-lg-6">
															<input type="text" class="form-control" id="nom" name="nom" value="{{ session('expert')['nom'] }}" required>
															<div class="invalid-feedback">
																Please enter your name.
															</div>
														</div>
													</div>
													<!-- First Name Field -->
													<div class="mb-3 row">
														<label class="col-lg-4 col-form-label" for="prenom">First name <span class="text-danger">*</span></label>
														<div class="col-lg-6">
															<input type="text" class="form-control" id="prenom" name="prenom" value="{{ session('expert')['prenom'] }}" required>
															<div class="invalid-feedback">
																Please enter your first name.
															</div>
														</div>
													</div>
													<!-- adresse Field -->
													<div class="mb-3 row">
														<label class="col-lg-4 col-form-label" for="adresse">Adresse <span class="text-danger">*</span></label>
														<div class="col-lg-6">
															<input type="text" class="form-control" id="adresse" name="adresse" value="{{ session('expert')['adresse'] }}" required>
															<div class="invalid-feedback">
																Please enter your adresse.
															</div>
														</div>
													</div>
													<!-- Phone Number Field -->
													<div class="mb-3 row">
														<label class="col-lg-4 col-form-label" for="telephone">Phone number <span class="text-danger">*</span></label>
														<div class="col-lg-6">
															<input type="text" class="form-control" id="telephone" name="telephone" value="{{ session('expert')['telephone'] }}" placeholder="06 12 34 56 78" required>
															<div class="invalid-feedback">
																Please enter your phone number.
															</div>
														</div>
													</div>
													<!-- Email Field -->
													<div class="mb-3 row">
														<label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
														<div class="col-lg-6">
															<input type="email" class="form-control" id="email" name="email" value="{{ session('expert')['email'] }}" placeholder="example@email.com" required>
															<div class="invalid-feedback">
																Please enter a valid email address.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Submit Button Row -->
										<div class="row mt-4">
											<div class="col-12 text-center">
												<button type="submit" class="btn btn-primary btn-lg">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">update password</h4>
							</div>
							<div class="card-body">
								<div class="basic-form">
									<form action="/updatePasswordExpert" method="post" class="form-valide-with-icon needs-validation">
										@csrf
										<div class="mb-3">
											<label class="text-label form-label" for="password">Password *</label>
											<div class="input-group transparent-append">
												<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
												<input type="password" class="form-control" id="password" name="password" placeholder="Choose a safe one.." required>
												<span class="input-group-text show-pass">
													<i class="fa fa-eye-slash"></i>
													<i class="fa fa-eye"></i>
												</span>
												<div class="invalid-feedback">
													Please enter a password.
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label class="text-label form-label" for="password_confirmation">Repeat Password *</label>
											<div class="input-group transparent-append">
												<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
												<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repeat your password.." required>
												<span class="input-group-text show-pass">
													<i class="fa fa-eye-slash"></i>
													<i class="fa fa-eye"></i>
												</span>
												<div class="invalid-feedback">
													Repeat your password.
												</div>
											</div>
										</div>
										<button type="submit" class="btn me-2 btn-primary">Submit</button>
										<button type="button" class="btn btn-light">Cancel</button>
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
                <p></p>
            </div>
        </div>
		<script>
			function updateProfilePicture(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e) {
						$('.profile-photo img').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>
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
	<script src="{{ asset('expert/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('expert/js/custom.min.js')}}"></script>
	<script src="{{ asset('expert/js/dlabnav-init.js')}}"></script>
	<script src="{{ asset('expert/js/demo.js')}}"></script>
    <script src="{{ asset('expert/js/styleSwitcher.js')}}"></script>
</body>
</html>