<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
    use HasFactory;

    protected $fillable = ['user_id_partenaire', 'date', 'dispo_matin', 'dispo_soir'];
//   hanged this
public function service() {
    return $this->belongsTo(Service::class, 'service_id');
}



}
