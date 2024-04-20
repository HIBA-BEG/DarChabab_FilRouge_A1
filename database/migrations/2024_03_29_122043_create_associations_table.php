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

            $table->string('vicePresident')->nullable()->change();
            $table->string('emailVice')->nullable()->change();
            $table->string('cinVice')->nullable()->change();

            $table->string('secretaire');
            $table->string('emailSecretaire');
            $table->string('cinSecretaire');

            $table->string('secretaireAdjoint')->nullable()->change();
            $table->string('emailSecretaireAdjoint')->nullable()->change();
            $table->string('cinSecretaireAdjoint')->nullable()->change();

            $table->string('tresorier');
            $table->string('emailTresorier');
            $table->string('cinTresorier');

            $table->string('tresorierAdjoint')->nullable()->change();
            $table->string('emailTresorierAdjoint')->nullable()->change();
            $table->string('cinTresorierAdjoint')->nullable()->change();

            $table->string('conseiller1')->nullable()->change();
            $table->string('emailConseiller1')->nullable()->change();
            $table->string('cinConseiller1')->nullable()->change();

            $table->string('conseiller2')->nullable()->change();
            $table->string('emailConseiller2')->nullable()->change();
            $table->string('cinConseiller2')->nullable()->change();

            $table->string('conseiller3')->nullable()->change();
            $table->string('emailConseiller3')->nullable()->change();
            $table->string('cinConseiller3')->nullable()->change();

            $table->string('conseiller4')->nullable()->change();
            $table->string('emailConseiller4')->nullable()->change();
            $table->string('cinConseiller4')->nullable()->change();

            $table->string('conseiller5')->nullable()->change();
            $table->string('emailConseiller5')->nullable()->change();
            $table->string('cinConseiller5')->nullable()->change();

            $table->string('conseiller6')->nullable()->change();
            $table->string('emailConseiller6')->nullable()->change();
            $table->string('cinConseiller6')->nullable()->change();

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
