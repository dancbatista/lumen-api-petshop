<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaPets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pets", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger("owner_id")->unsigned();
            $table->string("name");
            $table->integer("age");
            $table->string("kind");
            $table->string("race");

            $table
                ->foreign("owner_id")
                ->references("id")
                ->on("owners");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("pets");
    }
}
