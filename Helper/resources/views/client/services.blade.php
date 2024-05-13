<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('client/images/favicon.png')}}">
    <link href="{{ asset('client/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{ asset('client/css/style.css')}}" rel="stylesheet">
    <style>
        /* Style for sub-service cards */
        .sub-service-card {
            border: 1px solid #ccc; /* Default border color */
            transition: border-color 0.3s; /* Smooth transition */
            cursor: pointer; /* Change cursor to pointer on hover */
            margin: 10px;
            padding: 20px;
        }

        .sub-service-card:hover {
            border-color: #007bff; /* Change border color on hover */
        }

        .sub-service-card.selected {
            border-color: #28a745; /* Change border color when clicked */
        }
        
        /* Adjustments for sidebar */
        .dlabnav {
            z-index: 1; /* Ensure sidebar is on top of other content */
        }
    </style>
</head>
<body>
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
		@include('client.partials.sidebar1')

    <div class="content-body">
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
                                            <div class="card sub-service-card mx-2" id="subService1" onclick="selectSubService('Lawn Mowing', 'descriptionSection1', 'subService1')">
                                                <div class="card-body text-center">
                                                    Lawn Mowing
                                                </div>
                                            </div>
                                            <div class="card sub-service-card mx-2" id="subService2" onclick="selectSubService('Tree Trimming', 'descriptionSection2', 'subService2')">
                                                <div class="card-body text-center">
                                                    Tree Trimming
                                                </div>
                                            </div>
                                            <div class="card sub-service-card mx-2" id="subService3" onclick="selectSubService('Garden Cleanup', 'descriptionSection3', 'subService3')">
                                                <div class="card-body text-center">
                                                    Garden Cleanup
                                                </div>
                                            </div>
                                            <div class="card sub-service-card mx-2" id="subService4" onclick="selectSubService('Plant Care', 'descriptionSection4', 'subService4')">
                                                <div class="card-body text-center">
                                                    Plant Care
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Buttons Section -->
                            <div class="row mt-4">
                                <div class="col-md-6 text-center">
                                    <a href='moredetails' class="btn btn-primary">Back</a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <button id="nextButton" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; 2024</p>
        </div>
    </div>
    <p>Selected sub-service: <span id="selectedSubService"></span></p>

    <script src="{{ asset('client/vendor/global/global.min.js')}}"></script>
    <script src="{{ asset('client/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('client/js/custom.min.js')}}"></script>
    <script src="{{ asset('client/js/dlabnav-init.js')}}"></script>
    <script src="{{ asset('client/js/demo.js')}}"></script>
    <script src="{{ asset('client/js/styleSwitcher.js')}}"></script>

        <script>
    // Function to handle sub-service selection
    function selectSubService(subServiceName, subServiceId, cardId) {
        // Remove the 'selected' class from all sub-service cards
        document.querySelectorAll('.sub-service-card').forEach(function(card) {
            card.classList.remove('selected');
        });

        // Add the 'selected' class to the clicked sub-service card
        document.getElementById(cardId).classList.add('selected');

        // Hide all description sections
        document.querySelectorAll('.description-section').forEach(function(section) {
            section.style.display = 'none';
        });

        // Show the description section corresponding to the selected sub-service
        document.getElementById(subServiceId).style.display = 'block';

        // Log the selected sub-service name for debugging
        console.log('Selected sub-service:', subServiceName);

        // Store the selected sub-service in the session using AJAX
        storeSubServiceInSession('haha');
    }

    // Function to store the selected sub-service in the session using AJAX
    function storeSubServiceInSession(subServiceName) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '{{ route('store-expert-data') }}');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Sub-service stored in session:', xhr.responseText);
                } else {
                    console.error('Error storing sub-service:', xhr.statusText);
                }
            }
        };
        var formData = new FormData();
        formData.append('subCategory', subServiceName); // Make sure the key matches the one expected in the controller
        xhr.send(formData);
    }

    // Click event listener for the "Next" button
    document.getElementById('nextButton').addEventListener('click', function() {
        // Redirect to '/moredetails'
        window.location.href = 'moredetails';
    });
        </script>
        
    </body>
    </html>
