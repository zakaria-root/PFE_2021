<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandsOrdinairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands_ordinaires', function (Blueprint $table) {
            $table->id();
            $table->date('dateCommandeOrdinnaire');
            $table->bigInteger('cafe_restaurants_id')->unsigned();
            $table->foreign('cafe_restaurants_id')->references('id')->on('cafe_restaurants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commands_ordinaires');
    }
}
