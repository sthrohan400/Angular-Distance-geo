<?php

namespace App\Http\Controllers\Forex;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForexController extends Controller
{
    //

    public function __construct(){

    }

    public function index(){

    	return view('backend.forex.index');
    }
}
