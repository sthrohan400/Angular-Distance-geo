<?php

namespace App\Http\Controllers\Rashi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Rashi\RashiRepository;

class RashiController extends Controller
{
	private $rashiRepo;
    //
	public function __construct(RashiRepository $rashiRepo){

		$this->rashiRepo = $rashiRepo;

	}
	public function successError($flag)
	{
		if($flag === false)
		{
			session()->flash('error','');
			return back();
		}
			session()->flash('success','');
			return back();
	}
	public function index(){

		$rashis = $this->formatRashi($this->rashiRepo->getAll());
		return view('backend.horoscope.index',compact('rashis'));
	}
    public function create(Request $request){

    	$flag = $this->rashiRepo->create($request->all());
    	return $this->successError($flag);

    }
    public function edit($id){
    	$data = $this->rashiRepo->getById($id);

    	$rashis = $this->formatRashi($this->rashiRepo->getAll());
    	return view('backend.horoscope.edit',compact('data','rashis'));
    }
    public function update($id,Request $request){
    	$flag = $this->rashiRepo->update($id,$request->all());
    	return $this->successError($flag);

    	
    }
    public function delete($id){
    	$flag = $this->rashiRepo->delete($id);
    	return $this->successError($flag);
    }

    public function formatRashi( $attributes){
    	$formated_datas = array(
    		'np' => array(),
    		'eng' => array()
    		);
    	$temp_data =array();
    	foreach($attributes as $value)
    	{
    		if($value['type'] == 'np')
    		{
    			$temp_data = $value;
    			array_push($formated_datas['np'],$temp_data);
    		}
    		else
    		{
    			$temp_data = $value;
    			array_push($formated_datas['eng'],$temp_data);
    		}
    		

    	}
    	//return $attributes;
    	return $formated_datas;
    }
}
