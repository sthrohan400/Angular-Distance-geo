<?php 

namespace App\Http\Controllers\Country;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Country\CountryRepository;


class CountryController extends Controller{
	private $countryRepo;

	public function __construct(
		CountryRepository $countryRepo
	){
		$this->countryRepo = $countryRepo;
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
		$countries = $this->countryRepo->getAllCountry();
		return view('backend.country.index',compact('countries'));
	}

	public function create(Request $request){
		$this->validate($request,[
			'name' =>'required|unique:countries',
			'amount'=>'required',
			'flag' =>'required|mimes:jpg,png,tif,jpeg,svg'
			]);

		$flag = $this->countryRepo->createCountry($request->all());
		return $this->successError($flag);
	}

	

	public function edit($id){
		$countries = $this->countryRepo->getAllCountry();
		$selected_country = $this->countryRepo->getCountryById($id);
		return view('backend.country.edit',compact('selected_country','countries'));
	}

	public function update($id ,Request $request){
		$flag = $this->countryRepo->updateCountry($id,$request->all());
		return $this->successError($flag);
	}

	public function delete($id){
		$flag = $this->countryRepo->deleteCountry($id);
		return $this->successError($flag);
	}

}