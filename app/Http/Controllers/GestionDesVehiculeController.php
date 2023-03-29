<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionDesVehiculeController extends Controller
{
    public function index(){
        return view('GestionDesVehicule');
    }
}
