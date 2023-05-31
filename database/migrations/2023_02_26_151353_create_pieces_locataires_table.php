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
        Schema::create('pieces_locataires', function (Blueprint $table) {
            $table->id('plid');
            $table->string('type_piece', 50);
            $table->string('photo_piece');
            $table->unsignedBigInteger('locataire_id');
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
        Schema::dropIfExists('pieces_locataires');
    }
};
