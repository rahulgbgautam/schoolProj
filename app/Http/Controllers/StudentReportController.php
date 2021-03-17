<?php

namespace App\Http\Controllers;

use App\Models\MarksModel;

use App\Models\MarksAboveFifth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class StudentReportController extends Controller
{

	public function index(){

		return view('school.student-report-below-fifth');

	}


	public function TermVise(Request $request){


		$TermVise = DB::table('marks_table')
		->where('roll_no',$request->roll_no)
		->where('student_class',$request->student_class)
		->where('student_sec',$request->student_sec)
		->get();



		if($request->term == "I"){

			return view('school.termI-wise',compact('TermVise'));

			

		}

		if($request->term == "II"){

			return view('school.termII-wise',compact('TermVise'));

		}

		if($request->term == "III"){

			return view('school.termIII-wise',compact('TermVise'));
		}



	}


	public function SubjectVise(Request $request){

		

		if($request->subject == "english_lang"){

			
			$EachClassReport = DB::table('marks_table')
			->where('student_class',$request->student_class)
			->get();
			
			$student_class=$request->student_class;
			$subject="English Lang";


			return view('school.subject-wise',compact('EachClassReport','student_class','subject'));

		}

		if($request->subject == "english_lit"){

			
			$EachClassReport = DB::table('marks_table')
			->where('student_class',$request->student_class)
			->get();
			
			$student_class=$request->student_class;
			$subject="English Lit";

			return view('school.subject-wise',compact('EachClassReport','student_class','subject'));


		}


		if($request->subject == "english_avg"){

			$EachClassReport = DB::table('marks_table')
			->where('student_class',$request->student_class)
			->get();
			
			$student_class=$request->student_class;
			$subject="English Avg";

			return view('school.subject-wise',compact('EachClassReport','student_class','subject'));


		}


		if($request->subject == "social_studies"){

			
			$EachClassReport = DB::table('marks_table')
			->where('student_class',$request->student_class)
			->get();
			
			$student_class=$request->student_class;
			$subject="Social Studies";

			return view('school.subject-wise',compact('EachClassReport','student_class','subject'));

		}

		if($request->subject == "II_lang"){

			$EachClassReport = DB::table('marks_table')
			->where('student_class',$request->student_class)
			->get();
			
			$student_class=$request->student_class;
			$subject="II Language";

			return view('school.subject-wise',compact('EachClassReport','student_class','subject'));

		}

		if($request->subject == "math"){

			$EachClassReport = DB::table('marks_table')
			->where('student_class',$request->student_class)
			->get();
			
			$student_class=$request->student_class;
			$subject="Mathematics";

			return view('school.subject-wise',compact('EachClassReport','student_class','subject'));


		}

		if($request->subject == "science"){

			$EachClassReport = DB::table('marks_table')
			->where('student_class',$request->student_class)
			->get();
			
			$student_class=$request->student_class;
			$subject="Science";

			return view('school.subject-wise',compact('EachClassReport','student_class','subject'));


		}

		if($request->subject == "computer_app"){

			$EachClassReport = DB::table('marks_table')
			->where('student_class',$request->student_class)
			->get();
			
			$student_class=$request->student_class;
			$subject="Computer Applications";

			return view('school.subject-wise',compact('EachClassReport','student_class','subject'));

		}

		if($request->subject == "III_lang"){

			$EachClassReport = DB::table('marks_table')
			->where('student_class',$request->student_class)
			->get();
			
			$student_class=$request->student_class;
			$subject="III Language";

			return view('school.subject-wise',compact('EachClassReport','student_class','subject'));

		}


		

	}


	public function NumberGirlsAndBoys(Request $request){

		// return $request->student_class;
		// return $request->girls_or_boys;

		if($request->girls_or_boys=="Male"){

			$Boys = DB::table('student_details')
			->where('student_class',$request->student_class)
			->where('gender',$request->girls_or_boys)
			->get();


			$Boyscount = $Boys->count();
			$class = $request->student_class;

			// return view('school.boys-report',compact('Boys'));

			return view('school.boys-report',compact('Boyscount','class'));


		}	


		if($request->girls_or_boys=="Female"){

			$Girls = DB::table('student_details')
			->where('student_class',$request->student_class)
			->where('gender',$request->girls_or_boys)
			->get();

			$Girlscount = $Girls->count();
			$class = $request->student_class;

			return view('school.girls-report',compact('Girlscount','class'));	


		}								


	}


	public function HindiAndTelguStudent(Request $request){

		// $HindiAndTelguStudent = DB::table('student_details')->get();



		// return view('school.hindi-and-telgu-student-report')->with('HindiAndTelguStudent', $HindiAndTelguStudent);
		// 
		
		// return $request->student_class;
		// return $request->student_sec;
		// return $request->hindi_or_telgu;

		if($request->hindi_or_telgu=="Hindi"){

			// return $request->hindi_or_telgu;

			$HindiStudent = DB::table('student_details')
			->where('student_class',$request->student_class)
			->where('student_sec',$request->student_sec)
			->where('slang',$request->hindi_or_telgu)
			->get();

			// return $HindiStudent;
			
			$class=$request->student_class;
			$sec=$request->student_sec;
			$hindicount= $HindiStudent->count();
			


			return view('school.hindi-student-report',compact('hindicount','class','sec'));								


		}	


		if($request->hindi_or_telgu=="Telgu"){

			// return $request->hindi_or_telgu;

			$TelguStudent = DB::table('student_details')
			->where('student_class',$request->student_class)
			->where('student_sec',$request->student_sec)
			->where('slang',$request->hindi_or_telgu)
			->get();

			$class=$request->student_class;
			$sec=$request->student_sec;
			$telgucount= $TelguStudent->count();

			return view('school.telgu-student-report',compact('telgucount','class','sec'));	


		}


		

	}


	public function StudentInBus(Request $request){


		$StudentInBus = DB::table('student_details')
		->where('bus_num',$request->bus_no)	
		->get();

		
		return view('school.student-inbus',compact('StudentInBus'));

	}


	public function EachStudentRecord(Request $request){



		$EachStudentRecord = DB::table('marks_table')
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
