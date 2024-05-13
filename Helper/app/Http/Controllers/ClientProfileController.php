<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientProfileController extends Controller
{
    public function showProfile()
    {
        // Retrieve the user ID from the session
        $userId = session('client')['id'];


        // Fetch comments from the database where user_id_client is the current user's ID
        $comments = DB::select("SELECT * 
            FROM comment_note_clients c
            JOIN interventions i ON i.id = c.intervention_id
            WHERE c.user_id_client = ? 
            AND DATEDIFF(NOW(), i.created_at) > 7;", [$userId]
        );
        $user = DB::select("SELECT nom ,prenom,adresse,ville,image,email,telephone FROM users WHERE id = ?", [$userId]);
        // Fetch the expert's ID from the comments table
        $expertIds = array_unique(array_column($comments, 'user_id_partenaire'));

        // Fetch expert's name and last name from the users table
        $experts = DB::table('users')
                    ->select('nom', 'prenom', 'id')
                    ->whereIn('id', $expertIds)
                    ->get();

        // Pass comments data and experts data to the view
        return view('client.profilepage', [
            'comments' => $comments,
            'experts' => $experts,
            'user' => $user
        ]);
    }
}
