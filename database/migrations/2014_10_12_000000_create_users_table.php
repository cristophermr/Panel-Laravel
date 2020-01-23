<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dni')->unique();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('nationality');
            $table->string('province');
            $table->string('canton');
            $table->string('district');
            $table->string('neighborhood');
            $table->text('address');
            $table->date('birthday');
            $table->string('avatar')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('lock')->default(0);
            $table->boolean('legal')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('nationality')->references('country')->on('countries');
            $table->foreign('province')->references('province')->on('geo1');
            $table->foreign('canton')->references('canton')->on('geo2');
            $table->foreign('district')->references('district')->on('geo3');
            $table->foreign('neighborhood')->references('neighborhood')->on('geo4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}
