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
