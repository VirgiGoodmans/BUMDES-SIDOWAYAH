<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Sesuaikan dengan title di model
            $table->text('content'); // Sesuaikan dengan content di model
            $table->string('kategori'); // Bisa menjadi enum jika kategorinya sudah jelas
            $table->date('tanggal_terbit');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
