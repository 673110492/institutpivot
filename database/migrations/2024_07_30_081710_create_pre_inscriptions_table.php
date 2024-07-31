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
        Schema::create('pre_inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('email')->unique();
            $table->integer('telephone')->unique();
            $table->unsignedBigInteger('type_formation_id')->nullable();
            $table->unsignedBigInteger('formation_id')->nullable();
            $table->boolean('statut')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_inscriptions');
    }
};
