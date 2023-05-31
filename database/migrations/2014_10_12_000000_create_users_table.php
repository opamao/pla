<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('phone', 30)->unique();
            $table->string('type', 20)->comment('admin, agence');
            $table->string('registre', 30)->nullable();
            $table->string('adresse', 100)->nullable();
            $table->string('localisation')->comment('decrire exactement ou est situé l\'agence');
            $table->string('photo')->nullable();
            $table->string('nom_agence')->nullable();
            $table->longText('description_agence')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('etat_agence')->default('0')->comment('0 = attente, 1 = valide');
            $table->unsignedBigInteger('pays_id');
            $table->foreign('pays_id')->references('paysid')->on('pays')->onDelete('cascade');
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('villeid')->on('villes')->onDelete('cascade');
            $table->unsignedBigInteger('commune_id');
            $table->foreign('commune_id')->references('communeid')->on('communes')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
