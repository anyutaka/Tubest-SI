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
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');/*FK*/
            $table->unsignedBigInteger('id_gudang');
            $table->unsignedBigInteger('id_outlet');
            $table->unsignedBigInteger('id_rute');/*FK*/
            $table->unsignedBigInteger('id_supir');/*FK*/
            $table->unsignedBigInteger('id_truk');/*FK*/
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_jadwal');
            $table->unsignedBigInteger('id_pengiriman');
            $table->timestamps();
        });

        Schema::table('dashboards', function (Blueprint $table) {
            $table->foreign('id_barang')->references('id')->on('barangs');
            $table->foreign('id_gudang')->references('id')->on('gudangs');
            $table->foreign('id_outlet')->references('id')->on('outlets');
            $table->foreign('id_rute')->references('id')->on('rutes');
            $table->foreign('id_supir')->references('id')->on('supirs');
            $table->foreign('id_truk')->references('id')->on('truks');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
            $table->foreign('id_jadwal')->references('id')->on('jadwals');
            $table->foreign('id_pengiriman')->references('id')->on('pengirimen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboards');
    }
};
