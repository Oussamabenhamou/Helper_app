@php
	use App\Models\CommentNoteIntervention;
	$averageRating = CommentNoteIntervention::where('user_id_partenaire', session('expert')['id'])->avg('rating');
	$averageRating = round($averageRating, 1);
	// as a porcentage of 100
	$ration = ($averageRating/5)*100;
@endphp
<div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                
                            </div>

                        </div>
                        <ul class="navbar-nav header-right">

							{{-- <div class="side-bar-profile">
								<div class="d-flex justify-content-between mb-2 progress-info">
									<span class="fs-12"><i class="fas fa-star text-orange me-2"></i>My Rating</span>
									<span class="fs-12">{{$averageRating}}</span>
								</div>
								<div class="progress default-progress">
									<div class="progress-bar bg-gradientf progress-animated" style="width: {{$ration}}%; height:10px;" role="progressbar">
										<span class="sr-only">{{$ration}} Rating</span>
									</div>
								</div>
							</div> --}}

							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                <img src="{{ asset('expert/img/'.session('expert')['image'])}}" alt="">

								<!-- <img src="{{ asset('accueil/Helper/partenaire/images/user.jpg')}}" width="56" alt=""> -->
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									
									<a href="/logout_e" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
							<li>
								<div class="side-bar-profile">
									<div class="rating-stars">
										@php
											$maxRating = 5;
											$filledStars = min(max(0, round($averageRating)), $maxRating);
											$emptyStars = max(0, $maxRating - $filledStars);
										@endphp
										@for ($i = 0; $i < $filledStars; $i++)
											<span class="fa fa-star " style="color: gold;"></span>
										@endfor
										@for ($i = 0; $i < $emptyStars; $i++)
											<span class="fa fa-star"></span>
										@endfor
									</div>
									
					<div class="profile-info2">
						<h4 class="fs-18 font-w500">{{ session('expert')['prenom'] ." ". session('expert')['nom']  }}</h4>
						<span>{{ session('expert')['email'] }}</span>
					</div>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>