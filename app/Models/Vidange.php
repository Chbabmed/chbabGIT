<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vidange extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'immatriculation',
        'date_vidange',
        'kilometrage',
        'affectation',
        'type_huile',
        'quantite_huile',
        'prix_litre',
        'prix_HT',
        'prix_TTC',
    ];

    public function car()
    {
        return $this->belongsTo(Vehicule::class, 'immatriculation', 'immatriculation');
    }
}
