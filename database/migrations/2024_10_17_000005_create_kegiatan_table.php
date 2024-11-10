<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanTable extends Migration
{
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paket_kegiatan_id')->constrained('paket_kegiatan')->onDelete('cascade');  // Menghubungkan kegiatan dengan paket
            $table->string('nama_kegiatan');  // Nama kegiatan (misalnya, permainan tradisional)
            $table->text('deskripsi')->nullable();  // Deskripsi kegiatan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}
