<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PublicClient extends Model
{
    //
    protected $table = 'public_clients';
    protected $fillable = ['client_web','name'];
}
