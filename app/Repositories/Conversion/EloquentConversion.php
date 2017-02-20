<?php 
namespace App\Repositories\Conversion;

use App\Model\Forex_Conversion;
use App\Model\Api;
use App\Model\PublicClient;

class EloquentConversion implements ConversionRepository{
	private $conversion;
	private $api;
	private $publicclient;
	private $today;


	public function __construct(Forex_Conversion $conversion,Api $api,PublicClient $publicclient){
		$this->conversion = $conversion;
		$this->today = Date('Y-m-d');
		$this->publicclient = $publicclient;
		$this->api = $api;
	}
	public function getAll(){
		return $this->conversion->all();
	}

	public function getById($id){
		return $this->conversion->findorfail($id);
	}

	public function create(array $attributes){
		return $this->conversion->create($attributes);
	}

	public function update($id,array $attributes){
		return $this->conversion->findorfail($id)->update($attributes);
	}

	public function delete($id){
		return $this->conversion->findorfail($id)->delete();
	}

	/*public function checkPrice($country_id){
		$price = $this->conversion->where('country_id',$country_id)->get();
		if(count($price) > 0)
		{
			return $price;
		}
		return false;

	}*/



	public function register_Client_Public_Forex(array $attributes){
			$data = array();
			$client = $this->publicclient->create($attributes);
			//return $client['id'];
			if($client)
			{
				$temp_data = array();
				$attributes['api_type'] = 'public';
				$attributes['api_category'] = 'forex';
				$attributes['app_id'] = rand(0,100000)  + strtotime(Date('Y-m-d h:i:s'));
				$attributes['client_id'] = $client['id'];
				$api =  $this->api->create($attributes);
				$temp_data['app_id'] = $api['app_id'];



			}
			$temp_data['email'] = $client['email'];
			array_push($data, $temp_data);
			return $data;

	}

	public function js_for_forex_public($app_id){
    	$js = "$(document).ready(function(){

      var api_call = 'http://localhost:8000/api/public/forex/client/"
      .$app_id;
      $js .="';
                    $.ajaxSetup({
                   headers: {

                           
                        }
                    });
                    $.ajax({
                        type: 'GET',
                        dataType: 'html',
                        url: api_call,
                        beforeSend: function () {
                            $('#forex').addClass('loading');

                        },
                        success: function (response) {
                           $('#forex').removeClass('loading');


                            
                           
                            $('#forex').html(response);

                        },
                        error: function (e) {
                           
                            alert(e);
                        }
                    });

    });";
    return $js;

    }
    public function html_for_forex_public(){
    	$template =  "<style>
                    .loading
                    {
                        background: url('http://localhost:8000/loading/loading.gif');
                    }
                </style>
             <div id='forex'>
        

                 </div>  ";
        return $template;
    }

}