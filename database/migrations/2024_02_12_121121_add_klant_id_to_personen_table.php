<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('personen', function (Blueprint $table) {
            $table->foreignId('klant_id')->constrained('klanten')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personen', function (Blueprint $table) {
            $table->dropForeign(['klant_id']);
            $table->dropColumn('klant_id');
        });
    }
};
