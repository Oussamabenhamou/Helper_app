<?php

namespace App\Mail;

use App\Models\Demande;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StatusUpdatedEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $demande;
    public $user;

    public function __construct(Demande $demande, User $user)
    {
        $this->demande = $demande;
        $this->user = $user;
    }

    public function build()
    {
        return $this->from('Projet.GL2023@gmail.com')
                    ->view('expert.mail_template')
                    ->with([
                        'demandeId' => $this->demande->id,
                        'newStatus' => $this->demande->statut,
                        'userName' => $this->user->name
                    ]);
    }
}