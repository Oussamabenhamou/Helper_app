<?php

// app/Http/Controllers/ServiceController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;


class ServiceController extends Controller
{
    // Method to display the form
    public function create(Request $request)
{
    $userId = $request->session()->get('expert.id'); // Assurez-vous que l'utilisateur est connecté pour obtenir son ID

    $userServices = Service::where('user_id', $userId )->get();

    // Define service options based on category
    $serviceOptions = [
        1 => ['Painting', 'Carpentry', 'Electrical repairs', 'Plumbing'],   // Bricolage
        2 => ['Lawn mowing', 'Tree trimming', 'Garden cleanup', 'Plant care'], // Jardinage
        3 => ['Package delivery', 'Grocery delivery', 'Furniture delivery', 'Courier services']  // Livraison
    ];
    $cat_id=$request->session()->get('expert.categorie_id');

    $options = array_key_exists($cat_id, $serviceOptions) ? $serviceOptions[$cat_id] : [];
 // Calculate the remaining services
 $maxServices = 3; // Example: Maximum number of services allowed
 $remainingServices = $maxServices - $userServices->count();

    return view('expert.empty-page6', compact('options' ,'userServices', 'remainingServices'));
}

    // Method to handle form submission
    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'nullable|string',
        'prix' => 'required|numeric',
    ]);

    $service = new Service();
    $service->nom = $request->nom;
    $service->description = $request->description;
    $service->prix = $request->prix;
    $service->user_id = Auth::id(); // Assume you have a user_id field
    $service->categorie_id = Auth::user()->categorie_id;

    $service->save();

    return redirect()->back()->with('success', 'Service added successfully!');
}

public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|numeric',
        ]);

        $service = Service::findOrFail($id);
        $service->nom = $request->nom;
        $service->description = $request->description;
        $service->prix = $request->prix;
        // Assurez-vous que la mise à jour est effectuée par le propriétaire du service
        if ($service->user_id === Auth::id()) {
            $service->save();
            return redirect()->back()->with('success', 'Service updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Unauthorized action!');
        }
    }


    public function destroy($id)
{
    $service = Service::findOrFail($id);

    // Assurez-vous que la suppression est effectuée par le propriétaire du service
    if ($service->user_id === Auth::id()) {
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully!');
    } else {
        return redirect()->back()->with('error', 'Unauthorized action!');
    }
}


}
