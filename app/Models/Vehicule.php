<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'immatriculation',
        'typeVahicule',
        'marque',
        'modele',
        'etat',
        'image',
        'puissance_fiscale',
        'consommation_moyenne',
        'carburant',
   
      
        'propriete',
        'kilometrage',
        'cadence_videnge',
        'cadence_courroie',
        'cadence_dernier_courroie',
        
        'km_debut_annee',
        'km_derniere_videnge',
        'remarque',
        'admin_id',
        'statut'
    ];

    protected $dates =[
        'date_dernier_controle_technique',
        'date_1ere_immatriculation',
        'date_acquisition',
    ];

    /**
     * Get the vidanges for the car.
     */
    public function vidanges()
    {
        return $this->hasMany(Vidange::class);
    }

    /**
     * Get the reparations for the car.
     */
    public function reparations()
    {
        return $this->hasMany(Reparation::class);
    }

    /**
     * Get the missions for the car.
     */
   


    public function affectation(){
        return $this->hasMany(Affectation::class);
    }
    /**
     * Get the permanents for the car.
     */
   
    
}
