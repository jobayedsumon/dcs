<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class membershipaccreditation extends Sximo  {
	
	protected $table = 'membership_accreditation';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT membership_accreditation.* FROM membership_accreditation  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE membership_accreditation.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
