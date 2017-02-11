<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model{
	protected $table='countries';
	protected $fillable=[
				
				'name',
				'flag',
				'amount',
				'position',
			];
	protected $hidden=[
	];
}