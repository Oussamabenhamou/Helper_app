@php
	use App\Models\CommentNoteIntervention;
	$averageRating = CommentNoteIntervention::where('user_id_partenaire', session('expert')['id'])->avg('rating');
	$averageRating = round($averageRating, 1);
	// as a porcentage of 100
	$ration = ($averageRating/5)*100;
@endphp
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="nav-link " href="{{ url('/dashboard') }}" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>


            </li>
            <li>
                <a href="{{ url('/empty-page') }}" class="" aria-expanded="false">
                    <i class="fas fa-user-check active"></i>
                    <span class="nav-text">PROFILE</span>
                </a>
            </li>
            <li><a class="nav-link " href="{{ url('/expert/empty-page1') }}" aria-expanded="false">
            <i class="fas fa-calendar-alt"></i>
                    <span class="nav-text">AVAILABILTY</span>
                </a>
            </li>
            <li><a class="nav-link  " href="{{ url('/empty-page2') }}" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text">SCHUDEL</span>
                </a>
            </li>
            <li><a class="nav-link  " href="{{ url('/expert/empty-page3') }}" aria-expanded="false">
                <i class="fas fa-envelope"></i>
                <span class="nav-text">DEMANDES</span>
            </a>
            </li>
            <li><a class="nav-link " href="{{ url('/expert/empty-page4') }}" aria-expanded="false">
                    <i class="fas fa-check"></i>
                    <span class="nav-text">RESERVATIONS</span>
                </a>
            </li>
            <li><a class="nav-link " href="{{ url('/expert/empty-page6') }}" aria-expanded="false">
                    <i class="fas fa-cogs"></i>
                    <span class="nav-text">YOUR SERVICES</span>
                </a>
            </li>
            <li><a class="nav-link " href="{{ url('/expert/empty-page7') }}" aria-expanded="false">
                    <i class="fas fa-coins"></i>
                    <span class="nav-text">PROFIT</span>
                </a>
            </li>
            <li><a class="nav-link  " href="{{ url('/expert/empty-page5') }}" aria-expanded="false">
                    <i class="fas fa-comments"></i>
                    <span class="nav-text">COMMENTS </span>
                </a>
            </li>
            <li>
						<a class="nav-link" href="/logout_e" aria-expanded="false">
							<i class="fas fa-sign-out-alt"></i>
							<span class="nav-text">Logout</span>
						</a>
					</li>
        </ul>
    </div>
</div>
