<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebutuhans', function (Blueprint $table) {
            $table->id('id_kebutuhan');
            $table->foreignId('id_pegawai');
            $table->enum('jns_kbthn_teknis', ['SIMRS', 'NON-SIMRS']);
            $table->string('kbthn_tentang', 100);
            $table->string('deskripsi_kbthn', 150);
            $table->string('fotoVideo', 50);
            $table->timestamps();
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawais')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kebutuhans');
    }
};
