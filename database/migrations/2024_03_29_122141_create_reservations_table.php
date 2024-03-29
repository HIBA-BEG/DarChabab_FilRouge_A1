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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salle_id')->constrained('salles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('association_id')->constrained('associations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('activite_id')->constrained('activites')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('startTime');
            $table->dateTime('endTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
