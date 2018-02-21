<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrinkIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_ingredient', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('drink_id')->unsigned()->index();
            $table->integer('ingredient_id')->unsigned()->index();
            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->integer('dose')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drink_ingredient');
    }
}
