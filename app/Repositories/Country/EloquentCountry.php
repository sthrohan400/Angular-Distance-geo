<?php 
namespace App\Repositories\Country;

use App\Model\Country;
use Intervention\Image\ImageManagerStatic as Image;

class EloquentCountry implements CountryRepository{
	private $country;

	public function __construct(Country $country){
		$this->country = $country;
	}
	public function getAllCountry(){
		return $this->country->all();
	}

	
	public function getCountryById($id){
		return $this->country->findorfail($id);
	}

	public function createCountry(array $attributes){
		//return $this->country->create($attributes);

		$fileName = '';
		if($attributes['flag']){
			$fileName = $this->handleImage('upload',$attributes);

		}
		if($fileName === false)
		{
			return false;
		}

		$attributes['flag'] =$fileName;

		return $this->country->create($attributes);    
	}

	public function updateCountry($id,array $attributes){
		if($attributes['flag'])
		{
		$country_selected = $this->country->findorfail($id);
		$file_deleteion = $this->handleImage('delete',$country_selected);
		if($file_deleteion === false)
		{
			return false;
		}
		$fileName = $this->handleImage('upload',$attributes);

		if($fileName === false)
		{
			return false;
		}

		$attributes['flag'] =$fileNames;
	}

		return $this->country->findorfail($id)->update($attributes);
	}

	public function deleteCountry($id){
		
		if($file_deleteion === true){
		return $this->country->findorfail($id)->delete();
	}
	}

	public function handleImage($operation,array $input){


		switch($operation){

			case('upload'):

			$destinationPath = 'uploads/Flag/'; 

			$extension = $input['flag']->getClientOriginalExtension();

			$fileName = strtolower($input['name']) . date("Y-m-d-h-i-sa") . '.' . $extension;

			$uploaded_file = $input['flag']->move($destinationPath, $fileName); 
			if($uploaded_file === false)
			{
				return false;
			}
			$rimg = Image::make($destinationPath . $fileName)->save($destinationPath . $fileName);
			return $fileName;
			break;

			case('delete'):

			$destinationPath = 'uploads/Flag/'; 

			$file_deleteion = unlink($destinationPath.$input['flag']);
			if($file_deleteion === false)
			{
				return false;
			}
			return true;
			break;
		}


	}

}