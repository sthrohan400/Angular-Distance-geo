<?php
namespace App\Repositories\RashiData;

use App\Model\Rashi_Data;

class EloquentRashiData implements RashiDataRepository{
	private $rashidata;
	private $now;
	public function __construct(Rashi_Data $rashidata){
		$this->rashidata = $rashidata;
		$this->now = Date('Y-m-d');
	}
	public function getAll(){

	}
	public function getById($id){

	}
	public function getByType($name){

	}
	public function create(array $attributes){

		if($attributes['horoscope_type'] == 'daily'){
			$attributes['from_date'] = $this->now;
			$attributes['to_date'] = date('Y-m-d',strtotime($this->now.'+1 day'));
		}

		if($attributes['horoscope_type'] == 'weekly')
		{
			$attributes['from_date'] = $this->now;
			$attributes['to_date'] = date('Y-m-d',strtotime($this->now.'+7 day'));
		}
		if($attributes['horoscope_type'] == 'monthly')
		{
			$attributes['from_date'] = $this->now;
			$attributes['to_date'] = date('Y-m-d',strtotime($this->now.'+30 day'));
		}



		
		return $this->rashidata->create($attributes);

	}
	public function update($id,array $attributes){

	}
	public function delete($id){
		return $this->rashidata->findorfail($id)->delete();
	}

}
