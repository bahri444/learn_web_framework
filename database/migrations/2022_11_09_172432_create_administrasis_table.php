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
        Schema::create('administrasis', function (Blueprint $table) {
            $table->id('id_adm');
            $table->foreignId('id_kebutuhan');
            $table->enum('urgenci', ['urgent', 'medium', 'low']);
            $table->string('kategori');
            $table->enum('progres', ['dipelajari', 'dikerjakan', 'selesai', 'dicanangkan']);
            $table->string('pic');
            $table->timestamps();
            $table->foreign('id_kebutuhan')->references('id_kebutuhan')->on('kebutuhans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrasis');
    }
};
