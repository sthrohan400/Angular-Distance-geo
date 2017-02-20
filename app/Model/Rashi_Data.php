<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rashi_Data extends Model
{
    //
    protected $table = 'rashi_datas';
    protected $fillable = ['rashi_id','description','horoscope_type','from_date','to_date'];
}
