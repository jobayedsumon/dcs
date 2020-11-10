<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Sximo  {
	
	protected $table = 'portfolio';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT portfolio.* FROM portfolio  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE portfolio.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
