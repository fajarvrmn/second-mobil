<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataiklansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataiklans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('kondisi');
            $table->integer('harga');
            $table->integer('tahun');

            $table->integer('mereks_id')->unsigned();
            $table->integer('wilayahs_id')->unsigned();
            $table->integer('akuns_id')->unsigned();
            $table->timestamps();

            $table->foreign('mereks_id')->references('id')->on('merekmobils')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('wilayahs_id')->references('id')->on('wilayahs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('akuns_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataiklans');
    }
}
