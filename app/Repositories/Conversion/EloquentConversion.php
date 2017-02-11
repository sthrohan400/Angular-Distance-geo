<?php 
namespace App\Repositories\Conversion;

use App\Model\Forex_Conversion;

class EloquentConversion implements ConversionRepository{
	private $conversion;
	private $today;


	public function __construct(Forex_Conversion $conversion){
		$this->conversion = $conversion;
		$this->today = Date('Y-m-d');
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

}