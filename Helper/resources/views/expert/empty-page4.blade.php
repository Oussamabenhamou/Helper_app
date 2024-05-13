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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Demandes</a></li>
					</ol>
                </div>
            <!-- row -->
            <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-header">
                        @if (!$demandes->isEmpty())
<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Service ID</th>
            <th>Client Name</th>
            <th>Client Email</th>
            <th>client phone</th>
            <th>ID Expert</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($demandes as $demande)
<tr>
    <td>{{ $demande->id }}</td>
    <td>{{ $demande->service_id }}</td>
    <td>{{ $demande->client->nom }} {{ $demande->client->prenom }}</td>
    <td>{{ $demande->client->email }}</td>
    <td>{{ $demande->client->telephone }}</td>
    <td>{{ $demande->user_id_partenaire }}</td>
    <td>{{ $demande->created_at->format('d/m/Y H:i') }}</td>
    <td>{{ $demande->updated_at->format('d/m/Y H:i') }}</td>
    <td>
        <span class="badge {{ $demande->statut == 'acceptée' ? 'bg-success' : ($demande->statut == 'refusée' ? 'bg-danger' : 'bg-secondary') }}">
            {{ $demande->statut }}
        </span>
    </td>
    <td>
        <form action="{{ route('demande.finalize', $demande->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Method spoofing to handle PUT request -->
            <button type="submit" class="btn btn-primary">Finalize</button>
        </form>
    </td>
</tr>
@endforeach
    </tbody>
</table>
@else
<p>Aucune demande trouvée.</p>
@endif




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