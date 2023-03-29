<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vidange;

class VidangeController extends Controller
{
    public function index()
    {
        return view('vidange');
    }

    public function store(Request $request){
        
        $request->validate([
            'immatriculation' => 'required',
            'date_vidange' => 'required',
            'affectation' => 'required',
            'kilometrage' => 'required',
            'type_huile' => 'required',
            'prix_litre' => 'required',
            'total_HT' => 'required',
            'total_TTC' => 'required',
            'quantite_huile' => 'required',
        ]);

        Vidange->create([
            'immatriculation' => $request->input('immatriculation_vidange'),
            'date_vidnage' => $request->input('date_vidnage'),
            'affectation' => $request->input('Affectation'),
            'kilometrage' => $request->input('Kilometrage'),
            'type_huile' => $request->input('type_huile'),
            'prix_litre' => $request->input('litre_prix'),
            'total_HT' => $request->input('prixTC'),
            'total_TTC' => $request->input('prixTTC'),
            'quantite_huile' => $request->input('quantite_huile')
        ]);   
    }
}
