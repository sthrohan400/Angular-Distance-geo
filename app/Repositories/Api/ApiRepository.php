<?php 
namespace App\Repositories\Api;


interface ApiRepository{

	public function getPublicAPI($name,$client);

	
}