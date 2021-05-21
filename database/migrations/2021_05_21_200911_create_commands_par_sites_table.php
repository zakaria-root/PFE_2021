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
            $table->bigInteger('idUtilisateur')->unsigned();
            $table->bigInteger('idServeur')->unsigned();
            $table->bigInteger('idCafeRestaurant')->unsigned();

            
            $table->foreign('idUtilisateur')->references('id')->on('utilisateurs');
            $table->foreign('idServeur')->references('id')->on('serveurs');
            $table->foreign('idCafeRestaurant')->references('id')->on('cafe_restaurants');

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
