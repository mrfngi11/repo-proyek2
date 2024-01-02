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
            $table->unsignedBigInteger('id_kondisi')->nullable();
            $table->foreign('id_kondisi')->references('id')->on('kondisi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pesan', function (Blueprint $table) {
            $table->dropForeign(['id_kondisi']);
            $table->dropColumn('id_kondisi');
        });
    }
};
