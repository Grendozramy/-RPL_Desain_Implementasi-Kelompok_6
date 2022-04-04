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
        Schema::create('status_gizi_balitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_balita');
            $table->integer('usia_balita');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('jenis_kelamin');
            $table->string('status_gizi');
            $table->double('zscore');
            $table->string('validasi');
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
        Schema::dropIfExists('status__gizi__balitas');
    }
};
