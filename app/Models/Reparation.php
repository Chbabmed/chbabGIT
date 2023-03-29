<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparation extends Model
{
    use HasFactory;

    protected $fillable = [
        'immatriculation',
        'date_reparation',
        'affectation',
        'designation',
        'quantity',
        'unit_price',
        'total_HT',
        'total_TTC',
        'statut',
    ];

    public function car()
    {
        return $this->belongsTo(Vehicule::class, 'immatriculation', 'immatriculation');
    }
}
