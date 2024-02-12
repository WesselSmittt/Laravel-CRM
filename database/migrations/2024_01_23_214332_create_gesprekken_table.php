<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGesprekkenTable extends Migration
{
    public function up()
    {
        Schema::create('gesprekken', function (Blueprint $table) {
            $table->id();
            $table->date('gesprek_datum');
            $table->time('gesprek_tijd');
            $table->string('gesproken_met');
            $table->text('notitie_gesprek')->nullable();
            $table->unsignedBigInteger('persoon_id');
            $table->foreign('persoon_id')->references('id')->on('personen')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gesprekken');
    }
}
