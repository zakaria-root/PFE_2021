<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nomEmploye');
            $table->string('prenomEmploye');
            $table->string('adressEmploye');
            $table->string('fonction');
            $table->double('salaire')->unsigned();
            $table->double('commission')->unsigned();
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
        Schema::dropIfExists('employees');
    }
}
