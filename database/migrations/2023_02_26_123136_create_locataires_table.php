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
        Schema::create('locataires', function (Blueprint $table) {
            $table->id('locaid');
            $table->string('nom_loca');
            $table->string('prenom_loca');
            $table->string('phone_loca', 30)->unique();
            $table->string('email_loca', 100)->unique()->nullable();
            $table->string('motdepasse');
            $table->string('photo_loca')->nullable();
            $table->string('fonction')->nullable();
            $table->integer('etat_loca')->default(0)->comment('0 = attente, 1 = active');
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
        Schema::dropIfExists('locataires');
    }
};
