<?php 


namespace Ravi\BMI\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class BMIController extends Controller
{
	
	 

	function index(Request $request) {

		if(!empty($request->get('height'))) {
			$height = $request->get('height');
			$weight = $request->get('weight');

			$bmi = round($weight / ( $height * $height ), 1);
		}

		return view('bmi::index', compact('bmi'));
	}
}