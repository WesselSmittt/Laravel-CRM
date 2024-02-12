<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personen extends Model
{
    use HasFactory;
    
    protected $table = 'personen';

    protected $fillable = [
        'voornaam',
        'achternaam',
        'straat',
        'huisnummer',
        'postcode',
        'plaats',
        'email',
        'telefoonnummer',
        'functie',
    ];

    public function klant()
    {
        return $this->belongsTo(Klant::class);
    }
}
