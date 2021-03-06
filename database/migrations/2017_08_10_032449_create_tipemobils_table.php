<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipemobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tipe');
            $table->integer('mereks_id')->unsigned();
            $table->timestamps();

             $table->foreign('mereks_id')->references('id')->on('merekmobils')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipes');
    }
}
