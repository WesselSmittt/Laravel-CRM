<?php

// database/seeders/PersonenSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personen;
use Faker\Factory as Faker;

class PersonenSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Aantal te genereren fake personen
        $aantalPersonen = 20;

        for ($i = 0; $i < $aantalPersonen; $i++) {
            Personen::create([
                'voornaam' => $faker->firstName,
                'achternaam' => $faker->lastName,
                'straat' => $faker->streetName,
                'huisnummer' => $faker->buildingNumber,
                'postcode' => $faker->postcode,
                'plaats' => $faker->city,
                'email' => $faker->email,
                'telefoonnummer' => $faker->phoneNumber,
                'functie' => $faker->jobTitle,
                'klant_id' => 1,

            ]);
        }
    }
}

