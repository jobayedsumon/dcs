<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcountController extends Controller{

	

   public function __construct(){
   		$this->middleware('auth:acount');
   }



	public function myacount(){
		return view('layouts.default.template.acount.home');
	}
}
