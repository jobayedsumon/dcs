<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class bookingcontroller extends Sximo  {

	protected $table = 'bookings';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();

	}

	public static function querySelect(  ){

		return "  SELECT bookings.* FROM bookings  ";
	}

	public static function queryWhere(  ){

		return "  WHERE bookings.id IS NOT NULL ";
	}

	public static function queryGroup(){
		return "  ";
	}

	public function service()
    {
        return $this->belongsTo(categories::class);
    }


}
