<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
/**
 * 
 */
class QueryController extends Controller
{
	
	public function getByDocument($document)
	{
		$items = DB::table('generals')
			->where('p093', 'like', '%'.$document.'%')
			->get();
		if (count($items)>0) {
			return array(
				'success' => true,
				'generals'=>$items 
			);
		} else {
			return array(
				'sucess' => false,
				'message' => 'No se encontraron datos con el documento ingresado' 
			);
		}
	}
	
}