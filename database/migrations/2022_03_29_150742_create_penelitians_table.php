<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('judul_penelitian')->nullable(false);
            $table->unsignedInteger("dosen_ketua_id")->index()->nullable(false);
            $table->string("dosen_anggota")->nullable();
            $table->string('anggota_mhs')->nullable();
            $table->unsignedInteger("jenis_hibah_id")->index()->nullable();
            $table->string('nama_mitra')->nullable();
            $table->date('mulai');
            $table->date('selesai');
            $table->year('tahun');
            $table->string('jumlah')->nullable(false);
            $table->boolean('status')->nullable(false);
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
        Schema::dropIfExists('penelitians');
    }
}
