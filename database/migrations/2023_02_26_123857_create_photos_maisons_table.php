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
        Schema::create('photos_maisons', function (Blueprint $table) {
            $table->id('pm');
            $table->string('photo_maison');
            $table->unsignedBigInteger('maison_id');
            $table->foreign('maison_id')->references('maisonid')->on('maisons')->onDelete('cascade');
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
        Schema::dropIfExists('photos_maisons');
    }
};
