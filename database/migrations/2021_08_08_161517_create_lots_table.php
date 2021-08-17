<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->string("cout");
            $table->string("qte");
            $table->foreignId("categorie_id");
            $table->foreignId("marque_id");
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

        Schema::table("lots", function(Blueprint $table){
            $table->dropForeign("categorie_id");
            $table->dropForeign("marque_id");

        });
        Schema::dropIfExists('lots');
    }
}
