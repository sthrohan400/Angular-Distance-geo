<?php

namespace App\Http\Controllers\Conversion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Country\CountryRepository;
use App\Repositories\Conversion\ConversionRepository;
use DB;

class ConversionController extends Controller
{
    //

	private $countryRepo;
	private $conversionRepo;

	public function __construct(CountryRepository $countryRepo , ConversionRepository $conversionRepo){
		$this->countryRepo = $countryRepo;
		$this->conversionRepo = $conversionRepo;
		$this->middleware('auth');

	}

	public function successError($flag){
		if($flag === false){
			session()->flash('error','');
			return back();
		}
		session()->flash('success','');
		return back();
	}

	public function index(){
		$forex = array();
		$countries = $this->countryRepo->getAllCountry();
		foreach($countries as $country){
			$temp_array = array();
			$conversion = DB::table('forex_conversions')->where('country_id',$country->id)
							->whereDate('created_at',Date('Y-m-d'))->get();
			$temp_array['name'] = $country['name'];
			$temp_array['flag'] = $country['flag'];
			$temp_array['amount'] = $country['amount'];
			$temp_array['id'] = $country['id'];

			if(count($conversion) > 0){
				foreach ($conversion as $key => $value) {
					$temp_array['selling_price'] = $value['selling_price'];
			$temp_array['cost_price'] = $value['cost_price'];
			$temp_array['conversion_id'] = $value['id'];
				}

			}
			
			array_push($forex,$temp_array);




		}

		
		return view('backend.conversion.index',compact('forex'));
	}
	public function create(Request $request){
		$flag = $this->conversionRepo->create($request->all());
		return $this->successError($flag);
	}
	public function delete($id){
		$flag = $this->conversionRepo->delete($id);
		return $this->successError($flag);
	}
}
