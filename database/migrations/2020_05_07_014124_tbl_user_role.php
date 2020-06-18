<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblUserRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_roles', function (Blueprint $table) {
            $table->Increments('userRoleId');
            $table->Integer('userId')->unsigned();
            $table->foreign('userId')->references('userId')->on('addUser');
            $table->Integer('roleId')->unsigned();
            $table->foreign('roleId')->references('roleId')->on('roles');
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
