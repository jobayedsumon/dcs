<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class sildertwo extends Sximo  {
	
	protected $table = 'slider_2';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT slider_2.* FROM slider_2  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE slider_2.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
