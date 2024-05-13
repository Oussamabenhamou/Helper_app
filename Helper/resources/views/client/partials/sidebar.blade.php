@php
	use App\Models\CommentNoteClient;
	$averageRating = CommentNoteClient::where('user_id_client', session('client')['id'])->avg('rating');
	$averageRating = round($averageRating, 1);
	// as a porcentage of 100
	$ration = ($averageRating/5)*100;
@endphp

<!-- FAVICONS ICON -->
<link rel="shortcut icon" type="image/png" href="{{ asset('client/images/favicon.png')}}">
<link href="{{ asset('client/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
<link href="{{ asset('client/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('client/vendor/nouislider/nouislider.min.css')}}">

<!-- Style css -->
<link href="{{ asset('client/css/style.css')}}" rel="stylesheet">
       
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="nav-link " href="/homeclient" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Home page</span>
						</a>
                    </li>
					
                    <li><a class="nav-link " href="/clientprofile" aria-expanded="false">
						<i class="fas fa-fw fa-user"></i>
							<span class="nav-text">Profile</span>
						</a>
                    </li>
                    <li><a class="nav-link " href="/test5" aria-expanded="false">
							<i class="fas fa-hand-paper fa-fw"></i>
							<span class="nav-text">Demands</span>
						</a>
                    </li>
                    <li><a class="nav-link " href="/clientComments" aria-expanded="false">
							<i class="fas fa-comments fa-fw"></i>
							<span class="nav-text">Comments</span>
						</a>
                    </li>
					 <li><a class="nav-link " href="/settingsclient" aria-expanded="false">
							<i class="fas fa-cog"></i>
							<span class="nav-text">Settings</span>
						</a>
                    </li>
					<li>
						<a class="nav-link" href="/logoutC" aria-expanded="false">
							<i class="fas fa-sign-out-alt"></i>
							<span class="nav-text">Logout</span>
						</a>
					</li>
                </ul>
				<div class="side-bar-profile">
					<div class="d-flex align-items-center justify-content-between mb-4">
						<div class="side-bar-profile-img">
							@if(session('client')['image'] == null)
								<img src="{{ asset('client/img/default.png')}}" alt="">
							@else
								<img src="{{ asset('client/img/'.session('client')['image'])}}" alt="">
							@endif
						</div>
					</div>	
					<div class="profile-info2">
						<h4 class="fs-18 font-w500">{{ session('client')['prenom'] ." ". session('client')['nom']  }}</h4>
						<span>{{ session('client')['email'] }}</span>
					</div>
					<div class="d-flex justify-content-between mb-2 progress-info">
						<span class="fs-12"><i class="fas fa-star text-orange me-2"></i>My Rating</span>
						<span class="fs-12">{{$averageRating}}</span>
					</div>
					<div class="progress default-progress">
						<div class="progress-bar bg-gradientf progress-animated" style="width: {{$ration}}%; height:10px;" role="progressbar">
							<span class="sr-only">{{$ration}} Rating</span>
						</div>
					</div>
				</div>
			</div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->
		