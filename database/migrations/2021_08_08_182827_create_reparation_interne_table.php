<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparationInterneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparation_interne', function (Blueprint $table) {
            $table->dateTime("date-repar");
            $table->foreignId("personnels_id");
            $table->foreignId("materiel_panne_id");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("reparation_interne", function(Blueprint $table){
            $table->dropForeign(["personnels_id"]);
            $table->dropForeign(["materiel_panne_id"]);

        });
        Schema::dropIfExists('reparation_interne');
    }
}
