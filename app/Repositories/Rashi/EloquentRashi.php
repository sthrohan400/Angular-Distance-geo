<?php 
namespace App\Repositories\Rashi;
use App\Model\Rashi;
use Intervention\Image\ImageManagerStatic as Image;
class EloquentRashi implements RashiRepository{
	private $rashi;
	public function __construct(Rashi $rashi){
		$this->rashi = $rashi;
	}


	public function getAll(){
		return $this->rashi->all();

	}
	public function getById($id){
		return $this->rashi->findorfail($id);
	}

	public function create(array $attributes){


		if(!isset($attributes['image_name']))
		{
			$attributes['image_name'] = '';
			return $this->rashi->create($attributes);
		}

			$fileName = $this->handleImage('upload',$attributes);
			$attributes['image_name'] = $fileName;
		
		

		return $this->rashi->create($attributes);


	}
	public function update($id,array $attributes){
		if(isset($attributes['image_name']))
		{
			$rashi = $this->rashi->find($id);
		
			$input['image_name'] = $rashi['image_name'];
	 
	 
		if($this->handleImage('delete', $input) === false)
		{
			return false;
		}

			$fileName = $this->handleImage('upload',$attributes);
			$attributes['image_name'] = $fileName;

		}
		return $this->rashi->findorfail($id)->update($attributes);

	}
	public function delete($id){
		$input = array();
		$rashi = $this->rashi->find($id);
		
		$input['image_name'] = $rashi['image_name'];
	 
		if($this->handleImage('delete', $input) === false)
		{
			return false;
		}
		return $this->rashi->findorfail($id)->delete();

	}


	public function handleImage($operation,array $input){


		switch($operation){

			case('upload'):

				if($input['type'] == 'np'){
					$input['name'] = 'Rashi';
				}

			$destinationPath = 'uploads/rashi/'; 

			$extension = $input['image_name']->getClientOriginalExtension();

			
			$fileName = strtolower($input['name']) . date("Y-m-d-h-i-sa") . '.' . $extension;

			$uploaded_file = $input['image_name']->move($destinationPath, $fileName); 
			if($uploaded_file === false)
			{
				return false;
			}
			$rimg = Image::make($destinationPath . $fileName)->resize(40,40)->save($destinationPath . $fileName);
			return $fileName;
			break;

			case('delete'):
			if($input['image_name'] == '')
			{
				return true;
			}

			$destinationPath = 'uploads/rashi/'; 

			$file_deleteion = unlink($destinationPath.$input['image_name']);
			if($file_deleteion === false)
			{
				return false;
			}
			return true;
			break;
		}


	}

	
}