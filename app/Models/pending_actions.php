<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pending_actions extends Model
{
    use HasFactory;

    use HasFactory;

    // Indiquer la table correspondante dans la base de données
    protected $table = 'pendingaction';

    // Définir les champs pouvant être remplis par l'utilisateur
    protected $fillable = [
        'user_id',
        'action_type',
        'action_data',
        'statut',
    ];

    // Définir les relations avec les autres modèles
    public function subAdmin()
    {
        return $this->belongsTo(User::class, 'sub_admin_id');
    }
}
