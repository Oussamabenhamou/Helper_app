<?php

// Il faut importer les controllers !
use App\Http\Controllers\AvailabilityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\ListExpertController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientProfileController;
use App\Models\User;
use App\Models\Demande;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    // Fetch statistics from the database
    $clientCount = User::where('role', 'client')->count();
    $expertCount = User::where('role', 'expert')->count();
    $demandCount = Demande::count();

    // Pass the statistics to the welcome view
    return view('welcome', compact('clientCount', 'expertCount', 'demandCount'));
});

Route::get('/expert', function () {
    return view('expert.index');
});
Route::get('/dashboard', function () {
    return view('expert.dashboard');
});
Route::get('/dashboard1', function () {
    return view('client.dashboard');
});
Route::get('/empty-page', function () {
    return view('expert.empty-page');
});


Route::get('/empty-page2', function () {
    return view('expert.empty-page2');
});
//Route::get('/empty-page3', function () {
 //   return view('expert.empty-page3');
//});
//Route::get('/empty-page4', function () {
  //  return view('expert.empty-page4');
//});
//Route::get('/empty-page5', function () {
 //   return view('expert.empty-page5');
//});
Route::get('/client/dashboard', function () {
    return view('client.dashboard');
});

Route::get('/client/index', function () {
    return view('client.index');
});

Route::get('/client/services', function () {
    return view('client.services');
});

Route::get('/client/settings', function () {
    return view('client.settings');
});
Route::put('/demande/{id}/finalize', [DemandeController::class, 'finalizeDemande'])
    ->middleware('auth')
    ->name('demande.finalize');


Route::get('/indexe' , [AccueilController::class, 'indexpage']);
Route::get('/login' , [AccueilController::class, 'loginpage']);
Route::get('/register' , [AccueilController::class, 'registerpage']);
Route::get('/about' , [AccueilController::class, 'aboutpage']);
Route::get('/services' , [AccueilController::class, 'servicespage']);
Route::get('/pricing' , [AccueilController::class, 'pricingpage']);
Route::get('/contact' , [AccueilController::class, 'contactpage']);
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/settingsclient' , [ClientController::class, 'settingspage']);
Route::get('/moredetails',  [ClientController::class, 'detailspage']);
Route::get('/moredetails1',  [ClientController::class, 'details1page']);
Route::get('/moredetails2',  [ClientController::class, 'details2page']);
Route::get('/services' , [ClientController::class, 'serviespage']);
Route::get('/homeclient' , [ClientController::class, 'homepage']);
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/homeclient' , [ClientController::class, 'homepage']);



Route::get('/dash' , [AccueilController::class, 'adminpage']);
// routes/web.php
Route::get('/expert/empty-page5', [DemandeController::class, 'showPartnerComments'])->middleware('auth');
Route::get('/expert/empty-page1', [AvailabilityController::class, 'show'])->middleware('auth');
Route::put('/disponibilites/{id}', [AvailabilityController::class, 'update'])->middleware('auth')->name('disponibilites.update');
Route::post('/disponibilites/store', [AvailabilityController::class, 'store'])->name('disponibilites.store');
Route::get('/dashboard', [DemandeController::class, 'showDashboard'])->name('dashboard');

Route::get('/expert/empty-page7', [DemandeController::class, 'showPartnerProfits'])->middleware('auth')->name('partner.profits');
Route::get('/expert/empty-page3', [DemandeController::class, 'showEmptyPage3'])->middleware('auth');
Route::get('/expert/empty-page4', [DemandeController::class, 'showEmptyPage4'])->middleware('auth');
// Ajout de la route pour la mise à jour des demandes
Route::put('/demandes/{demande}', [DemandeController::class, 'update'])->name('demandes.update');



// Route to display the form
Route::get('/expert/empty-page6', [ServiceController::class, 'create'])->name('services.create');
Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
// Route to process the form submission
Route::post('/expert/empty-page6', [ServiceController::class, 'store'])->name('services.store');

Route::post('/registerpartenaire' , [UsersController::class, 'registerExpert']);
Route::post('/registerclient' , [UsersController::class, 'registerClient']);
Route::post('/con' , [UsersController::class, 'login'])->name('connexion');
Route::put('/updateexpert' , [PartenaireController::class, 'updateexpert']);
// Les routes des pages de l'admin


Route::get('/index' , [AdminController::class, 'index']);
Route::get('/clients' , [AdminController::class, 'pageclients']);
Route::get('/partenaires' , [AdminController::class, 'pagepartenaires']);
Route::get('/reservations' , [AdminController::class, 'pagereservations']);
Route::get('/ajoutclient' , [AdminController::class, 'pageajoutclient']);
Route::get('/ajoutpartenaire' , [AdminController::class, 'pageajoutpartenaire']);
Route::post('/ajoutclient' , [AdminController::class, 'ajoutclient']);
Route::post('/ajoutpartenaire' , [AdminController::class, 'ajoutpartenaire']);

Route::get('/editerclient/{id}' , [AdminController::class, 'pageediterclient']);
Route::get('/editerpartenaire/{id}' , [AdminController::class, 'pageediterpartenaire']);

Route::post('/editerclient/{id}' , [AdminController::class, 'editerclient']);
Route::post('/editerpartenaire' , [AdminController::class, 'editerpartenaire']);


Route::get('/editerprofiladmin/{id}' , [AdminController::class, 'pageediterprofiladmin']);
Route::post('/editerprofiladmin/{id}' , [AdminController::class, 'editerprofiladmin']);

Route::get('/changerStatutCP/{id}' , [AdminController::class, 'changerStatutCP']);
////////////////////////////////////////////////////
///////////////++++++++++++++++++
Route::post('/store-expert-data', [ListExpertController::class, 'storeExpertData'])->name('store-expert-data');

Route::get('/partenaireProfile/{pid}', [ClientController::class, 'partenaireProfile'] );
Route::post('/save-client-comment', [ClientController::class, 'saveClientComment']);
Route::put('/updateInfo' , [ClientController::class, 'updateInfo']);
Route::put('/updatePassword' , [ClientController::class, 'updatePassword']);


Route::get('/test1', [ClientController::class, 'showComments']);// function () {
//     return view('client.app-profile');
// });
Route::get('/test2',  [ListExpertController::class, 'index']);

Route::get('/test3', function () {
    return view('client.service-detail');
});
Route::get('/test4', function () {
    return view('client.post-details');
});
Route::get('/test5',  [DemandController::class, 'index']);

Route::post('/store-demand', [DemandController::class, 'store']);
Route::get('/clientprofile' , [ClientProfileController::class, 'showProfile']
, function () {
    return view('client.profilepage');
});
Route::get('/fetch-interventions-without-comment', [ClientController::class, 'fetchInterventionsWithoutComment']);
Route::get('/clientComments', [ClientController::class, 'getcomment'] );
Route::get('/logoutC', [ClientController::class, 'logout'] );
Route::get('/logout_e', [ClientController::class, 'logout_e'] );
