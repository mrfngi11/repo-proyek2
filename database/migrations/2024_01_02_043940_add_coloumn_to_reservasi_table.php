<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reservasi', function (Blueprint $table) {
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('jumlah_kucing')->default(1);
        });
    }

    public function down()
    {
        Schema::table('reservasi', function (Blueprint $table) {
            $table->dropColumn(['check_in', 'check_out', 'jumlah_kucing']);
        });
    }

};
