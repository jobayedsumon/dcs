<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class isfeatured extends Sximo  {
	
	protected $table = 'isfeatured';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT isfeatured.* FROM isfeatured  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE isfeatured.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
