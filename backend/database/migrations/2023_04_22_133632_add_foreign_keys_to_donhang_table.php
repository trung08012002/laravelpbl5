<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donhang', function (Blueprint $table) {
            $table->foreign(['id_trangthai'], 'donhang_ibfk_1')->references(['id'])->on('trangthaidonhang');
            $table->foreign(['id_food'], 'donhang_ibfk_2')->references(['id'])->on('food');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donhang', function (Blueprint $table) {
            $table->dropForeign('donhang_ibfk_1');
            $table->dropForeign('donhang_ibfk_2');
        });
    }
};
