<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klant;

class KlantController extends Controller
{

public function index()
{
    $klanten = Klant::all();
    return view('klanten.index', compact('klanten'));
}

}
