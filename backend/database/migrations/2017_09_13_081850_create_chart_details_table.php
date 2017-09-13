<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chart_id')->unsigned();
            $table->integer('product_id');
            $table->integer('number_of_items')->default('1');
            $table->timestamps();
        });

        Schema::table('chart_details', function (Blueprint $table) {
            $table->foreign('chart_id', 'fk_chart_details_chart_id')->references('id')->on('charts');
            $table->foreign('product_id', 'fk_chart_details_product_id')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chart_details');
    }
}
