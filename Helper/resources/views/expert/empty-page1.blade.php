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

    <link rel="shortcut icon" type="image/png" href="{{ asset('expert/images/favicon.png')}}">
    <link href="{{ asset('expert/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{ asset('expert/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('expert/vendor/nouislider/nouislider.min.css')}}">

    <!-- Style css -->
    <link href="{{ asset('expert/css/style.css')}}" rel="stylesheet">

    <!-- Select2 CSS (CDN for demonstration purposes) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
    .available { color: green; }
    .not-available { color: red; }
</style>
>

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
            <div class="row">

                <div class="card">


                <div class="container">
    <h2>Manage Your Availability</h2>

    @foreach ($services as $service)
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">Service: {{ $service->nom }}</h3>
            </div>
            <div class="card-body">
                @foreach ($service->disponibilites as $dispo)
                    <p>{{ $dispo->date }} : Matin - {{ $dispo->dispo_matin ? 'Oui' : 'Non' }}, Après-midi - {{ $dispo->dispo_midi ? 'Oui' : 'Non' }}</p>
                @endforeach

                <!-- Formulaire pour ajouter une nouvelle disponibilité -->
                <form method="POST" action="{{ route('disponibilites.store') }}">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <input type="date" name="date" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label><input type="checkbox" name="dispo_matin" value="1"> Morning</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="checkbox" name="dispo_midi" value="1"> Evening</label>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Add Availability</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
</div>

    </div>
        </div> </div> </div> </div> </div>
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
 <!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Include Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
$(document).ready(function() {
    var servicesByCategory = {
        'bricolage': ['Painting', 'Repair', 'Renovation', 'Assembly'],
        'jardinage': ['Mowing', 'Planting', 'Pruning', 'Landscape Design'],
        'livraison': ['Local Delivery', 'Long Distance Delivery', 'Express Shipping', 'Package Handling']
    };

    $('#category-select').change(function() {
        var category = $(this).val();
        var services = servicesByCategory[category] || [];
        var $servicesContainer = $('#services-checkboxes').empty();

        $.each(services, function(i, service) {
            $servicesContainer.append(
                `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="services[]" value="${service}" id="service${i}">
                    <label class="form-check-label" for="service${i}">
                        ${service}
                    </label>
                </div>`
            );
        });

        // Attach a change event listener to checkboxes to handle the limit
        $('input[type="checkbox"][name="services[]"]').change(function() {
            var checkedCount = $('input[type="checkbox"][name="services[]"]:checked').length;
            if (checkedCount >= 3) {
                // Disable all other checkboxes
                $('input[type="checkbox"][name="services[]"]').not(':checked').prop('disabled', true);
            } else {
                // Enable all checkboxes if the limit is not yet reached
                $('input[type="checkbox"][name="services[]"]').prop('disabled', false);
            }
        });
    });
});
</script>



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
