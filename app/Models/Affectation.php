<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;
    protected $fillable = [
        'immatriculation',
        'cin',
        'first_name',
        'last_name',
        'job',
        'phone',
        'status',
        'statut'
    ];

    

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'immatriculation', 'immatriculation');
    }
    public function Conducteur()
    {
        return $this->belongsTo(Conducteur::class);
    }
    public function mission(){
        return $this->hasMany(Mission::class);
    }
    public function permanent(){
        return $this->hasMany(Permanent::class);
    }

}
