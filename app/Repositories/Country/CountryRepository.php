<?php 
namespace App\Repositories\Country;

interface CountryRepository {

	function getAllCountry();

	

	function getCountryById($id);

	function createCountry(array $attributes);

	function updateCountry($id, array $attributes);

	function deleteCountry($id);



	public function handleImage($operation,array $input);

}
