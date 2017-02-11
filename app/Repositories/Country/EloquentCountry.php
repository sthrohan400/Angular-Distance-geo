<?php 
namespace App\Repositories\Country;

use App\Model\Country;

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
        return $this->user->create($attributes);    
	}

	public function updateCountry($id,array $attributes){
		return $this->country->findorfail($id)->update($attributes);
	}

	public function deleteCountry($id){
		return $this->country->findorfail($id)->delete();
	}

	public function handleImage($operation,array $input){


		switch($operation){

		case('upload'):

			  $destinationPath = 'uploads/Flag/'; 
	          
	          $extension = $input['flag']->getClientOriginalExtension();
	        
	          $fileName = strtolower($input['name']) . date("Y-m-d-h-i-sa") . '.' . $extension;
	        
	          $uploaded_file = $attributes['flag']->move($destinationPath, $fileName); 
	          if($uploaded_file === false)
	          {
	          	return false;
	          }
	          $rimg = Image::make($destinationPath . $fileName)->save($destinationPath . $fileName);

	          return $fileName;





	          break;





      }


	}

}