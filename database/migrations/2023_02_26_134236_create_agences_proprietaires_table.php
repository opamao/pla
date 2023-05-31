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
        Schema::create('agences_proprietaires', function (Blueprint $table) {
            $table->id('apid');
            $table->unsignedBigInteger('agence_id');
            $table->foreign('agence_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('agences_proprietaires');
    }
};
