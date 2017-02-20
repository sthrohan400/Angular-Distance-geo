<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Api extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('apis', function (Blueprint $table) {
            $table->increments('id'); 
            $table->enum('api_type',['public','private']);
            $table->enum('api_category',['forex','horoscope']);
            $table->string('app_id',78);
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('public_clients');

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
