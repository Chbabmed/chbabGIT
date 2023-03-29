<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffectationsController extends Controller
{
    public function index()
    {
        return view('affectations');
    }
}
