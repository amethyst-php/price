<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.price.data.price.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price_rule_id')->unsigned()->nullable();
            $table->foreign('price_rule_id')->references('id')->on(Config::get('amethyst.price-rule.data.price-rule.table'));
            $table->integer('target_id')->unsigned()->nullable();
            $table->foreign('target_id')->references('id')->on(Config::get('amethyst.target.data.target.table'));
            $table->float('price');
            $table->string('priceable_type');
            $table->integer('priceable_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.price.data.price.table'));
    }
}
