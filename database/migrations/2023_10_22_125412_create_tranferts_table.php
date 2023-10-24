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
        Schema::create('tranferts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_petient");
            $table->foreign('id_petient')->references('id')->on('patients')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger("id_personnel");
            $table->foreign('id_personnel')->references('id')->on('personnels')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tranferts');
    }
};
