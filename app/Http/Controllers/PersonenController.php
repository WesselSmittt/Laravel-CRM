<?php

namespace App\Http\Controllers;

use App\Models\Personen;
use Illuminate\Http\Request;

class PersonenController extends Controller
{
    public function index()
    {
        $contacten = Personen::all();
        return view('contacten.index', compact('contacten'));
    }

    public function create()
    {
        return view('contacten.create');
    }

    public function store(Request $request)
    {
        Personen::create($request->all());
        return redirect()->route('contacten.index');
    }

    public function show($id)
    {
        $contact = Personen::findOrFail($id);
        return view('contacten.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Personen::findOrFail($id);
        return view('contacten.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Personen::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contacten.index');
    }

    public function destroy($id)
    {
        $contact = Personen::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacten.index');
    }
}
