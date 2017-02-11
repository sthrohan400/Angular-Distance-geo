<?php 
namespace App\Repositories\Conversion;

interface ConversionRepository {

	function getAll();

	function getById($id);

	function create(array $attributes);

	function update($id, array $attributes);

	function delete($id);

}
