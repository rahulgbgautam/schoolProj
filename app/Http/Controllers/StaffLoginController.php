<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class StaffLoginController extends Controller
{

	public function stafflogin(Request $request){

		

		$data = DB::table('staff_details')
		->where('staff_id',$request->staff_id)
		->get();

		if($data){

			return redirect()->route('staff.index');

		}		

	}

}
