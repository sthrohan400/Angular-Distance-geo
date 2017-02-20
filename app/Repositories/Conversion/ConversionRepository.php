<?php 
namespace App\Repositories\Conversion;

interface ConversionRepository {

	function getAll();

	function getById($id);

	function create(array $attributes);

	function update($id, array $attributes);

	function delete($id);

	function register_Client_Public_Forex(array $attributes);
	function js_for_forex_public($app_id);
	function html_for_forex_public();

}
