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
        Schema::create('rutes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_gudang');
            $table->unsignedBigInteger('id_outlet');
            $table->string('id_rute');
            $table->string('jarak');
            $table->string('waktu_tempuh');
            $table->timestamps();
        });

        Schema::table('rutes', function (Blueprint $table) {
            $table->foreign('id_gudang')->references('id')->on('gudangs');
            $table->foreign('id_outlet')->references('id')->on('outlets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutes');
    }
};
