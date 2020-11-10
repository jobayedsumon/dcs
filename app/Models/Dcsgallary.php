<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class dcsgallary extends Sximo  {
	
	protected $table = 'gallery';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT gallery.* FROM gallery  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE gallery.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
