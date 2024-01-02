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
        Schema::table('pesan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jenis')->nullable();
            $table->foreign('id_jenis')->references('id')->on('jenis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pesan', function (Blueprint $table) {
            $table->dropForeign(['id_jenis']);
            $table->dropColumn('id_jenis');
        });
    }
};
