<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipeToPaketKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paket_kegiatan', function (Blueprint $table) {
            $table->string('tipe')->after('harga')->nullable(); // Kolom tipe ditambahkan setelah harga
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paket_kegiatan', function (Blueprint $table) {
            $table->dropColumn('tipe');
        });
    }
}
