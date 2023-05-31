<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maisons', function (Blueprint $table) {
            $table->id('maisonid');
            $table->string('libelle_maison');
            $table->integer('prix_maison');
            $table->longText('description_maison')->nullable();
            $table->integer('etat_maison')->default(0)->comment('0 = attente, 1 = occupe');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('tmid')->on('types_maisons')->onDelete('cascade');
            $table->unsignedBigInteger('pays_id');
            $table->foreign('pays_id')->references('paysid')->on('pays');
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('villeid')->on('villes');
            $table->unsignedBigInteger('commune_id');
            $table->foreign('commune_id')->references('communeid')->on('communes');
            $table->unsignedBigInteger('agence_id')->nullable();
            $table->foreign('agence_id')->references('id')->on('users');
            $table->unsignedBigInteger('proprio_id');
            $table->foreign('proprio_id')->references('proprioid')->on('proprietaires')->onDelete('cascade');
            $table->unsignedBigInteger('locataire_id')->nullable();
            $table->foreign('locataire_id')->references('locaid')->on('locataires');
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
        Schema::dropIfExists('maisons');
    }
};
