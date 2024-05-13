<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{

    // Les differentes pages de l'admin

public function index(){
// Récupérer les utilisateurs experts (partenaires)
$partenaires = User::where('role', 'expert')->paginate(2);
//$partenaires = User::where('role', 'expert')->get();

// Récupérer les utilisateurs clients

$clients = User::where('role', 'client')->paginate(2);
//$clients = User::where('role', 'client')->get();

$nombrePartenaires = User::where('role', 'expert')->count();

// Compter le nombre de clients
$nombreClients = User::where('role', 'client')->count();

$demandes = Demande::paginate(3);
$nbdemandes = Demande::all()->count();


// Passer les partenaires et les clients à la vue 'index'
return view('admin.index', compact('partenaires', 'clients','nombrePartenaires','nombreClients','demandes','nbdemandes'));

}


// Fonction pour ajouter un client

public function ajoutclient(Request $request){
    // Validez les données soumises
    $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email|unique:users',
        'tel' => 'required|numeric',
        'password' => 'required|min:5',
    ]);

    // Créez un nouvel utilisateur avec les données validées
    $user = new User([
        'nom' => $validatedData['nom'],
        'prenom' => $validatedData['prenom'],
        'email' => $validatedData['email'],
        'telephone' => $validatedData['tel'],
        'password' => bcrypt($validatedData['password']),
        'role' => 'client',
    ]);

    // Enregistrez l'utilisateur dans la base de données
    $user->save();
    return redirect('/index')->with('succesclient', 'Le client a été ajouté avec succès!');

}

public function pageediterclient($id){

    $client = User::find($id);

       if (!$client) {
            // Gérer le cas où le client n'est pas trouvé, par exemple redirection vers une autre page
            return redirect('/index')->with('errorclient', 'Client non trouvé !');
        }

        return view('admin.editerclient', compact('client'));
 }




public function editerclient(Request $request, $id){

       $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email',
        'tel' => 'required|numeric',
        'password' => 'required|min:5',
    ]);

    $client = User::find($id);
    $client->update($validatedData);

    return redirect('/index')->with('succesclient', 'Le client a été édité avec succès!');


}

    public function ajoutpartenaire(Request $request)
{
     // Valider les données du formulaire
     $validatedData = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:users|max:255',
        'tel' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'ville' => 'required|string|max:255',
        'categorie_id' => 'required|exists:categories,id',
        'password' => 'required|string|min:4',
    ]);

    // Créer un nouvel objet User avec les données validées
    $user = new User();
    $user->nom = $validatedData['nom'];
    $user->prenom = $validatedData['prenom'];
    $user->email = $validatedData['email'];
    $user->telephone = $validatedData['tel'];
    $user->adresse = $validatedData['adresse'];
    $user->ville = $validatedData['ville'];
    $user->categorie_id = $validatedData['categorie_id'];
    $user->password = bcrypt($validatedData['password']); // Assurez-vous d'ajouter le mot de passe de manière sécurisée
    $user->role ='expert';
    // Enregistrer l'utilisateur dans la base de données
    // $user->save();

    // Enregistrez l'utilisateur dans la base de données
if ($user->save()) {
    return redirect('/index')->with('succespartenaire', 'Le partenaire ou expert a été ajouté avec succès!');
} else {
    return redirect('/index')->with('errorpartenaire', 'Partenaire ou expert non ajouté. Veuillez refaire !');
}


}



public function editerprofiladmin(Request $request, $id){

       $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email',
        'image' => 'required|mimes:jpg,png,jpeg',
        'tel' => 'required|numeric',
        'password' => 'required|min:5',
    ]);



    $newImageName = time().'-'.$request->nom.'.'.$request->image->extension();
     $request->image->move(public_path('admin/img'),  $newImageName);

     $validatedData['image']=  $newImageName;
     $validatedData['password']= bcrypt($validatedData['password']);

    $admin = User::find($id);
    $admin->update($validatedData);

    // Supprimer l'ancienne image du dossier public
$oldImagePath = public_path('admin/img/') . session('image');
if (File::exists($oldImagePath)) {
    File::delete($oldImagePath);
}
    $request->session()->put('admin.image', $newImageName);

    return redirect('/index')->with('succesadmin', 'Mis à jour Réussie !');


}


public function pageediterprofiladmin($id){

    $admin = User::find($id);

       if (!$admin) {
            // Gérer le cas où le client n'est pas trouvé, par exemple redirection vers une autre page
            return redirect('/index')->with('erroradmin', 'Aucun resultat !');
        }

        return view('admin.editerprofiladmin', compact('admin'));
 }



public function changerStatutCP($id)
{
    // Trouver l'utilisateur avec l'ID fourni
    $user = User::findOrFail($id);

    // Vérifier le rôle de l'utilisateur
    if ($user->role === 'client') {
        // Si c'est un client
        if ($user->statut === 'actif') {
            $user->statut = 'inactif';
        } else {
            $user->statut = 'actif';
        }
        $key = 'succesclient';
    } elseif ($user->role === 'expert') {
        // Si c'est un expert
        if ($user->statut === 'actif') {
            $user->statut = 'inactif';
        } else {
            $user->statut = 'actif';
        }
        $key = 'succespartenaire';
    } else {
        // Gérer d'autres rôles ici si nécessaire
        $key = 'error_role';
    }

    // Sauvegarder les modifications
    $user->save();

    // Redirection avec message en session
    return redirect()->back()->with($key, 'Statut de l\'utilisateur mis à jour avec succès.');
}




public function pageajoutclient(){
    return view('admin.ajouterclient');
}

public function pageajoutpartenaire(){
    return view('admin.ajouterpartenaire');
}

public function pagepartenaires(){

// Récupérer les utilisateurs experts (partenaires)
$partenaires = User::where('role', 'expert')->paginate(2);
//$partenaires = User::where('role', 'expert')->get();



$nombrePartenaires = User::where('role', 'expert')->count();

    return view('admin.partenaires', compact('partenaires','nombrePartenaires'));

}


public function pageclients(){

    $clients = User::where('role', 'client')->paginate(2);
//$clients = User::where('role', 'client')->get();


// Compter le nombre de clients
$nombreClients = User::where('role', 'client')->count();

    return view('admin.clients', compact('clients','nombreClients'));

}



public function pagereservations(){

    $demandes = Demande::paginate(3);
$nbdemandes = Demande::all()->count();


// Passer les partenaires et les clients à la vue 'index'
return view('admin.reservations', compact('demandes','nbdemandes'));


}


//-----------------------------------------------------------------------


}
