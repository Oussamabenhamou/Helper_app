<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intervention;
use App\Models\User;
use App\Models\CommentNoteClient;
use App\Models\CommentNoteIntervention;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    function homepage(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        $coupons = [
            (object)[
                'name' => 'SAVE5$',
                'description' => 'Get 5$ off on your next service',
                'discount' => '5$',
                'validity' => 'Expires on 2024-06-01',
            ],
            (object)[
                'name' => 'SAVE10$',
                'description' => 'Get 10$ off on your next service',
                'discount' => '10$',
                'validity' => 'Expires on 2024-06-01',
            ],
            (object)[
                'name' => 'SAVE15$',
                'description' => 'Get 15$ off on your next service',
                'discount' => '15$',
                'validity' => 'Expires on 2024-06-01',
            ],
        ];
        $demands = DB::select("
            SELECT demandes.id as id, demandes.user_id_client as id_client ,demandes.user_id_partenaire as id_expert,demandes.statut as statut, users.nom as nom, users.image as image,
             users.prenom as prenom
            ,services.nom AS service_name
            ,demandes.created_at AS date
            FROM demandes
            JOIN users ON demandes.user_id_partenaire = users.id
            JOIN services ON demandes.service_id = services.id
            LIMIT 3;
        ");

        $comments = CommentNoteClient::query()
            ->where('comment_note_clients.user_id_client', $client['id'])
            ->join('users as u', 'comment_note_clients.user_id_client', '=', 'u.id')
            ->selectRaw("CONCAT(u.nom, ' ', u.prenom) as name, u.image as image, comment_note_clients.comment as comment")
            ->orderBy('comment_note_clients.date', 'desc') 
            ->limit(3) 
            ->get();

        return view('client.index', compact('demands','coupons','comments'));
    }
    
    function settingspage(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        return view('client.settings');
    }
    function updateProfile(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        return view('client.profile');
    }
    function serviespage(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        return view('client.services');
    }
    function listexpertpage(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        return view('client.listexpert');
    }
    function detailspage(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        return view('client.details');
    }
    function details1page(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        return view('client.details1');
    }
    function details2page(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        return view('client.details2');
    }
    function profilepage(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        return view('client.profilepage');
    }   
    function demands(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        return view('client.demands');
    }
    function profileexpertpage(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        return view('client.app-profile');
    }
    
    
    public function updateInfo(Request $request){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        // Validate the request data
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users,email,' . $client['id'],
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nom.required' => 'Please enter your name.',
            'prenom.required' => 'Please enter your first name.',
            'adresse.required' => 'Please enter your address.',
            'telephone.required' => 'Please enter your phone number.',
            'email.required' => 'Please enter your email address.',
            'email.unique' => 'The email address has already been taken.',
        ]);
        // Update the user's profile information
        // $user = auth()->user();
        $user = User::find( $client['id']);
        // dd($user->nom);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->adresse = $request->adresse;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        if ($request->hasFile('image')) {
            $newImageName = time().'-'.$request->nom.'.'.$request->image->extension();
            $request->image->move(public_path('client/img'),  $newImageName);
            $user->image = $newImageName;
        }
        $request->session()->put('client', [
            'nom' => $user->nom,
            'id' => $user->id,
            'prenom' => $user->prenom,
            'email' => $user->email,
            'telephone' => $user->telephone,
            'categorie_id' => $user->categorie_id,
            'image' => $user->image,
            'adresse' => $user->adresse,
        ]);
        
        
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    
    public function updatePassword(Request $request){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        
        // Validate the request data
        $request->validate([
            'password' => 'required|string|min:4|confirmed',
        ]);

        // Update the user's password
        $client = session('client');
        $user = User::find ($client['id']);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->back()->with('successPassword', 'Password updated successfully!');
    }

    public function getComment(){
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
 
        $userId = session('client')['id'];                                             

        $interventionsWithoutComment = DB::select("SELECT u.nom as user_nom , u.prenom as user_prenom, u.id as partenaire_id ,s.nom as service_nom ,i.created_at as date ,i.id as intervention_id 
        FROM interventions i 
        LEFT JOIN comment_note_interventions c ON i.id = c.intervention_id 
        JOIN services s ON i.service_id = s.id 
        JOIN users u ON s.user_id = u.id 
        WHERE c.id  is null 
        and i.user_id_client = ?", [$userId]);

        return view('client.Comments', compact('interventionsWithoutComment'));
    }

    public function saveClientComment(Request $request)
    {
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        // dd($request->all());
        // Validate the incoming request data
        $validatedData = $request->validate([
            'comment' => 'required|string',
            'partenaire_id' => 'required|numeric',
            'rating' => 'numeric',
            'client_id' => 'required|numeric',
            'intervention_id' => 'required|numeric',
            'date' => 'required|date', 
        ]);

        // Save the comment to the database
        $comment = new CommentNoteIntervention();
        $comment->intervention_id = $validatedData['intervention_id'];
        $comment->user_id_partenaire = $validatedData['partenaire_id'];
        $comment->user_id_client = $validatedData['client_id'];
        $comment->comment = $validatedData['comment'];
        $comment->date = $validatedData['date'];
        $comment->rating = $validatedData['rating'];
        $comment->save();

        return redirect()->back()->with('success', 'Comment Posted successfully!');
    }

    

    public function partenaireProfile(Request $request)
    {   
        $client = session('client');
        if (!$client) {
            return redirect('/login'); 
        }
        $comments = DB::select("SELECT c.*,u.nom as nom,u.prenom as prenom,u.image as image FROM comment_note_interventions c  
        join users u on u.id=c.user_id_client 
        join interventions i on c.intervention_id=i.id
        WHERE user_id_partenaire = ?
        and DATEDIFF(NOW(), i.created_at) > 7",[$request->pid]);
        $partenaire = User::find($request->pid);
        $category = DB::select("SELECT nom FROM categories WHERE id = ?",[$partenaire->categorie_id]);
        $interventionsWithoutComment = Intervention::query()
        ->where('interventions.user_id_client', $client['id']) 
        ->where('u.id', $partenaire->id) // Add the condition for partenaire_id
        ->join('services as s', 'interventions.service_id', '=', 's.id')
        ->join('users as u', 's.user_id', '=', 'u.id')
        ->leftJoin('comment_note_interventions as cni', 'cni.intervention_id', '=', 'interventions.id')
        ->select('u.nom as user_nom', 'cni.id as cnid', 'u.prenom as user_prenom', 'u.id as partenaire_id', 's.nom as service_nom', 'interventions.id as intervention_id', 'interventions.created_at as date', 'cni.id as comment_id')
        ->whereNull('cni.id')
        ->get();
        return view('client.partenaire-profile', compact('comments', 'partenaire', 'category','client','interventionsWithoutComment'));
    }
    public function logout(){
        session()->forget('client');
        return redirect('/');
    }
  
}
