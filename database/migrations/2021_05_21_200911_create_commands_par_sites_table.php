<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandsParSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands_par_sites', function (Blueprint $table) {
            $table->id();
            $table->boolean('etat');
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('serveurs_id')->unsigned();
            $table->bigInteger('cafe_restaurants_id')->unsigned();

            
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('serveurs_id')->references('id')->on('serveurs');
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
        Schema::dropIfExists('commands_par_sites');
    }
}
