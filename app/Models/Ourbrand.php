<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourbrand extends Sximo  {
	
	protected $table = 'our_brand';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT our_brand.* FROM our_brand  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE our_brand.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
