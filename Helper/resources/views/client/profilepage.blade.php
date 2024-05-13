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
        .rating input[type="radio"]:checked~label {
            color: gold;
        }

        /* Added padding to comment and card */
        .comment {
            padding: 15px;
            border-bottom: 1px solid #e6e6e6;
        }

        .card {
            padding: 20px;
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">My Profile</a></li>
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
                                    <div class="image-box">
                                        
                                        @if(session('client')['image'] == null)
                                            <img src="{{ asset('client/img/default.png')}}" alt="" class="img-fluid rounded-circle" style="max-width: 60px; height: 50px;">
                                        @else
                                            <img src="{{ asset('client/img/'.$user[0]->image )}}" class="img-fluid rounded-circle" alt="" style="max-width: 60px; height: 50px;">
                                        @endif
                                    </div>
                                    <div class="profile-details">
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0">{{ $user[0]->nom }}&nbsp;{{ $user[0]->prenom }}</h4>
                                                <p>Client</p>
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
                                        <h5 class="card-title text-primary mb-4">Client Information</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <h6 class="text-muted">Email</h6>
                                                    <p class="mb-0">{{$user[0]->email}}</p>
                                                </div>
                                                <div class="mb-4">
                                                    <h6 class="text-muted">Phone</h6>
                                                    <p class="mb-0">{{$user[0]->telephone}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <h6 class="text-muted">Address</h6>
                                                    <p class="mb-0">{{$user[0]->adresse}}</p>
                                                </div>
                                                <div class="mb-4">
                                                    <h6 class="text-muted">City</h6>
                                                    <p class="mb-0">{{$user[0]->ville}}</p>
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
                            <h5 class="card-title">Comments</h5>
                            <!-- Inside the card-body section where comments are displayed -->
                            @foreach ($comments as $comment)
              <div class="comment mt-3">
                  <div class="media-body">
                      <div class="d-flex align-items-center"> <!-- Added a flex container -->
                          <img src="{{ asset('client/images/profile/' . $comment->user_id_partenaire . '.jpg')}}" class="me-3 rounded-circle" alt="Expert" width="50">
                          @foreach ($experts as $expert)
                              @if ($expert->id == $comment->user_id_partenaire)
                                  <h6 class="mt-0 mb-0">{{ $expert->nom }} {{ $expert->prenom }}</h6> <!-- Display name and prenom -->
                              @endif
                          @endforeach
                      </div>
                      <div class="mt-1">
                          @for ($i = 0; $i < $comment->rating; $i++)
                              ⭐
                          @endfor
                      </div>
                      <p>{{ $comment->comment }}</p>
                      <p class="text-muted">Created at: {{ $comment->created_at }}</p> <!-- Display the creation date -->
                  </div>
              </div>
              @endforeach
              


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
    <script>
        $('#lightgallery').lightGallery({
            thumbnail: true,
        });
    </script>

</body>

</html>
