<?php

namespace App\Http\Controllers;

use App\Models\Persoon; 
use App\Models\Klant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class DashboardController extends Controller
{
    public function index()
    {
        $aantalContacten = Persoon::count();
        $aantalBedrijven = Klant::where('is_bedrijf', true)->count();

        return view('dashboard', compact('aantalContacten', 'aantalBedrijven'));
    }


public function goToKlantenOverview()
{
    return Redirect::route('klanten.index');
}
}
