<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pembuat-id')->index()->nullable(false);
            $table->string('jenis-surat')->nullable(false);
            $table->integer('no-surat')->nullable(false);
            $table->integer('nama-kegiatan')->nullable(false);
            $table->unsignedInteger('kegiatan-id')->index()->nullable(false);
            $table->date('tanggal-dibuat');
            $table->string('qr');
            $table->string('file');
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
        Schema::dropIfExists('surats');
    }
}
