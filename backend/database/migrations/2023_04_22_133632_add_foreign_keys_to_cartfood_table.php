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
        Schema::table('cartfood', function (Blueprint $table) {
            $table->foreign(['id_shop'], 'cartfood_ibfk_1')->references(['id'])->on('inforshop');
            $table->foreign(['id_food'], 'cartfood_ibfk_3')->references(['id'])->on('food');
            $table->foreign(['id_cart'], 'cartfood_ibfk_2')->references(['id'])->on('cart');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartfood', function (Blueprint $table) {
            $table->dropForeign('cartfood_ibfk_1');
            $table->dropForeign('cartfood_ibfk_3');
            $table->dropForeign('cartfood_ibfk_2');
        });
    }
};
