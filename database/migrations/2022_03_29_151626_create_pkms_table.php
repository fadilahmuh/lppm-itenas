<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkms', function (Blueprint $table) {
            $table->id();
            $table->string('judul_pkm')->nullable(false);
            $table->unsignedInteger("dosen_ketua_id")->index()->nullable(false);
            $table->unsignedInteger("dosen_anggota_id")->index()->nullable();
            $table->string('anggota_mhs')->nullable();
            $table->unsignedInteger("nama_hibah_id")->index()->nullable();
            $table->string('nama_mitra')->nullable();
            $table->date('mulai');
            $table->date('selesai');
            $table->date('tahun');
            $table->string('jumlah')->nullable(false);
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pkms');
    }
}
