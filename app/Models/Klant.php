<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{

    protected $table = 'klanten';

    protected $fillable = [
        'is_bedrijf',
        'bedrijfsnaam',
        'kvk_nummer',
    ];

    
    public function edit(Klant $klant)
    {
        return view('klanten.edit', compact('klant'));
    }
    

    public function contacten()
    {
        return $this->hasMany(Contact::class);
    }

    public function gesprekken()
    {
        return $this->hasMany(Gesprek::class);
    }
}
