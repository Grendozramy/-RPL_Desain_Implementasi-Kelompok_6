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
        Schema::create('data_imunisasi_posyandus', function (Blueprint $table) {
            $table->id();
            $table->string('dataimunisasi');
            $table->date('jadwal');
            $table->longText('nama_posyandu');
            $table->string('tempat');
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
        Schema::dropIfExists('data__imunisasi__posyandus');
    }
};
