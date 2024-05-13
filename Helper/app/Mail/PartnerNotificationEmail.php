<?php
namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartnerNotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $client;
    public $demande;

    public function __construct(User $client, $demande)
    {
        $this->client = $client;
        $this->demande = $demande;
    }

    public function build()
    {
        return $this->from('Projet.GL2023@gmail.com')
                    ->view('expert.partnerNotification')
                    ->with([
                        'clientName' => $this->client->nom,
                        'clientSurname' => $this->client->prenom,
                        'clientPhone' => $this->client->telephone,
                    ]);
    }
}