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
        Schema::create('reviewshipper', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_shipper')->unsigned()->nullable()->index('id_shipper');
            $table->float('average_star', 10, 0)->nullable();
            $table->integer('number_review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviewshipper');
    }
};
