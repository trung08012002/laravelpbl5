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
        Schema::table('reviewshipper', function (Blueprint $table) {
            $table->foreign(['id_shipper'], 'reviewshipper_ibfk_1')->references(['id'])->on('inforshipper');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviewshipper', function (Blueprint $table) {
            $table->dropForeign('reviewshipper_ibfk_1');
        });
    }
};
