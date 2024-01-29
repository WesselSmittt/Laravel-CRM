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

public function edit(Klant $klant)
{
    return view('klanten.edit', compact('klant'));
}

public function destroy(Klant $klant)
{
    $klant->delete();
    return redirect()->route('klanten.index')->with('success', 'Klant succesvol verwijderd.');
}

public function update(Request $request, Klant $klant)
{

    $request->validate([
        'is_bedrijf' => 'required|boolean',
        'bedrijfsnaam' => 'required|string|max:255',
        'kvk_nummer' => 'nullable|string|max:20',
    ]);

    $klant->update($request->all());

    return redirect()->route('klanten.index')->with('success', 'Klant succesvol bijgewerkt.');
}



public function create()
    {
        return view('klanten.create');
    }


    public function store(Request $request)
{
    $request->validate([
        'bedrijfsnaam' => 'required|string|max:255',
        'kvk_nummer' => 'nullable|string|max:20',
        // Voeg andere validatieregels toe voor de overige velden
    ]);

    Klant::create($request->all());

    return redirect()->route('klanten.index')->with('success', 'Klant succesvol toegevoegd.');
}

public function show($id)
    {
        $klant = Klant::find($id);

        return view('klanten.show', compact('klant'));
    }
}
