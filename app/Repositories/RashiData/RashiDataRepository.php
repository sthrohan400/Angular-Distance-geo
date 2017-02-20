<?php 
namespace App\Repositories\RashiData;



interface RashiDataRepository{

	public function getAll();
	public function getById($id);
	public function getByType($name);
	public function create(array $attributes);
	public function update($id,array $attributes);
	public function delete($id);
}