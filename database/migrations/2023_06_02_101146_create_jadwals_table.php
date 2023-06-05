<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rute');/*FK*/
            $table->unsignedBigInteger('id_supir');/*FK*/
            $table->unsignedBigInteger('id_truk');/*FK*/
            $table->string('id_jadwal');
            $table->string('tanggal');
            $table->timestamps();
        });

        Schema::table('jadwals', function (Blueprint $table) {
            $table->foreign('id_rute')->references('id')->on('rutes');
            $table->foreign('id_supir')->references('id')->on('supirs');
            $table->foreign('id_truk')->references('id')->on('truks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
