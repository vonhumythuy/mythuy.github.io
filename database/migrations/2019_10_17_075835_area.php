<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Area extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Area',function (Blueprint $table){
            $table ->increments('id');
            $table -> string('Name');
            $table -> string('Address');
            $table -> string('Phone');
            $table -> softDeletes (); //co chuc nang an mot dong trong DB
            $table -> timestamps(); // luu thoi gian hoat dong tren db

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
