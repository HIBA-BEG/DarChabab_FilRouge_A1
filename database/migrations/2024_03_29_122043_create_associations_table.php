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

            $table->string('president');
            $table->string('emailPresident');
            $table->string('cinPresident');

            $table->string('vice-president');
            $table->string('emailVice');
            $table->string('cinVice');

            $table->string('secretaire');
            $table->string('emailSecretaire');
            $table->string('cinSecretaire');

            $table->string('secretaireAdjoint');
            $table->string('emailSecretaireAdjoint');
            $table->string('cinSecretaireAdjoint');

            $table->string('tresorier');
            $table->string('emailTresorier');
            $table->string('cinTresorier');

            $table->string('tresorierAdjoint');
            $table->string('emailTresorierAdjoint');
            $table->string('cinTresorierAdjoint');

            $table->string('conseiller1');
            $table->string('emailConseiller1');
            $table->string('cinConseiller1');

            $table->string('conseiller2');
            $table->string('emailConseiller2');
            $table->string('cinConseiller2');

            $table->string('conseiller3');
            $table->string('emailConseiller3');
            $table->string('cinConseiller3');

            $table->string('conseiller4');
            $table->string('emailConseiller4');
            $table->string('cinConseiller4');

            $table->string('conseiller5');
            $table->string('emailConseiller5');
            $table->string('cinConseiller5');

            $table->string('conseiller6');
            $table->string('emailConseiller6');
            $table->string('cinConseiller6');

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
