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
        Schema::create('propertis', function (Blueprint $table) {
            $table->id();
            $table->text('alamat');
            $table->string('tipe');
            $table->integer('jumlah_kamar');
            $table->integer('kamar_mandi');
            $table->string('fasilitas');
            $table->string('harga');
            $table->string('status');
            $table->date('tanggal_listing');
            $table->foreignId('agenId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propertis');
    }
};
