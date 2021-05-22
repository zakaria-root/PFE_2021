<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsCommandsOrdinairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_commands_ordinaires', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idCammandParOrdinaire')->unsigned();
            $table->bigInteger('idPlat')->unsigned();
            $table->integer('quantite')->unsigned();
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
        Schema::dropIfExists('details_commands_ordinaires');
    }
}
