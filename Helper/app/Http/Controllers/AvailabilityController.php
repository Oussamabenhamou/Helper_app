<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disponibilite; // Ensure your model name corresponds to your table
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
class AvailabilityController extends Controller
{
    public function show(Request $request)
    {
        $userId = $request->session()->get('expert.id'); // Assurez-vous que l'utilisateur est connecté pour obtenir son ID
        // Fetch services linked to this user and load their disponibilites
        $services = Service::with('disponibilites')
                           ->where('user_id', $userId)
                           ->get();

        // Pass services to view which includes disponibilites
        return view('expert.empty-page1', compact('services'));
    }
public function update(Request $request, $id)
{
    $request->validate([
        'dispo_matin' => 'required|boolean',
        'dispo_midi' => 'required|boolean',
    ]);

    $disponibilite = Disponibilite::findOrFail($id);
    $disponibilite->dispo_matin = $request->dispo_matin;
    $disponibilite->dispo_midi = $request->dispo_midi;
    $disponibilite->save();

    return redirect()->back()->with('success', 'Availability updated successfully!');
}
public function store(Request $request)
{
    $request->validate([
        'service_id' => 'required|integer|exists:services,id',
        'date' => 'required|date',
        'dispo_matin' => 'required|boolean',
        'dispo_midi' => 'required|boolean',
    ]);

    $disponibilite = new Disponibilite();
    $disponibilite->service_id = $request->service_id;
    $disponibilite->date = $request->date;
    $disponibilite->dispo_matin = $request->dispo_matin;
    $disponibilite->dispo_midi = $request->dispo_midi;
    // Si nécessaire, vous pouvez également définir d'autres champs ici

    // Sauvegarde de l'objet dans la base de données
    $disponibilite->save();

    return back()->with('success', 'Disponibilité ajoutée avec succès.');
}


}
