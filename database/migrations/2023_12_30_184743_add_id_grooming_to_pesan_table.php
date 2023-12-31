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
            $table->unsignedBigInteger('id_grooming')->nullable();
            $table->foreign('id_grooming')->references('id')->on('grooming');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pesan', function (Blueprint $table) {
            $table->dropForeign(['id_grooming']);
            $table->dropColumn('id_grooming');
        });
    }
};
