<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->string('nomProduit');
            $table->string('marque');
            $table->double('prixProduit');
            
            $table->bigInteger('idCafeRestaurant')->unsigned();
            $table->foreign('idCafeRestaurant')->references('id')->on('cafe_restaurants');
            $table->bigInteger('idFourniseur')->unsigned();
            $table->foreign('idFourniseur')->references('id')->on('fourniseurs');

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
        Schema::dropIfExists('materiels');
    }
}
