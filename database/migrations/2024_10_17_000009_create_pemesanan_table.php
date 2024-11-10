<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('spot_id')->nullable()->constrained('spot')->onDelete('cascade');  // Untuk pemesanan spot
            $table->foreignId('paket_id')->nullable()->constrained('paket_kegiatan')->onDelete('cascade');  // Untuk pemesanan paket
            $table->date('tanggal');
            $table->time('jam');
            $table->enum('status', ['menunggu', 'disetujui', 'dibatalkan'])->default('menunggu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
