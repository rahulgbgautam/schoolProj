<?php

namespace App\Http\Controllers;

use App\Models\MarksAboveFifth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class StudentReportAboveFifthController extends Controller
{
   
    public function index(){

    	return view('school.student-report-above-fifth');

    }


	public function TermVise(Request $request){

		$TermVise = DB::table('marks_above_fifth')->get();
		
		echo "<pre>";
		print_r($TermVise);

        // return view('school.term-wise')->with('TermVise', $TermVise);

	}


	public function SubjectVise(Request $request){


		$EachClassReport = DB::table('marks_above_fifth')->get();
		
		

        return view('school.subject-wise')->with('EachClassReport', $EachClassReport);

	}


	public function NumberGirlsAndBoys(Request $request){


		$GirlsAndBoys = DB::table('marks_above_fifth')->get();
		
		

        return view('school.girls-and-boys-report')->with('GirlsAndBoys', $GirlsAndBoys);

	}


	public function HindiAndTelguStudent(Request $request){

		$HindiAndTelguStudent = DB::table('marks_above_fifth')->get();
		
		

        return view('school.hindi-and-telgu-student-report')->with('HindiAndTelguStudent', $HindiAndTelguStudent);

	}


	public function StudentInBus(Request $request){

		$StudentInBus = DB::table('marks_above_fifth')->get();
		
		

        return view('school.student-inbus')->with('StudentInBus', $StudentInBus);
	}


	public function EachStudentRecord(Request $request){

			

			$EachStudentRecord = DB::table('marks_above_fifth')
								->where('roll_no',$request->roll_no)
								->where('student_class',$request->student_class)
								->where('student_sec',$request->student_sec)
								->get();

		// $users = DB::table('marks_table')->where('roll_no', $request->roll_no)->get();

				// echo "<pre>";
			 // 	print_r($EachStudentRecord);				

        return view('school.each-student-record',compact('EachStudentRecord'));

	}


}
