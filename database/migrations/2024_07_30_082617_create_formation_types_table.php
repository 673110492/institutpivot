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
        Schema::create('formation_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formation_id')->nullable();
            $table->unsignedBigInteger('type_formation_id')->nullable();
            $table->double('prix')->nullable();
            $table->string('duree')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formation_types');
    }
};
