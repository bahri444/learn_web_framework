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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id('id_pegawai');
            $table->foreignId('id_bagian');
            $table->string('nama', 30);
            $table->char('kontak_wa', 14);
            $table->timestamps();
            $table->foreign('id_bagian')->references('id_bagian')->on('bagians')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
};
