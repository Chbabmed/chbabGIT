<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class List_VehiculeController extends Controller
{
    public function index(){
        return view('List_Vehicule');
    }
}
