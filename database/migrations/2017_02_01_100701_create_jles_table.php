<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_les');
            $table->string('mulai_les');
            $table->string('selesai_les');
            $table->string('hari_les');
            $table->string('keterangan_les');
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
        Schema::dropIfExists('jles');
    }
}
