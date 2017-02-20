<?php

namespace App\Http\Controllers\Rashi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Rashi\RashiRepository;
use App\Repositories\RashiData\RashiDataRepository;
use DB;
class RashiHandlerController extends Controller
{
    //
	private $rashiRepo;
	private $rashiDataRepo;
	public function __construct(RashiRepository $rashiRepo,RashiDataRepository $rashiDataRepo){
		$this->rashiRepo = $rashiRepo;
		$this->rashiDataRepo = $rashiDataRepo;
		$this->middleware('auth');
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
	public function index($page){

		switch($page){
			case ('daily'):
		$rashi_datas = array();
		$rashis = $this->rashiRepo->getAll();
		foreach($rashis as $value)
		{
			$temp_data = array();
			$datas  = DB::table('rashi_datas')->where('rashi_id',$value['id'])
			->where('from_date','<=',Date('Y-m-d'))
			->where('horoscope_type','daily')
			//->where('to_date','>',Date('Y-m-d'))
			->get();
			$temp_data['name'] = $value['name'];
			$temp_data['image_name'] = $value['image_name'];
			$temp_data['id'] = $value['id'];
			$temp_data['type'] = $value['type'];
			if(count($datas) > 0)
			{

			foreach($datas as $data){
				$temp_data['description'] = $data['description'];
				$temp_data['rashi_data_id'] = $data['id'];



			}
			
		}
			array_push($rashi_datas, $temp_data);

		}
		$rashi_datas = $this->formatRashi($rashi_datas);
		//return $rashi_datas;
		return view('backend.horoscope.data.daily',compact('rashi_datas'));
		break;

		case ('weekly'):
		$rashi_datas = array();
		$rashis = $this->rashiRepo->getAll();
		foreach($rashis as $value)
		{
			$temp_data = array();
			$datas  = DB::table('rashi_datas')->where('rashi_id',$value['id'])
			->where('from_date','<=',Date('Y-m-d'))
			->where('horoscope_type','weekly')
			//->where('to_date','>',Date('Y-m-d'))
			->get();
			$temp_data['name'] = $value['name'];
			$temp_data['image_name'] = $value['image_name'];
			$temp_data['id'] = $value['id'];
			$temp_data['type'] = $value['type'];
			if(count($datas) > 0)
			{

			foreach($datas as $data){
				$temp_data['description'] = $data['description'];
				$temp_data['rashi_data_id'] = $data['id'];



			}
			
		}
			array_push($rashi_datas, $temp_data);

		}
		$rashi_datas = $this->formatRashi($rashi_datas);
		return view('backend.horoscope.data.weekly',compact('rashi_datas'));
		break;


	}

	}

	public function create(Request $request){
		$flag = $this->rashiDataRepo->create($request->all());
		return $this->successError($flag);
	}

	public function delete($id){
		$flag = $this->rashiDataRepo->delete($id);
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
