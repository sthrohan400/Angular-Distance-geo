<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Api\ApiRepository;
use DB;

class ApiRequestController extends Controller
{
    private $apiRepo;
    public function __construct(ApiRepository $apiRepo){
    	$this->apiRepo = $apiRepo;

    }

    public function publicAPI($name,$app_id){
         $result = DB::table('apis')
        ->join('public_clients','public_clients.id','=','apis.client_id')
        ->where('apis.app_id',$app_id)
        ->first();
       
        

    	$datas = $this->apiRepo->getPublicAPI($name,$app_id);
    	if(!$datas){
    		return response()->json(['message' => 'Not Found'], 404,$headers);
    	}
    	
       /* $datas->header('Access-Control-Allow-Origin','*');
        $datas->header('Access-Control-Allow-Credentials','TRUE');
        $datas->header('Access-Control-Allow-Methods','GET');
        $datas->header('Access-Control-Allow-Headers','Origin, Content-Type, X-Auth-Token , Authorization');*/
        return $datas;

    }
}
