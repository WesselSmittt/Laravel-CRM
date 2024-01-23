<?php

namespace App\Http\Controllers;

use App\Models\Persoon; 
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $aantalCliënten = Persoon::count();

        return view('dashboard', compact('aantalCliënten'));
    }
}
