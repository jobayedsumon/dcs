<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class permission extends Sximo  {
	
	protected $table = 'permission';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT permission.* FROM permission  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE permission.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
