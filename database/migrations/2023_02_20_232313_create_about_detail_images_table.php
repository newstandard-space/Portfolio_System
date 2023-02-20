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
        Schema::create('about_detail_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('about_detail_id')->unsigned();
            $table->string('image');
            $table->foreign('about_detail_id')->references('id')->on('about_details')->onDelete('cascade');
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
        Schema::dropIfExists('about_detail_images');
    }
};