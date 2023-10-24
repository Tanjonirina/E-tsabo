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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('Dnaissance');
            $table->string('age');
            $table->string('adresse');
            $table->string('contact');
            $table->string('email')->unique();
            $table->string('nationalite');
            $table->string('maladie');
            $table->string('nomF');
            $table->string('AdresseF');
            $table->date('date_entre');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
