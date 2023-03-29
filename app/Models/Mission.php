<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Affectation
{
    use HasFactory;

    protected $table = 'missions';

    protected $fillable = [
        'immatriculation',
        'date_aquition_location',
        'date_depart',
        'date_retour',
        'type_mission',
        'destination',
        'distance_parcourue',
        'statut'
    ];
    
    public function Affectation()
    {
        return $this->belongsTo(Affectation::class);
    }

}
