<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('paket_kegiatan', function (Blueprint $table) {
            $table->integer('harga')->nullable(); // Tipe integer untuk harga
        });
    }


    public function down()
    {
        Schema::table('paket_kegiatan', function (Blueprint $table) {
            $table->dropColumn('harga');  // Menghapus kolom jika dibutuhkan
        });
    }

};
