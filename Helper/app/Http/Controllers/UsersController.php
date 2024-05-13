<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;


class UsersController extends Controller
{

    public function login(Request $request) {

        $incomingFields = $request->validate([
        'email' => 'required',
        'password' => 'required'

        ]);

        if(auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password'] ])) {

        $request->session()->regenerate();
        $user = auth()->user();

        $userData = [
            'nom' => $user->nom,
            'id' => $user->id,
            'prenom' => $user->prenom,
            'email' => $user->email,
            'telephone' => $user->telephone,
            'categorie_id' => $user->categorie_id,
            'image' => $user->image,
            'adresse' => $user->adresse,
        ];



     /*   $request->session()->put([
            'nom' => $user->nom,
            'id' => $user->id,
            'prenom' => $user->prenom,
            'email' => $user->email,
            'telephone' => $user->telephone,
            'image' => $user->image


        ]);   */

        if ($user->role === 'admin') {
             $request->session()->put('admin', $userData);
             return redirect('/index');
        }
        elseif($user->role === 'expert'){
             $request->session()->put('expert', $userData);
            return redirect('/dashboard');
        }
        elseif($user->role === 'client'){
             $request->session()->put('client', $userData);
            return redirect('/homeclient');
        }



    }  else {
        return redirect('/login')->with('failure_login', 'Email ou mot de passe incorrect');
   }
}



    public function registerExpert(Request $request)
{
     // Valider les données du formulaire
     $validatedData = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:users|max:255',
        'telephone' => 'required|string|max:255',
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
    $user->telephone = $validatedData['telephone'];
    $user->adresse = $validatedData['adresse'];
    $user->ville = $validatedData['ville'];
    $user->categorie_id = $validatedData['categorie_id'];
    $user->password = bcrypt($validatedData['password']); // Assurez-vous d'ajouter le mot de passe de manière sécurisée
    $user->role ='expert';
    // Enregistrer l'utilisateur dans la base de données
    // $user->save();

    // Enregistrez l'utilisateur dans la base de données
if ($user->save()) {
    return redirect()->back()->with('success', 'Your registration has been submitted successfully. Thank you!');
} else {
    return redirect()->back()->with('failure', 'Your registration hasn\'t been submitted successfully. Thank you!');
}


}




public function registerClient(Request $request){
    // Validez les données soumises
    $validatedData = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email|unique:users',
        'tel' => 'required',
        'password' => 'required|min:5',
    ]);

    // Créez un nouvel utilisateur avec les données validées
    $user = new User([
        'nom' => $validatedData['firstname'],
        'prenom' => $validatedData['lastname'],
        'email' => $validatedData['email'],
        'telephone' => $validatedData['tel'],
        'password' => bcrypt($validatedData['password']),
        'role' => 'client',
    ]);

    // Enregistrez l'utilisateur dans la base de données
    $user->save();
    return redirect('/register')->with('success', 'Your registration has been submitted successfully. Thank you!');

}



}
