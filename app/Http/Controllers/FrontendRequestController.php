<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Conversion\ConversionRepository;

class FrontendRequestController extends Controller
{
    //
    private $conversionRepo;
	public function __construct(ConversionRepository $conversionRepo){
		$this->conversionRepo = $conversionRepo;

	}
    public function register_Public_Forex(Request $request)
    {
    
    
    	$forex_public = array();
    	$this->validate($request,[
    			'website_url' => 'required',
    			'email' =>'required',
    		]);

    	$data = $this->conversionRepo->register_Client_Public_Forex($request->all());
    
    
    	$forex_public['js'] =  $this->conversionRepo->js_for_forex_public($data[0]['app_id']);
    	$forex_public['html'] =  $this->conversionRepo->html_for_forex_public();
    	$forex_public['dependencies'] = "Required Jquery for Js";
    	

    	return view('frontend.forex.public')->with('data',$forex_public);
    	


    	
    }


    
}
