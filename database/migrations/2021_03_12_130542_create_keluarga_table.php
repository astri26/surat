<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluarga', function (Blueprint $table) {
            $table->increments('id_keluarga');
            $table->integer('penduduk_id')->unsigned();
            $table->foreign('penduduk_id')->references('id_penduduk')->on('penduduk')->onUpdate('cascade');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('dusun');
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
        Schema::dropIfExists('keluarga');
    }
}
