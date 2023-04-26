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
        Schema::create('cartfood', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_shop')->unsigned()->nullable()->index('id_shop');
            $table->integer('id_cart')->unsigned()->nullable()->index('id_cart');
            $table->integer('id_vouncher')->unsigned()->nullable();
            $table->integer('id_food')->unsigned()->nullable()->index('id_food');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartfood');
    }
};
