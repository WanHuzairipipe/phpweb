<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->String('nama', 50);
            $table->Datetime('tarikh');
            
            $table->foreignID('movie_id');
            $table->foreignID('kedai_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('belians');
    }
}
