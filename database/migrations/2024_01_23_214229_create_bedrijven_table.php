<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedrijvenTable extends Migration
{
    public function up()
    {
        Schema::create('bedrijven', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_bedrijf');
            $table->string('bedrijfsnaam')->nullable();
            $table->string('kvk_nummer')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bedrijven');
    }
}

