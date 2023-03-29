<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReparationsController extends Controller
{
    public function index()
    {
        return view('reparations');
    }
}
