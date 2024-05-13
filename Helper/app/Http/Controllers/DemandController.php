<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\DB;

class DemandController extends Controller
{
    public function index()
    {
        $clientID = session('client')['id'];
        $demands = DB::select("
            SELECT demandes.id as id, demandes.user_id_client as id_client, demandes.user_id_partenaire as id_expert, demandes.statut as statut, 
            users.nom as nom, users.image as image, users.prenom as prenom, services.nom AS service_name, demandes.created_at AS date
            FROM demandes
            JOIN users ON demandes.user_id_partenaire = users.id
            JOIN services ON demandes.service_id = services.id
            WHERE demandes.user_id_client = ?
        ", [$clientID]);
        

        return view('client.demands', ['demands' => $demands]);

    }
    public function store(Request $request)
    {
        // Retrieve information from the session
        $serviceId = $request->input('service_id');
        $userIdPartenaire = $request->input('expert_id');
        $userIdClient = $request->session()->get('demande.user_id_client');
        $statut = 'en attente';
        $description = $request->session()->get('demande.description');
    
        // Insert a record into the demandes table
        $demand = new Demande();
        $demand->service_id = $serviceId;
        $demand->user_id_client = $userIdClient;
        $demand->user_id_partenaire = $userIdPartenaire;
        $demand->statut = $statut;
        $demand->description = $description;
        $demand->save();
    
        return response()->json(['message' => 'Demand stored successfully'], 200);
    }
    
}
