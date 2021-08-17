<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparationExterneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparation_externe', function (Blueprint $table) {
            $table->dateTime("date_sortie");
            $table->dateTime("date_retour");
            $table->foreignId("reparateur_id");
            $table->foreignId("materiel_id");
        
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
        
        Schema::table("reparation_externe", function(Blueprint $table){
            $table->dropForeign(["reparateur_id"]);
            $table->dropForeign(["materiel_id"]);

        });
        Schema::dropIfExists('reparation_externe');
    }
}
