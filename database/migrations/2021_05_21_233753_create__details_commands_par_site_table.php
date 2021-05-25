<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsCommandsParSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_commands_par_site', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('commands_par_sites_id')->unsigned();
            $table->bigInteger('plats_id')->unsigned();
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
        Schema::dropIfExists('details_commands_par_site');
    }
}
