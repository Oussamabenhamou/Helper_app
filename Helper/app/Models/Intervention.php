<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'user_id_client', 'duree', 'prix', 'type'];

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function client() {
        return $this->belongsTo(User::class, 'user_id_client');
    }



}
