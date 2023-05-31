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
        Schema::create('paiements_proprietaires', function (Blueprint $table) {
            $table->id('ppid');
            $table->integer('montant_pp');
            $table->integer('etat_pp')->default(0)->comment('0 = attente, 1 = payer, 2 = erreur systeme, 3 = annuler, 4 = rembourser');
            $table->text('retour_paiement')->nullable();
            $table->string('type_paiement')->comment('mobile money, carte visa, virement, etc');
            $table->unsignedBigInteger('maison_id');
            $table->foreign('maison_id')->references('maisonid')->on('maisons')->onDelete('cascade');
            $table->unsignedBigInteger('locataire_id');
            $table->foreign('locataire_id')->references('locaid')->on('locataires');
            $table->unsignedBigInteger('proprio_id');
            $table->foreign('proprio_id')->references('proprioid')->on('proprietaires')->onDelete('cascade');
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
        Schema::dropIfExists('paiements_proprietaires');
    }
};
