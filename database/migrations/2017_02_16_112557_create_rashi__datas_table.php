<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRashiDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rashi_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->enum('horoscope_type',['daily','weekly','monthly','yearly']);
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('rashi_id')->unsigned();
            $table->foreign('rashi_id')->references('id')->on('rashis');

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
        Schema::dropIfExists('rashi__datas');
    }
}
