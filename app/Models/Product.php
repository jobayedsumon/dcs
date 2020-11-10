<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class product extends Sximo  {

	protected $table = 'product';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();

	}

	public static function querySelect(  ){

		return "  SELECT product.* FROM product  ";
	}

	public static function queryWhere(  ){

		return "  WHERE product.id IS NOT NULL ";
	}

	public static function queryGroup(){
		return "  ";
	}

	public function variations()
    {
        return $this->hasMany(variation::class);
    }


}
