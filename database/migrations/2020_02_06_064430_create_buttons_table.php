<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateButtonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buttons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_action');
            $table->unsignedBigInteger('id_permission');
            $table->string('content')->nullable();
            $table->string('route');
            $table->string('jsid');
            //Llaves
            $table->foreign('id_action')->references('id')->on('actions');
            $table->foreign('id_permission')->references('id')->on('permissions');
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
        Schema::dropIfExists('buttons');
    }
}
