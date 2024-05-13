
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
	<title>Admin Dashboard</title>
	
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row page-titles">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="javascript:void(0)">Client</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Comments</a></li>
                            </ol>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div>
                                        <h4 class="fs-20 font-w700">Review Needed</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Service Provider</th>
                                                <th>Service</th>
                                                <th>Intervention Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Loop through interventions -->
                                            @foreach($interventionsWithoutComment as $intervention)
                                            <tr>
                                                <td>{{ $intervention->user_nom . " " . $intervention->user_prenom }}</td>
                                                <td>{{  $intervention->service_nom }}</td>
                                                <td>{{ $intervention->date }}</td>
                                                <td>
                                                    <a type="button" class="btn btn-primary add-comment-btn" href="/partenaireProfile/{{$intervention->partenaire_id}}">
                                                        Add Comment
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <!-- Pagination links -->
                                            {{-- {{ $interventionsWithoutComment->links() }} --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{ asset('client/vendor/global/global.min.js')}}"></script>
	<script src="{{ asset('client/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('client/js/custom.min.js')}}"></script>
	<script src="{{ asset('client/js/dlabnav-init.js')}}"></script>
	<script src="{{ asset('client/js/demo.js')}}"></script>
    <script src="{{ asset('client/js/styleSwitcher.js')}}"></script>        
</body>
</html>