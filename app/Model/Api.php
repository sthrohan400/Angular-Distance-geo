<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    //
    protected $table ='apis';
    protected $fillable =['api_type','api_category','app_id','client_id'];
}
