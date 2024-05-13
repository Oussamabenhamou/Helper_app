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
                <div class="project-page d-flex justify-content-between align-items-center flex-wrap">
                    <div class="project mb-4">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#AllStatus" role="tab">All Status</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#OnProgress" role="tab">On Progress</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#Pending" role="tab">REJECTED</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#Closed" role="tab">ACCEPTED</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#Done" role="tab">DONE</a>
                            </li>
                        </ul>
                    </div>

                </div>  
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="AllStatus">
                                
                                @foreach($demands as $demand)
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-xl-3 col-lg-6 col-sm-12 align-items-center customers">
                                                    <div class="media-body">
                                                        <span class="text-primary d-block fs-18 font-w500 mb-1">#{{ $demand->id }}</span>
                                                        <h3 class="fs-18 text-black font-w600">{{ $demand->service_name }}</h3>
                                                        <span class="d-block mb-lg-0 mb-0 fs-16"><i class="fas fa-calendar me-3"></i>{{ $demand->date }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-3">
                                                    <div class="d-flex project-image">
                                                        @if(session('client')['image'] == null)
                                                            <img src="{{ asset('client/img/default.png')}}" alt="" >
                                                        @else
                                                            <img src="{{ asset('expert/img/'.$demand->image )}}"  alt="">
                                                        @endif
                                                        <div>
                                                            <small class="d-block fs-16 font-w400">Expert</small>
                                                            <span class="fs-18 font-w500">{{ $demand->nom }} &nbsp;{{ $demand->prenom }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-sm-4 col-6 mb-3 text-lg-center">
                                                    <div class="d-flex project-image">
                                                        <div>
                                                            <span class="fs-18 font-w500">
                                                                <a href="/partenaireProfile/{{$demand->id_expert}}" class="col-12 text-center">
                                                                    <button class="btn bg-danger fs-18 font-w600 text-nowrap text-bg-danger">Go to profile</button>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-2 col-lg-6 col-sm-4 mb-sm-3 mb-3 text-end">
                                                    <div class="d-flex justify-content-end project-btn">
                                                        @if($demand->statut == 'acceptée')
                                                            <a href="javascript:void(0);" class="btn bg-progress fs-18 font-w600 text-nowrap text-bg-progress">ACCEPTED</a>
                                                        @elseif($demand->statut == 'refusée')
                                                            <a href="javascript:void(0);" class="btn bgl-warning text-warning fs-18 font-w600">Rejected</a>
                                                        @elseif($demand->statut == 'terminé')
                                                            <a href="javascript:void(0);" class="btn bg-success fs-18 font-w600 text-nowrap text-bg-success">DONE</a>
                                                        @elseif($demand->statut == 'en attente')
                                                            <a href="javascript:void(0);" class="btn bg-primary fs-18 font-w600 text-nowrap text-bg-primary">On Progress</a>
                                                        @endif
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="OnProgress">
                                @foreach($demands as $demand)
                                    @if($demand->statut == 'en attente')
                                        @include('client.partials.demand_card', ['demand' => $demand])
                                    @endif
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="Pending">
                                @foreach($demands as $demand)
                                    @if($demand->statut == 'refusée')
                                        @include('client.partials.demand_card', ['demand' => $demand])
                                    @endif
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="Closed">
                                @foreach($demands as $demand)
                                    @if($demand->statut == 'acceptée')
                                        @include('client.partials.demand_card', ['demand' => $demand])
                                    @endif
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="Done">
                                @foreach($demands as $demand)
                                    @if($demand->statut == 'terminé')
                                        @include('client.partials.demand_card', ['demand' => $demand])
                                    @endif
                                @endforeach
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
        // Show sub-services when a service is selected
        document.getElementById('serviceSelect').addEventListener('change', function () {
            const selectedService = this.value;
            if (selectedService) {
                document.getElementById('subServicesSection').style.display = 'block';
            } else {
                document.getElementById('subServicesSection').style.display = 'none';
            }
        });

        // Function to handle sub-service selection
        function selectSubService(subService) {
            document.getElementById('descriptionSection').style.display = 'block';
            document.getElementById('descriptionSection').scrollIntoView({ behavior: 'smooth' });
            // Here you can redirect or do whatever you want with the selected sub-service
        }
    </script>
</body>
</html>
