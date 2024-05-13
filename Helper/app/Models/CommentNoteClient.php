<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentNoteClient extends Model
{
    use HasFactory;

    protected $fillable = ['user_id_partenaire', 'user_id_client', 'comment', 'date'];

    public function partenaire() {
        return $this->belongsTo(User::class, 'user_id_partenaire');
    }

    public function client() {
        return $this->belongsTo(User::class, 'user_id_client');
    }

}
