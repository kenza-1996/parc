<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectation', function (Blueprint $table) {
            $table->id();
            $table->dateTime("date-affect");
            $table->foreignId("personnels_id");
            $table->foreignId("materiel_id");
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
        Schema::table("affectation", function(Blueprint $table){
            $table->dropForeign(["personnesl_id"]);
            $table->dropForeign(["materiel_id"]);

        });
        Schema::dropIfExists('affectation');
    }
}
