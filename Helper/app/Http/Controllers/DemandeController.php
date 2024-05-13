<?php
// Dans App\Http\Controllers\DemandeController.php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Demande;
use App\Models\Intervention;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CommentNoteClient;
use App\Mail\StatusUpdatedEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Service;
use App\Mail\PartnerNotificationEmail;
class DemandeController extends Controller
{
    public function showEmptyPage3(Request $request) {
        $userId = $request->session()->get('expert.id'); // Assurez-vous que l'utilisateur est connecté pour obtenir son ID

        // Debugging: Check if the user ID is being retrieved correctly

        $demandes = Demande::where('user_id_partenaire', $userId)
        ->where('statut', 'en attente')
        ->paginate(2);       // $demandes = Demande::where('user_id_partenaire', $userId)->get();

        // Debugging: Check what is being retrieved


        return view('expert.empty-page3', compact('demandes'));
    }
    public function showEmptyPage4(Request $request) {
        $userId = $request->session()->get('expert.id'); // Assurez-vous que l'utilisateur est connecté pour obtenir son ID
        // Debugging: Log the user ID

        $demandes = Demande::where('user_id_partenaire', $userId)->whereNotIn('statut', ['refusée', 'en attente'])->with('client')->get();
        // Debugging: Log the fetched demands
        logger('Fetched Demands:', ['demandes' => $demandes]);

        return view('expert.empty-page4', compact('demandes'));
    }
    public function update(Request $request, $id)
{
    $demande = Demande::findOrFail($id);
    $oldStatus = $demande->statut;
    $demande->statut = $request->statut;
    $demande->save();

    // Fetch the client's information
    $client = User::findOrFail($demande->user_id_client);

    // Check if the status has changed to 'acceptée'
    if ($oldStatus != 'acceptée' && $request->statut == 'acceptée') {
        // Send email to the client
        Mail::to($client->email)->send(new StatusUpdatedEmail($demande, $client));

        // Fetch the partner's information
        $partner = User::findOrFail($request->session()->get('expert.id'));  // Assuming the partner's ID is stored in the session

        // Send an email to the partner with the client's details
        Mail::to($partner->email)->send(new PartnerNotificationEmail($client, $demande));
    }

    return back()->with('success', 'Statut mis à jour avec succès.');
}






    public function showPartnerComments(Request $request) {
        $userId = $request->session()->get('expert.id'); // Assurez-vous que l'utilisateur est connecté pour obtenir son ID

        // Récupérer les commentaires liés à l'ID du partenaire
        $comments = CommentNoteClient::where('user_id_partenaire', $userId)
                                                 ->with('client') // Supposons que vous vouliez aussi les infos du client
                                                 ->get();

        // Retourner une vue avec ces commentaires
        return view('expert.empty-page5', compact('comments'));
    }

    public function showPartnerProfits(Request $request)
    {
       $userId = $request->session()->get('expert.id');

        // Récupérer les demandes acceptées liées à l'ID du partenaire
        $demandesAcceptees = Demande::where('user_id_partenaire', $userId)
                                     ->where('statut', 'acceptée')
                                     ->with('service') // Charger les informations sur le service pour chaque demande
                                     ->get();

        // Initialiser la somme totale des profits
        $totalProfits = 0;

        // Initialiser un tableau pour stocker les profits par demande
        $profitsByDemande = [];

        // Calculer le profit pour chaque demande
        foreach ($demandesAcceptees as $demande) {
            $service = $demande->service;
            if ($service) {
                // Calculer le profit pour cette demande en multipliant le prix du service par la quantité demandée
                $profit = $service->prix * $demande->quantite;
                // Ajouter le profit à la somme totale
                $totalProfits += $profit;
                // Ajouter le profit à notre tableau
                $profitsByDemande[] = [
                    'demande' => $demande,
                    'profit' => $profit,
                ];
            }
        }

        // Retourner une vue avec la somme totale des profits et les profits par demande
        return view('expert.empty-page7', compact('totalProfits', 'profitsByDemande'));
    }
    public function showDashboard(Request $request) {
        $userId = $request->session()->get('expert.id');

        // Compter le nombre de demandes refusées
        $refusedCount = Demande::where('user_id_partenaire', $userId)->where('statut', 'refusée')->count();
        $nombreClients = Demande::where('user_id_partenaire', $userId)
        ->distinct('user_id_client')
        ->count();
        // Compter le nombre de demandes en attente
        $pendingCount = Demande::where('user_id_partenaire', $userId)->where('statut', 'en attente')->count();
        $acceptedCount = Demande::where('user_id_partenaire', $userId)->where('statut', 'acceptée')->count();
        $terminer =  Demande::where('user_id_partenaire', $userId)->where('statut', 'terminé')->count();
        // Passer les compteurs à la vue
        return view('expert.dashboard', compact('refusedCount', 'pendingCount','acceptedCount','nombreClients','terminer'));
    }
    public function finalizeDemande(Request $request, $id) {
        $demande = Demande::findOrFail($id);

        // Update the status to 'terminé'
        $demande->statut = 'terminé';
        $demande->save();

        // Check for an existing intervention or create a new one
        $intervention = Intervention::firstOrNew([
            'service_id' => $demande->service_id,
            'user_id_client' => $demande->user_id_client
        ]);

        // Set default values for 'duree', 'prix', and 'type' if they are null
        $intervention->duree = $intervention->duree ?? 0;
        $intervention->prix = $intervention->prix ?? 0.00; // Default price
        $intervention->type = $intervention->type ?? 'default'; // Default type

        $intervention->save();

        return back()->with('success', 'Demande finalized and intervention updated/created successfully.');
    }




}
