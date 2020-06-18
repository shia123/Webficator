<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('addUser', function (Blueprint $table) {
            $table->Increments('userId');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('contact');
            $table->string('status');
            $table->string('licenceNo');
            $table->integer('roleId')->unsigned();
            $table->foreign('roleId')->references('roleId')->on('roles');
            $table->string('verificationCode');
            $table->enum('emailstat',['verified','notverified']);
            $table->string('education');
            $table->string('filename');
            $table->string('filedes');
            $table->string('userImage');
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
        //
    }
}
