<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

	public function validaLogeo(Request $request){
		$this -> validate($request, [
			'usuario' => 'required',
			'password' => 'required'
		]);
	}

}
