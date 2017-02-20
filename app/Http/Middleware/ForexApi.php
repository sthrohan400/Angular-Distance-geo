<?php

namespace App\Http\Middleware;

use Closure;
use App\Model\Api;
use DB;

class ForexApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

         $headers = ['Access-Control-Allow-Origin' => '*' ,'Access-Control-Allow-Credentials'=>'TRUE','Access-Control-Allow-Methods' => 'GET', 'Access-Control-Allow-Headers' => 'Origin, Content-Type, X-Auth-Token , Authorization' ];

       if($this->check_Forex_Auth($request->app_id) === false){
       
        
         return response()->json(['msg' => 'Unauthorized'],401,$headers);
         

       }

       
         $response = $next($request);
            foreach ($headers as $key => $value) {
           $response->header($key,$value);
       }

           return $response;

      
         
    

     



   }
   public function check_Forex_Auth($app_id){
     $result = DB::table('apis')
        ->join('public_clients','public_clients.id','=','apis.client_id')
        ->where('apis.app_id',$app_id)
        ->first();
         return (count($result) > 0 ? true : false);

   }
}
