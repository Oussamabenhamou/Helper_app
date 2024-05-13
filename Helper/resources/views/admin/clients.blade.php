<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Clients</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('admin/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
</head>



<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="/index" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Helper</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('admin/img/'.session('admin.image'))}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{session('admin.prenom')}}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/index" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <a href="/partenaires" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Partenaires</a>
                    <a href="/clients" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Clients</a>
                    <a href="/reservations" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Reservations</a>


                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
             <!--   <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>   -->
                <div class="navbar-nav align-items-center ms-auto">


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('admin/img/'.session('admin.image'))}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{session('admin.prenom')}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="/editerprofiladmin/{{session('admin.id')}}" class="dropdown-item">My Profile</a>
                      <!--      <a href="#" class="dropdown-item">Settings</a>  -->
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                @if(session('succesadmin'))
                  <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{session('succesadmin')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                @endif

                @if(session('succesclient'))
                  <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{session('succesclient')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                @endif

                 @if(session('errorclient'))
                  <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{session('errorclient')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                @endif

                @if(session('succespartenaire'))
                  <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{session('succespartenaire')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                @endif

                @if(session('errorpartenaire'))
                  <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{session('errorpartenaire')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                @endif







                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Clients</p>
                                <h6 class="mb-0">{{$nombreClients }}</h6>
                            </div>
                        </div>







                    </div>














                </div>
            </div>
            <!-- Sale & Revenue End -->

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  <!-- Section pour les partenaires -->

<!-- Fin Table partenaires -->

<!-- Section pour les clients -->
<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Clients</h6>
            <form class="d-none d-md-flex ms-4">
                    <input id="searchInputClients" class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
            <a style="font-size: 24px;" title="Ajouter" href="/ajoutclient"><i class="bi bi-person-plus-fill" ></i></a>
        </div>
        <div class="table-responsive">
            <table class="table" id="TableClients">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tel</th>
                     <th scope="col">Statut</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <!-- Afficher les données du client -->
                            <td>                   <!-- Condition pour afficher l'image par défaut ou l'image du client -->
                @if (!empty($client->image))
                    <img src="{{ asset('client/img/' . $client->image) }}" alt="Image du client" class="img-fluid rounded-circle mb-3" style="width: 40px; height: 40px;">
                @else
                    <img src="{{ asset('admin/img/image.jfif') }}" alt="Image par défaut" class="img-fluid rounded-circle mb-3" style="width: 40px; height: 40px;">
                @endif
                            </td>
                            <td>{{ $client->nom }}</td>
                            <td>{{ $client->prenom }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->telephone }}</td>
                          <td>{{ $client->statut }}</td>
                            <td>
                                <!-- Actions pour les clients -->
                                <!-- Modifier -->
                                <a class="btn btn-sm btn-success" title="éditer" href="/editerclient/{{$client->id}}"><i class="bi bi-pen"></i></a>
                                <!-- Voir -->
                                <a class="btn btn-sm btn-success" title="voir" data-bs-toggle="modal" data-bs-target="#clientModal{{ $client->id }}" ><i class="bi bi-eye"></i></a>
                                <!-- Désactiver -->
                                 @if($client->statut==='actif')

                                <a title="désactiver" class="btn btn-sm btn-primary" href="/changerStatutCP/{{$client->id}}"><i class="bi bi-person-x"></i></a>
                                @else
                                <a title="activer" class="btn btn-sm btn-success" href="/changerStatutCP/{{$client->id}}"><i class="bi bi-person-check-fill"></i></a>
                                @endif
                            </td>
                        </tr>


                        <!-- Modal pour afficher les informations du client -->
<div class="modal fade" id="clientModal{{ $client->id }}" tabindex="-1" aria-labelledby="clientModalLabel{{ $client->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clientModalLabel{{ $client->id }}">Informations du client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <!-- Ajouter l'image du client -->
                 @if (!empty($client->image))
                    <img src="{{ asset('client/img/' . $client->image) }}" alt="Image du client" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
                @else
                    <img src="{{ asset('admin/img/image.jfif') }}" alt="Image par défaut" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
                @endif
                <!-- Autres informations du client -->
                <p><strong>Nom :</strong> {{ $client->nom }}</p>
                <p><strong>Prénom :</strong> {{ $client->prenom }}</p>
                <p><strong>Email :</strong> {{ $client->email }}</p>
                <p><strong>Téléphone :</strong> {{ $client->telephone }}</p>
                <p><strong>Statut :</strong> {{ $client->statut }}</p>
                <!-- Autres informations du client à afficher -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>




                    @endforeach
                </tbody>
            </table>


        </div>
              {{ $clients->links() }}
    </div>
</div>
<!-- Fin table clients -->





                <!-- Table Réservation Début -->



                <!-- Fin table réservations -->

                </div>
            </div>
            <!-- Sales Chart Start -->



            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->



            <!-- Recent Sales End -->




            <!-- Widgets Start -->



            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Helper</a>, All Right Reserved.
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('admin/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('admin/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('admin/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('admin/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('admin/js/main.js')}}"></script>


         <!-- Script JavaScript pour la fonction de filtrage -->
         <script>
    $(document).ready(function () {
        // Fonction de filtrage basée sur l'input #searchInput
        $("#searchInputClients").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#TableClients tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

        <script>
    $(document).ready(function () {
        // Fonction de filtrage basée sur l'input #searchInput
        $("#searchInputPartenaires").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#TablePartenaires tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

</body>

</html>
