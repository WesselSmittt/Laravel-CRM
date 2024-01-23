<?php

namespace App\Http\Controllers;

use App\Models\Persoon; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class DashboardController extends Controller
{
    public function index()
    {
        $aantalCliënten = Persoon::count();

        return view('dashboard', compact('aantalCliënten'));
    }


public function goToKlantenOverview()
{
    return Redirect::route('klanten.index');
}
}
