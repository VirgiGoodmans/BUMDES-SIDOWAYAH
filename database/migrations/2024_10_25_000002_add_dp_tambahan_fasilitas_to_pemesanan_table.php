// database/migrations/2024_10_25_000002_add_dp_tambahan_fasilitas_to_pemesanan_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->integer('dp')->nullable();
            $table->boolean('sound_system')->default(false);
            $table->boolean('tikar')->default(false);
        });
    }

    public function down() {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->dropColumn(['dp', 'sound_system', 'tikar']);
        });
    }
};
