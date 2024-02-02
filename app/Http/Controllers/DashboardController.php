<?php

namespace App\Http\Controllers;

use App\Models\Personen; 
use App\Models\Klant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class DashboardController extends Controller
{
    public function index()
    {
        $aantalContacten = Personen::count();
        $aantalBedrijven = Klant::where('is_bedrijf', true)->count();

        return view('dashboard', compact('aantalContacten', 'aantalBedrijven'));
    }


public function goToKlantenOverview()
{
    return Redirect::route('klanten.index');
}
}
