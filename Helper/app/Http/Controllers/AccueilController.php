<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    
// Les fonction pour renvoyer chaque page qui se trouve a l'accueil

public function indexpage(){

    return view('accueil.index');
}

public function loginpage(){

    return view('accueil.login');
}

public function registerpage(){

    return view('accueil.register');
}

public function pricingpage(){

    return view('accueil.pricing');
}

public function contactpage(){

    return view('accueil.contact');
}

public function servicespage(){

    return view('accueil.services');
}

public function aboutpage(){

    return view('accueil.about');
}

// La fonction ajouter

public function adminpage(){

    return view('admin.index');
}


public function bonjour(){

    return view('admin.addy');
}


}
