<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpotTable extends Migration
{
    public function up()
    {
        Schema::create('spot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id')->constrained('wisata')->onDelete('cascade');
            $table->string('nama_spot');
            $table->integer('kapasitas');
            $table->enum('status', ['tersedia', 'penuh'])->default('tersedia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot');
    }
}
