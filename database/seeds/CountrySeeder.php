<?php

use Illuminate\Database\Seeder;
use App\Model\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $obj_country = new Country();
        $obj_country->name = 'Nepal';
        $obj_country->flag = 'Nepal.png';
        $obj_country->amount = '1';
        $obj_country->position = '1';
        $obj_country->save();

        $obj_country = new Country();
        $obj_country->name = 'India';
        $obj_country->flag = 'India.png';
        $obj_country->amount = '100';
        $obj_country->position = '2';
         $obj_country->save();

         $obj_country = new Country();
        $obj_country->name = 'China';
        $obj_country->flag = 'China.png';
        $obj_country->amount = '1';
        $obj_country->position = '3';
         $obj_country->save();

         $obj_country = new Country();
        $obj_country->name = 'Bangladesh';
        $obj_country->flag = 'Bangladesh.png';
        $obj_country->amount = '1';
        $obj_country->position = '4';
         $obj_country->save();



    }
}
