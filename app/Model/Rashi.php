<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rashi extends Model
{
    //
    protected $table = 'rashis';
    protected $fillable = ['name','image_name','position','type'];
}
