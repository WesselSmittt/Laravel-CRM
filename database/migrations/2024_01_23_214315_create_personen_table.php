<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonenTable extends Migration
{
    public function up()
    {
        Schema::create('personen', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam');
            $table->string('achternaam');
            $table->string('straat');
            $table->string('huisnummer');
            $table->string('postcode');
            $table->string('plaats');
            $table->string('email');
            $table->string('telefoonnummer');
            $table->string('functie');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personen');
    }
}
