<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitAlimantairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_alimantaires', function (Blueprint $table) {
            $table->id();
            $table->string('nomProduit');
            $table->string('prixProduit');
            $table->date('dateExpiration');
            $table->bigInteger('cafe_restaurants_id')->unsigned();
            $table->foreign('cafe_restaurants_id')->references('id')->on('cafe_restaurants');
            
            $table->bigInteger('fourniseurs_id')->unsigned();
            $table->foreign('fourniseurs_id')->references('id')->on('fourniseurs');
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
        Schema::dropIfExists('produit_alimantaires');
    }
}
