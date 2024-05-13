<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ListExpertController extends Controller
{
    public function index(Request $request)
    {
        // Check if session variables are empty
        Log::info('Sub-service stored in session', ['response' => $request->session()->get('demande.subCategory')]);

        // Retrieve values from sessionStorage
        $minPrice = $request->session()->get('demande.minPrice');
        $subCategory = $request->session()->get('demande.subCategory');
        $maxPrice = $request->session()->get('demande.maxPrice');
        $city = $request->session()->get('demande.city');
        $date = $request->session()->get('demande.date');
        $time = $request->session()->get('demande.time');
        $description = $request->session()->get('demande.description');

        // Determine dispo_matin and dispo_midi based on time
        $dispo_matin = $time === 'morning' ? 1 : 0;
        $dispo_midi = $time === 'evening' ? 0 : 1;

        // Query database for experts matching the client's criteria
        if ($dispo_matin == 1) {
            $experts = DB::select('
                SELECT u.id, u.nom, u.prenom, u.telephone, u.email, u.adresse,u.image, u.ville,AVG(c.rating) as rating, 
                       s.nom AS service_name,s.id AS service_id, s.description AS service_description, s.prix, 
                       d.date AS disponibilite_date, d.dispo_matin, d.dispo_midi 
                FROM users u 
                JOIN services s ON u.id = s.user_id 
                JOIN disponibilites d ON s.id = d.service_id 
                LEFT JOIN comment_note_interventions c on u.id=c.user_id_partenaire
                WHERE s.prix BETWEEN ? AND ? 
                  AND d.date = ? 
                  AND d.dispo_matin = 1
                  AND s.nom = ?
                  AND u.ville = ?
                  GROUP BY u.id, u.nom, u.prenom, u.telephone, u.email, u.adresse, u.ville,u.image, 
                  s.nom, s.description, s.prix, d.date, d.dispo_matin, d.dispo_midi,s.id;
            ', [
                $minPrice,
                $maxPrice,
                $date,
                $subCategory,
                $city,
            ]);
        } else {
            $experts = DB::select('
                SELECT u.id, u.nom, u.prenom, u.telephone, u.email, u.adresse, u.ville,u.image, 
                       s.nom AS service_name,s.id AS service_id, s.description AS service_description, s.prix,AVG(c.rating) as rating, 
                       d.date AS disponibilite_date, d.dispo_matin, d.dispo_midi 
                FROM users u 
                JOIN services s ON u.id = s.user_id 
                JOIN disponibilites d ON s.id = d.service_id
                LEFT JOIN comment_note_interventions c on u.id=c.user_id_partenaire
                WHERE s.prix BETWEEN ? AND ? 
                  AND d.date = ? 
                  AND d.dispo_midi= 1
                  AND s.nom = ?
                  AND u.ville = ?
                  GROUP BY u.id, u.nom, u.prenom, u.telephone, u.email, u.adresse, u.ville,u.image,
         s.nom, s.description, s.prix, d.date, d.dispo_matin, d.dispo_midi,s.id;
            ', [
                $minPrice,
                $maxPrice,
                $date,
                $subCategory,
                $city,
            ]);
        }
        $client = session('client');
        $expertsData = [];

        foreach ($experts as $expert) {
            $expertsData[] = [
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'city' => $city,
                'date' => $date,
                'time' => $time,
                'subCategory' => $subCategory,
                'description' => $description,
                'service_name' => $expert->service_name,
                'user_id_client' => $client['id'], 
                'user_id_partenaire' => $expert->id,
                'service_id' => $expert->service_id,
                'statut' => 'en attend',
            ];
        }
        
            $request->session()->put('demandes', $expertsData);
            // Send data to the view
            return view('client.contacts', ['experts' => $experts]);
        }


    public function storeExpertData(Request $request)
    {
        // Retrieve data from the request
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        $city = $request->input('city');
        $date = $request->input('date');
        $time = $request->input('time');
        $subCategory = $request->input('subCategory');
        $description = $request->input('description');
        $userIdClient = session('client')['id']; // Make sure the key matches the one sent from the client-side script

        // Store data in the session under the 'demande' key
        $request->session()->put('demande', [
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'city' => $city,
            'date' => $date,
            'time' => $time,
            'subCategory' => $subCategory,
            'description' => $description,
            'user_id_client' => $userIdClient,
        ]);

        // Return a response (optional)
        return response()->json(['message' => 'Data stored successfully'], 200);
    }
}

?>
