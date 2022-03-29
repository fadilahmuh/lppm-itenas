<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsentifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insentifs', function (Blueprint $table) {
            $table->id();
            $table->string('judul_publikasi')->nullable(false);
            $table->unsignedInteger('jenis_insentif_id')->index()->nullable(false);
            $table->unsignedInteger('jenis_publikasi_id')->index()->nullable(false);
            $table->unsignedInteger("penulis_ketua_id")->index()->nullable(false);
            $table->unsignedInteger("penulis_anggota_id")->index()->nullable(false);
            $table->string('jumlah')->nullable(false);
            $table->date('tahun');
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
        Schema::dropIfExists('insentifs');
    }
}
