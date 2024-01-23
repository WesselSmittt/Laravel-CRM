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
}
