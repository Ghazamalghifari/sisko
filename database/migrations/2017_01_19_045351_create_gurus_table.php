<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama_guru');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('pendidikan');
            $table->string('agama');
            $table->string('status');
            $table->string('jabatan');
            $table->string('alamat');
            $table->string('tahun_lulus'); 
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
        Schema::dropIfExists('gurus');
    }
}
