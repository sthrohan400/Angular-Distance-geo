<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Api\ApiRepository;

class ApiRequestController extends Controller
{
    private $apiRepo;
    public function __construct(ApiRepository $apiRepo){
    	$this->apiRepo = $apiRepo;

    }

    public function publicAPI($name,$client){
    	$datas = $this->apiRepo->getPublicAPI($name,$client);
    	if(!$datas){
    		return response()->json(['message' => 'Not Found'], 404);
    	}
    	//return response()->json(['forex'=>$datas],200);
        return $datas;

    }
}
