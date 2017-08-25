<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToProductPreviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_preview', function (Blueprint $table) {
            $table->foreign('product_id', 'fk_product_preview_product_id')->references('id')->on('product')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_preview', function (Blueprint $table) {
            $table->dropForeign('fk_product_preview_product_id');
        });
    }
}
