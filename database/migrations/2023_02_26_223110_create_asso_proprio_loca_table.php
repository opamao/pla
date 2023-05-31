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
        Schema::create('asso_proprio_loca', function (Blueprint $table) {
            $table->id('aplid');
            $table->unsignedBigInteger('proprio_id');
            $table->foreign('proprio_id')->references('proprioid')->on('proprietaires')->onDelete('cascade');
            $table->unsignedBigInteger('loca_id');
            $table->foreign('loca_id')->references('locaid')->on('locataires')->onDelete('cascade');
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
        Schema::dropIfExists('asso_proprio_loca');
    }
};
