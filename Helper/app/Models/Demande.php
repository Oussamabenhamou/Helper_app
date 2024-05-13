<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'user_id_client', 'user_id_partenaire', 'statut'];

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function client() {
        return $this->belongsTo(User::class, 'user_id_client');
    }

    public function partenaire() {
        return $this->belongsTo(User::class, 'user_id_partenaire');
    }


}
