<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Images extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Images',function (Blueprint $table){
            $table ->increments('id');
            $table -> string('Name');
            $table -> string('description');
            $table -> string('url');
            $table -> integer('news_id')-> unsigned();
            $table -> softDeletes (); //co chuc nang an mot dong trong DB
            $table -> timestamps(); // luu thoi gian hoat dong tren db

            $table -> foreign('news_id') -> references('id') -> on ('News');

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
