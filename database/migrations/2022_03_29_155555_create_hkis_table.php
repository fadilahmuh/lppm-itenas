<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHkisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hkis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hki')->nullable(false);
            $table->string('jenis_hki');
            $table->unsignedInteger("penulis_ketua_id")->index()->nullable(false);
            $table->string("penulis_anggota")->nullable();
            $table->string('jumlah')->nullable(false);
            $table->year('tahun');
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
        Schema::dropIfExists('hkis');
    }
}
