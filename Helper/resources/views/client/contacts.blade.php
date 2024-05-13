@php
use App\Models\CommentNoteClient;
	$averageRating = CommentNoteClient::where('user_id_client', session('client')['id'])->avg('rating');
	$averageRating = round($averageRating, 1);
	// as a porcentage of 100
	$ration = ($averageRating/5)*100;
@endphp
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
	<title>Fillow Saas Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
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
            <!-- row -->
			<div class="container-fluid">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="input-group contacts-search mb-4">
						<h2 class="fs-18 font-w600 my-1"><a href="/test1" class="text-black user-name" data-name="Alan Green">Listes Des Experts</a></h2>
						
						
					</div>
					<div class="mb-4">
						<a href="javascript:void(0);" class="btn btn-primary btn-rounded fs-18">Back</a>
					</div>
				</div>	
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							@foreach($experts as $expert)
							<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
														<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
														<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">report</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											@if(session('client')['image'] == null)
												<img src="{{ asset('client/img/default.png')}}" alt="" class="rounded-circle">
											@else
												<img src="{{ asset('expert/img/' . ($expert->image )) }}" alt="" class="rounded-circle">
											@endif
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h6 class="fs-18 font-w600 my-1"><a href="/test1" class="text-black user-name" data-name="Alan Green">{{ $expert->nom }} {{ $expert->prenom }}</a></h6>
											<!-- Check if entreprise exists, if not, display a static value -->
											<p class="fs-14 mb-1 user-work" data-occupation="UI Designer">Adresse<span class="text-dark">{{ $expert->adresse }}</span></p>
											<p class="fs-12 mb-1 text-muted">City: <span class="text-dark">{{ $expert->ville }}</span></p>
											<!-- Check if any other field exists, if not, display a static value -->
											<p class="fs-12 mb-1 text-muted">Expertise: <span class="text-dark">{{ $expert->service_name ?? 'Expertise Not Available' }}</span></p>
											<p class="fs-12 mb-1 text-muted">Price: <span class="text-dark">{{ $expert->prix ?? 'Prix non specifie' }}</span></p>

											<p class="fs-12 mb-3 text-muted">Rating: 
												<span class="text-warning">
													@if(isset($expert->rating) && $expert->rating >= 0 && $expert->rating <= 5)
														@php
															$ratingStars = str_repeat('★', $expert->rating);
														@endphp
														{{ $ratingStars }}
													@else
														no rating
													@endif
												</span>
												<span>({{$expert->rating}})</span>
											</p>
											
											<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Description: {{ $expert->service_description ?? 'Description Not Available' }}</p>
											<ul class="list-inline">
												<li class="list-inline-item"><a href="/partenaireProfile/{{ $expert->id }} "><i class="fas fa-info-circle"></i></a></li>
												<li class="list-inline-item"><a href="#" class="demandButton" data-expert-id="{{ $expert->id }}" data-service-id="{{ $expert->service_id }}"><i class="fas fa-envelope"></i></a></li>

											</ul>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				

							
							
							
					<!--<div class="progect-pagination d-flex justify-content-between align-items-center flex-wrap mt-3">
						<ul class="pagination mb-3">
							<li class="page-item page-indicator">
								<a class="page-link" href="javascript:void(0)">
									<i class="fas fa-angle-double-left me-2"></i>Previous</a>
							</li>
							<li class="page-item">
								<a class=" active" href="javascript:void(0)">1</a>
								<a class="" href="javascript:void(0)">2</a>
								<a class="" href="javascript:void(0)">3</a>
								<a class="" href="javascript:void(0)">4</a>
							</li>
							<li class="page-item page-indicator">
								<a class="page-link" href="javascript:void(0)">
								Next<i class="fas fa-angle-double-right ms-2"></i></a>
							</li>
						</ul>
					</div>
				</div>	
            </div>
        </div>
		-->
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
	<script>
		// Add an event listener to all elements with the class "demandButton"
		document.querySelectorAll('.demandButton').forEach(function(button) {
			button.addEventListener('click', function() {
				// Retrieve the expert ID and service ID associated with the clicked button
				var expertId = button.getAttribute('data-expert-id');
				var serviceId = button.getAttribute('data-service-id');
				
				// Prompt the user for confirmation
				var confirmation = confirm("Are you sure you want to send a demand to Expert IDghhh: " + expertId + "?"+serviceId);
				
				// If user confirms, send an AJAX request
				if (confirmation) {
					sendDemand(expertId, serviceId);
				}
			});
		});
	
		// Function to send an AJAX request to insert a record into the demandes table
		// Function to send an AJAX request to insert a record into the demandes table
        function sendDemand(expertId, serviceId) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/store-demand');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        alert('Demand sent successfully ');
                    } else {
                        alert('Failed to send demand.');
                    }
                }
            };
        
            // Send the expert ID and service ID as data
            xhr.send('expert_id=' + encodeURIComponent(expertId) + '&service_id=' + encodeURIComponent(serviceId));
        }
        
        
	</script>
	

</body>
</html>