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
        Schema::table('vouncher', function (Blueprint $table) {
            $table->foreign(['id_user'], 'vouncher_ibfk_1')->references(['id'])->on('inforuser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vouncher', function (Blueprint $table) {
            $table->dropForeign('vouncher_ibfk_1');
        });
    }
};
