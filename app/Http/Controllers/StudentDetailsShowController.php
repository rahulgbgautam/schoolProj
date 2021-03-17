<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentDetailsShowController extends Controller
{

	public function StudentDetailsShow(Request $request)
	{       
		// $admission_num=$request->admission_num;
		// $admission_num=11;

		$StudentDetails=DB::table('student_details')
		->where('admission_num',$request->admission_num)
		->where('roll_num',$request->roll_num)
		->where('student_class',$request->student_class)
		->where('student_sec',$request->student_sec)
		->get();
		
		return view('school.student-details-show',compact('StudentDetails'));
		
		

		// return $request->admission_num;
		// return $request->roll_num;
		// return $request->student_name;
		// return $request->student_class;
		// return $request->student_sec;
		
		

	}


}
