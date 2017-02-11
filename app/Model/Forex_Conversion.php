<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Forex_Conversion extends Model
{
    
protected $table = 'forex_conversions';

protected $fillable = ['selling_price','cost_price','lang_type','country_id'];
    //
}
