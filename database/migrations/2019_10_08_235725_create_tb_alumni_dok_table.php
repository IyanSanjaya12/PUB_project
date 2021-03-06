<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAlumniDokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_alumni_dok', function (Blueprint $table) {
            $table->increments('id_alumnidok');
            $table->string('file');
            $table->string('keterangan');
            $table->integer('id_angkatan')->unsigned();
            $table->integer('id_mahasiswa')->unsigned();
            $table->timestamps();
            $table->foreign('id_angkatan')->references('id_angkatan')->on('tb_angkatan');
            $table->foreign('id_mahasiswa')->references('id_mahasiswa')->on('tb_mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_alumni_dok');
    }
}
