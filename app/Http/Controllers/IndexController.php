<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
	public function index(){

		$data = DB::table('notification_details')->get();

		return view('school.index',compact('data'));


	}

}
