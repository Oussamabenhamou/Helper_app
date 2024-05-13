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
	<link href="{{ asset('client/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{ asset('client/css/style.css')}}" rel="stylesheet">
	<style>
        /* Style for sub-service cards */
        .sub-service-card {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            margin: 10px;
            padding: 20px;
            cursor: pointer;
            width: 220px;
            transition: border-color 0.3s ease-in-out;
        }

        .sub-service-card:hover {
            border-color: #007bff;
        }

        .sub-service-title {
            font-size: 24px;
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin-bottom: 20px;
        }

        .service-container {
            font-family: 'Arial', sans-serif;
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
            Nav header start
        ***********************************-->
		@include('client.partials.navbar')
        <!--**********************************
            Nav header end
        ***********************************-->
		
	
		<!--**********************************
            Header start
        ***********************************-->

		@include('client.partials.sidebar')
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->


		
		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-5">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <div class="service-container">
                                            <h2 class="sub-service-title">Choose a Sous-Service</h2>
                                            <div class="d-flex flex-wrap justify-content-center">
                                                <div class="card sub-service-card mx-2" onclick="selectSubService('Sub-Service 1')">
                                                    <div class="card-body text-center">
                                                        Sub-Service 1
                                                    </div>
                                                </div>
                                                <div class="card sub-service-card mx-2" onclick="selectSubService('Sub-Service 2')">
                                                    <div class="card-body text-center">
                                                        Sub-Service 2
                                                    </div>
                                                </div>
                                                <div class="card sub-service-card mx-2" onclick="selectSubService('Sub-Service 3')">
                                                    <div class="card-body text-center">
                                                        Sub-Service 3
                                                    </div>
                                                </div>
                                                <div class="card sub-service-card mx-2" onclick="selectSubService('Sub-Service 4')">
                                                    <div class="card-body text-center">
                                                        Sub-Service 4
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Description Section -->
                                <div class="row mt-4" id="descriptionSection" style="display: none;">
                                    <div class="col-md-12">
                                        <div class="service-container">
                                            <h2 class="sub-service-title">Description of Your Choice</h2>
                                            <p class="text-center">Here you can provide a detailed description or any additional information about your selected service and sous-service.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Buttons Section -->
                                <div class="row mt-4">
                                    <div class="col-md-6 text-center">
                                        <a href='moredetails'  class="btn btn-primary">Back</a>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <button class="btn btn-primary" onclick="window.location.href='moredetails'">Next</button>
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
                <p>Copyright © Designed &amp; 2024</p>
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
	<script src="{{ asset('client/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('client/js/custom.min.js')}}"></script>
	<script src="{{ asset('client/js/dlabnav-init.js')}}"></script>
	<script src="{{ asset('client/js/demo.js')}}"></script>
    <script src="{{ asset('client/js/styleSwitcher.js')}}"></script>
	<script>
        // Function to handle sub-service selection
        function selectSubService(subService) {
            // Hide all description sections
            var descriptionSections = document.querySelectorAll('[id^="descriptionSection"]');
            descriptionSections.forEach(section => {
                section.style.display = 'none';
            });
    
            // Show the description section for the selected sub-service
            var selectedDescriptionSection = document.getElementById('descriptionSection' + subService);
            if (selectedDescriptionSection) {
                selectedDescriptionSection.style.display = 'block';
                selectedDescriptionSection.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
    
    



</body>
</html>