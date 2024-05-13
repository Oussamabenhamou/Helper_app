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
    <title>PROFIL | EXPERT</title>
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
            color: #aaa; /* Default color */
            transition: color 0.3s;
        }
    
        .rating label:hover,
        .rating input[type="radio"]:checked ~ label {
            color: gold; /* Change to gold color on hover or when checked */
        }
    
        /* Add styles for solid star icon */
        .star {
            color: gold; /* Solid star color */
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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Expert Profile</a></li>
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
                                            <img src="{{ asset('client/img/1715194413-IBRAHIM.png')}}" alt="" class="img-fluid rounded-circle" style="max-width: 60px; height: 50px;">
                                        @else
                                            <img src="{{ asset('expert/img/'.$partenaire->image )}}" class="img-fluid rounded-circle" alt="" style="max-width: 60px; height: 50px;">
                                        @endif
                                    </div>
                                    <div class="profile-details">
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0">{{$partenaire->nom." ".$partenaire->prenom}}</h4>
                                            <p>{{$category[0]->nom}}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="post-details">
                                    <h3 class="mb-2 text-black">Comments</h3>
                                    <div class="comments-container">
                                        @foreach($comments as $comment)
                                            <div class="media comment mt-3">
                                                @if(session('client')['image'] == null)
                                                    <img src="{{ asset('client/img/default.png')}}" alt="" class="me-3 rounded-circle" width="50" height="50px">
                                                @else
                                                    <img src="{{ asset('client/img/'.$comment->image)}}" class="me-3 rounded-circle" alt="Expert" width="50" height="50px">
                                                @endif
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">{{$comment->nom}}&nbsp;{{$comment->prenom}}</h6>
                                                    <div class="d-flex align-items-center">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $comment->rating)
                                                                <span class="star">&#9733;</span>
                                                            @else
                                                                <span class="empty-star">&#9733;</span>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <p>{{ $comment->comment }}</p>
                                                    <p class="text-muted">Created at: {{ $comment->date }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    

                                    @if (!$interventionsWithoutComment->isEmpty())
                                        <div class="comment-respond" id="respond">
                                            {{-- <form class="/save-client-comment" id="commentform" method="post"> --}}
                                            <form action="/save-client-comment" method="post">
                                                @csrf
                                                <select name="intervention_id" id="interventionSelect">
                                                    @foreach($interventionsWithoutComment as $intervention)
                                                        <option value="{{$intervention->intervention_id}}">{{$intervention->date}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <!-- Star rating -->
                                                            <div class="rating" dir="rtl">
                                                                <input type="radio" id="star5" name="rating" value="5" />
                                                                <label for="star5" title="5 star">&#9733;</label>
                                                                <input type="radio" id="star5" name="rating" value="4" />
                                                                <label for="star5" title="5 stars">&#9733;</label>
                                                                <input type="radio" id="star3" name="rating" value="3" />
                                                                <label for="star3" title="3 stars">&#9733;</label>
                                                                <input type="radio" id="star2" name="rating" value="2" />
                                                                <label for="star2" title="2 stars">&#9733;</label>
                                                                <input type="radio" id="star1" name="rating" value="1" />
                                                                <label for="star1" title="1 stars">&#9733;</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="comment" class="text-black font-w600 form-label">Comment</label>
                                                            <!-- Textarea for comment -->
                                                            <textarea rows="8" class="form-control" name="comment" placeholder="Comment" id="comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <!-- Hidden input fields for passing data -->
                                                            <input type="hidden" name="partenaire_id" value="{{ $partenaire->id }}">
                                                            <input type="hidden" name="client_id" value="{{  $client['id'] }}">
                                                            <input type="hidden" name="date" id="selectedInterventionDate" value="">
                                                            <!-- Submit button -->
                                                            <input type="submit" value="Post Comment" class="submit btn btn-primary" id="submit" name="submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    @endif
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
    <script>
        // Function to update the hidden input field with the selected intervention's date
        function updateSelectedInterventionDate() {
            var selectedInterventionId = document.getElementById('interventionSelect').value;
            var selectedInterventionDate = document.querySelector('option[value="' + selectedInterventionId + '"]').innerText;
            document.getElementById('selectedInterventionDate').value = selectedInterventionDate;
        }
        updateSelectedInterventionDate();
        // Event listener to trigger the function when the intervention dropdown selection changes
        document.getElementById('interventionSelect').addEventListener('change', updateSelectedInterventionDate);
    </script>    
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
    <script src="{{ asset('client/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('client/vendor/jquery/jquery.min.js')}}"></script>

</body>

</html>
