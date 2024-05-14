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
            <li class="breadcrumb-item"><a href="javascript:void(0)">GESTION DES SERVICES</a></li>
        </ol>
    </div>
        <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-10">
            <div class="card border-0 pb-0">
        <div class="card-header border-0 pb-0">
            <h4 class="card-title"></h4>
        </div>
        <div class="card-body">


        <div class="container-fluid">

        <div class="row">
    <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-10">
        <div class="card border-0 pb-0">
            <div class="card-header border-0 pb-0">
               
            </div>
            <div class="card-body">
                <h2 style="text-align: center;">Your Services</h2>
                <div class="list-group">
                @foreach($userServices as $service)
    <div class="list-group-item">
        <h4 class="list-group-item-heading">{{ $service->nom }}</h4>
        <p class="list-group-item-text">{{ $service->id }}</p>

        <!-- Formulaire de mise à jour -->
        <form method="POST" action="{{ route('services.update', $service->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Service Name:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $service->nom }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control description-input" id="description" name="description">{{ $service->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="prix">Price:</label>
                <input type="text" class="form-control" id="prix" name="prix" value="{{ $service->prix }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <!-- Formulaire de suppression -->
        <form method="POST" action="{{ route('services.destroy', $service->id) }}" class="mt-3">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endforeach

                </div>

                @if($remainingServices > 0)
                <h2>Add Your Service</h2>
                <form method="POST" action="{{ route('services.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Service Name:</label>
                        <select id="nom" name="nom" class="form-control" required>
                            @foreach($options as $option)
                            <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="prix">Price:</label>
                        <input type="text" class="form-control" id="prix" name="prix" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @else
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Attention !</strong> you have reached the limit of services provided.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                @endif
            </div>
        </div>
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
