<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColEtoilesAbeletyPlats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plats', function (Blueprint $table) {
            $table->boolean('per_etoiles')->default('false')->after('etoiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plats', function (Blueprint $table) {
            $table->dropColumn('per_etoiles');
        });
    }
}
