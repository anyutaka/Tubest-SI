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
        Schema::create('truks', function (Blueprint $table) {
            $table->id();
            $table->string('id_truk');
            $table->string('plat_no');
            $table->string('jenis_truk');
            $table->string('kapasitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truks');
    }
};
