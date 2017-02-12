<?php
namespace App\Repositories\Api;
use App\Events\AddPublicApiClient;
use App\Model\PublicClient;
use DB;

class EloquentApi implements ApiRepository{
	public $public_client;

	public function __construct(PublicClient $public){

		$this->public_client = $public;

	}

	public function getPublicAPI($name,$client){

		switch ($name){
			case 'forex':
			event(new AddPublicApiClient($this->public_client,$client));
			$datas = DB::table('countries')
					->join('forex_conversions','forex_conversions.country_id','=','countries.id')
					->select('countries.name','countries.flag','forex_conversions.selling_price','forex_conversions.cost_price')
					->whereDate('forex_conversions.created_at',Date('Y-m-d'))
					->take(12)
					->get();
			return $this->formatInTableForForex($datas);
			break;

			default:



		}
	}


	public function formatInTableForForex($datas){
		$template = "<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'/>";

		$template .= "<div class='table-responsive'>"
  			."<table class='table table-bordered'>";
  			$template .= "<thead><th>Country</th><th>Selling Price</th><th>Cost Price</th></thead>";
  			foreach($datas as $data){

  			
  			$template .="<tr>"
  			 ."<td>".$data->name."<img src='' alt=''/></td>"
  			."<td>".$data->selling_price."</td>"
  			."<td>".$data->cost_price."</td>"
  			
  			."</tr>";
  			}
   
 			$template .= "</table></div>";

 		return $template;
	}




	}


