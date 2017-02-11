<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForexConversionRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('forex_conversions', function (Blueprint $table) {

        $table->increments('id');
        $table->decimal('selling_price',9,2);
        $table->decimal('cost_price',9,2);
        $table->enum('lang_type',['np','eng','hindi']);
        $table->integer('country_id')->unsigned();
        $table->foreign('country_id')->references('id')->on('countries');


        $table->timestamps();


      });  
        
        

        //
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
