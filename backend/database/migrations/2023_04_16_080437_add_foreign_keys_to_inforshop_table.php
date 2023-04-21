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
        Schema::table('inforshop', function (Blueprint $table) {
            $table->foreign(['id_account'], 'inforshop_ibfk_1')->references(['id'])->on('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inforshop', function (Blueprint $table) {
            $table->dropForeign('inforshop_ibfk_1');
        });
    }
};
