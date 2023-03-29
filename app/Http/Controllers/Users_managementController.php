<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users_managementController extends Controller
{
    public function index()
    {
        return view('users_management');
    }
}
