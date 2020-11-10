<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class service extends Sximo  {
	
	protected $table = 'service';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT service.* FROM service  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE service.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
