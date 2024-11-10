<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Pengguna yang memberikan feedback
            $table->foreignId('wisata_id')->nullable()->constrained('wisata')->onDelete('cascade');  // Wisata yang diberi feedback (opsional)
            $table->foreignId('paket_id')->nullable()->constrained('paket_kegiatan')->onDelete('cascade');  // Paket yang diberi feedback (opsional)
            $table->text('komentar');  // Umpan balik dari user
            $table->tinyInteger('rating')->unsigned()->default(5);  // Skala rating (1-5)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
