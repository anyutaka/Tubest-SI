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
        Schema::create('gudangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');/*FK*/
            $table->string('id_gudang');
            $table->string('nama_gudang');
            $table->string('alamat_gudang');
            $table->bigInteger('kapasitas');
            $table->bigInteger('jumlah_barang');
            $table->timestamps();
        });

        Schema::table('gudangs', function (Blueprint $table) {
            $table->foreign('id_barang')->references('id')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gudangs');
    }
};
