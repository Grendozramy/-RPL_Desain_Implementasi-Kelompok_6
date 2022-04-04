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
        Schema::create('data_imunisasi_jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('dataimunisasi');
            $table->string('vaksinimunisasi');
            $table->integer('usia_balita');
            $table->date('tanggal');
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
        Schema::dropIfExists('data__imunisasi__jadwals');
    }
};
