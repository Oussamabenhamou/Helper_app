<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PartenaireController extends Controller
{
    public function updateexpert(Request $request){
        $expert = session('expert');
        // dd($expert);
        // Validate the request data
        // $request->validate([
        //     'nom' => 'required|string|max:255',
        //     'prenom' => 'required|string|max:255',
        //     'adresse' => 'required|string|max:255',
        //     'telephone' => 'required|string|max:20',
        //     'email' => 'required|string|email|max:255|unique:users,email,' . $expert['id'],
        //     'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        // ], [
        //     'nom.required' => 'Please enter your name.',
        //     'prenom.required' => 'Please enter your first name.',
        //     'adresse.required' => 'Please enter your address.',
        //     'telephone.required' => 'Please enter your phone number.',
        //     'email.required' => 'Please enter your email address.',
        //     'email.unique' => 'The email address has already been taken.',
        // ]);
        // Update the user's profile information
        // $user = auth()->user();
        $user = User::find( $expert['id']);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->adresse = $request->adresse;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        echo 'image';

        
            echo 'image';
            $newImageName = time().'-'.$request->nom.'.'.$request->image->extension();
            $request->image->move(public_path('expert/img'),  $newImageName);
            $user->image = $newImageName;
        

        $request->session()->put('expert', [
            'nom' => $user->nom,
            'id' => $user->id,
            'prenom' => $user->prenom,
            'email' => $user->email,
            'telephone' => $user->telephone,
            'categorie_id' => $user->categorie_id,
            'image' => $user->image,
            'adresse' => $user->adresse,
        ]);
        
        // dd('USERS',$user->all(), 'EXPERE',$expert, 'DATA',$request->all());
        $user->save();
        // dd($user->all());

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
