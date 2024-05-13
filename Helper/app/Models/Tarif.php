<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $fillable = ['intervention_id', 'user_id_partenaire', 'user_id_client', 'comment', 'date'];

    public function intervention() {
        return $this->belongsTo(Intervention::class);
    }

    public function partenaire() {
        return $this->belongsTo(User::class, 'user_id_partenaire');
    }

    public function client() {
        return $this->belongsTo(User::class, 'user_id_client');
    }


}
