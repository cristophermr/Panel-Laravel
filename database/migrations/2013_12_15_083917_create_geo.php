<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeo extends Migration
{
    public function up()
    {
        Schema::create('countries',function (Blueprint $table)
        {
            $table->string('country',4);
            $table->string('description',40);
            $table->primary('country','PKPAIS');
        });
        Schema::create('geo1',function (Blueprint $table)
        {
            $table->string('province',12)->index();
            $table->string('description',40);
            $table->primary(["province"],'PK_GE01');
        });
        Schema::create('geo2',function (Blueprint $table)
        {
            $table->string('province',12);
            $table->string('canton',12)->index();
            $table->string('description',40);
            $table->primary(["province","canton"],'PK_GE02');
            $table->foreign('province')->references('province')->on('geo1');
        });
        Schema::create('geo3',function (Blueprint $table)
        {
            $table->string('province',12);
            $table->string('canton',12);
            $table->string('district',12)->index();
            $table->string('description',40);
            $table->primary(["province","canton","district"],'PK_GE03');
            $table->foreign('province')->references('province')->on('geo1');
            $table->foreign('canton')->references('canton')->on('geo2');
        });
        Schema::create('geo4',function (Blueprint $table)
        {
            $table->string('province',12);
            $table->string('canton',12);
            $table->string('district',12);
            $table->string('neighborhood',12)->index();
            $table->string('description',40);
            $table->primary(["province","canton","district","neighborhood"],'PK_GE04');
            $table->foreign('province')->references('province')->on('geo1');
            $table->foreign('canton')->references('canton')->on('geo2');
            $table->foreign('district')->references('district')->on('geo3');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('province');
        Schema::dropIfExists('canton');
        Schema::dropIfExists('district');
        Schema::dropIfExists('neighborhood');
    }
}
