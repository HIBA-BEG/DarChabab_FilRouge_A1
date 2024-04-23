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
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('type', ['Nationale','Régionale','Locale'])->default('Locale');
            $table->string('origine');
            $table->string('domaine');
            $table->string('description');
            
            // $table->string('facebookLink');
            // $table->string('instagramLink');
            // $table->string('twitterLink');

            $table->string('president');
            $table->string('emailPresident');
            $table->string('cinPresident');

            $table->string('vicePresident')->nullable();
            $table->string('emailVice')->nullable();
            $table->string('cinVice')->nullable();

            $table->string('secretaire');
            $table->string('emailSecretaire');
            $table->string('cinSecretaire');

            $table->string('secretaireAdjoint')->nullable();
            $table->string('emailSecretaireAdjoint')->nullable();
            $table->string('cinSecretaireAdjoint')->nullable();

            $table->string('tresorier');
            $table->string('emailTresorier');
            $table->string('cinTresorier');

            $table->string('tresorierAdjoint')->nullable();
            $table->string('emailTresorierAdjoint')->nullable();
            $table->string('cinTresorierAdjoint')->nullable();

            $table->string('conseiller1')->nullable();
            $table->string('emailConseiller1')->nullable();
            $table->string('cinConseiller1')->nullable();

            $table->string('conseiller2')->nullable();
            $table->string('emailConseiller2')->nullable();
            $table->string('cinConseiller2')->nullable();

            $table->string('conseiller3')->nullable();
            $table->string('emailConseiller3')->nullable();
            $table->string('cinConseiller3')->nullable();

            $table->string('conseiller4')->nullable();
            $table->string('emailConseiller4')->nullable();
            $table->string('cinConseiller4')->nullable();

            $table->string('conseiller5')->nullable();
            $table->string('emailConseiller5')->nullable();
            $table->string('cinConseiller5')->nullable();

            $table->string('conseiller6')->nullable();
            $table->string('emailConseiller6')->nullable();
            $table->string('cinConseiller6')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associations');
    }
};
