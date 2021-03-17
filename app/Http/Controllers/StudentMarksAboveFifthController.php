<?php

namespace App\Http\Controllers;

use App\Models\MarksAboveFifth;

use Illuminate\Http\Request;

class StudentMarksAboveFifthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('school.student-report');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

            $validatedData = $request->validate([

         'classteacher_sign_unit_I' => '                                            required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',


         'classteacher_sign_I_term' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',


         'classteacher_sign_II_term' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',


         'classteacher_sign_III_term' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',


         'principal_sign_unit_I' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',



         'principal_sign_I_term' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',


         'principal_sign_II_term' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

         'principal_sign_III_term' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

         'parent_sign_unit_I' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

         'parent_sign_I_term' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

         'parent_sign_II_term' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
 
          'parent_sign_III_term' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
 

        ]);



                $path1 = $request->file('classteacher_sign_unit_I')->store('media');

                $path2 = $request->file('classteacher_sign_I_term')->store('media');

                $path3 = $request->file('classteacher_sign_II_term')->store('media');

                $path4 = $request->file('classteacher_sign_III_term')->store('media');

                $path5 = $request->file('principal_sign_unit_I')->store('media');

                $path6 = $request->file('principal_sign_I_term')->store('media');

                $path7 = $request->file('principal_sign_II_term')->store('media');

                $path8 = $request->file('principal_sign_III_term')->store('media');

                $path9 = $request->file('parent_sign_unit_I')->store('media');

                $path10 = $request->file('parent_sign_I_term')->store('media');

                $path11 = $request->file('parent_sign_II_term')->store('media');

                $path12 = $request->file('parent_sign_III_term')->store('media');


                $newPath1=$request->classteacher_sign_unit_I->move(('img'), $path1);

                $newPath2=$request->classteacher_sign_I_term->move(('img'), $path2);

                $newPath3=$request->classteacher_sign_II_term->move(('img'), $path3);

                $newPath4=$request->classteacher_sign_III_term->move(('img'), $path4);

                $newPath5=$request->principal_sign_unit_I->move(('img'), $path5);

                $newPath6=$request->principal_sign_I_term->move(('img'), $path6);

                $newPath7=$request->principal_sign_II_term->move(('img'), $path7);

                $newPath8=$request->principal_sign_III_term->move(('img'), $path8);

                $newPath9=$request->parent_sign_unit_I->move(('img'), $path9);

                $newPath10=$request->parent_sign_I_term->move(('img'), $path10);

                $newPath11=$request->parent_sign_II_term->move(('img'), $path11);

                $newPath12=$request->parent_sign_III_term->move(('img'), $path12);




               

                $data = new MarksModel;

                $data->student_name = $request->student_name;

                 $data->roll_no = $request->roll_no;

                 $data->student_class = $request->student_class;

                 $data->student_sec = $request->student_sec;


              $data->english_lang_unit_I_marks = $request->english_lang_unit_I_marks;


              $data->english_lang_I_term_assesment_marks = $request->english_lang_I_term_assesment_marks;

              $data->english_lang_I_term_exam_marks = $request->english_lang_I_term_exam_marks;

              $data->english_lang_I_term_total_marks = $request->english_lang_I_term_total_marks;

              $data->english_lang_I_term_grade = $request->english_lang_I_term_grade;


              $data->english_lang_II_term_assesment_marks = $request->english_lang_II_term_assesment_marks;

              $data->english_lang_II_term_exam_marks = $request->english_lang_II_term_exam_marks;

              $data->english_lang_II_term_total_marks = $request->english_lang_II_term_total_marks;


              $data->english_lang_II_term_grade = $request->english_lang_II_term_grade;


              $data->english_lang_III_term_assesment_marks = $request->english_lang_III_term_assesment_marks;

              $data->english_lang_III_term_exam_marks = $request->english_lang_III_term_exam_marks;

              $data->english_lang_III_term_total_marks = $request->english_lang_III_term_total_marks;


              $data->english_lang_III_term_grade = $request->english_lang_III_term_grade;




              $data->english_lit_unit_I_marks = $request->english_lit_unit_I_marks;


              $data->english_lit_I_term_assesment_marks = $request->english_lit_I_term_assesment_marks;

              $data->english_lit_I_term_exam_marks = $request->english_lit_I_term_exam_marks;

              $data->english_lit_I_term_total_marks = $request->english_lit_I_term_total_marks;


              $data->english_lit_I_term_grade = $request->english_lit_I_term_grade;


              $data->english_lit_II_term_assesment_marks = $request->english_lit_II_term_assesment_marks;

              $data->english_lit_II_term_exam_marks = $request->english_lit_II_term_exam_marks;

              $data->english_lit_II_term_total_marks = $request->english_lit_II_term_total_marks;


              $data->english_lit_II_term_grade = $request->english_lit_II_term_grade;


              $data->english_lit_III_term_assesment_marks = $request->english_lit_III_term_assesment_marks;

              $data->english_lit_III_term_exam_marks = $request->english_lit_III_term_exam_marks;

              $data->english_lit_III_term_total_marks = $request->english_lit_III_term_total_marks;


              $data->english_lit_III_term_grade = $request->english_lit_III_term_grade;



              $data->english_avg_unit_I_marks = $request->english_avg_unit_I_marks;


              $data->english_avg_I_term_assesment_marks = $request->english_avg_I_term_assesment_marks;

              $data->english_avg_I_term_exam_marks = $request->english_avg_I_term_exam_marks;

              $data->english_avg_I_term_total_marks = $request->english_avg_I_term_total_marks;

              $data->english_avg_I_term_grade = $request->english_avg_I_term_grade;


              $data->english_avg_II_term_assesment_marks = $request->english_avg_II_term_assesment_marks;

              $data->english_avg_II_term_exam_marks = $request->english_avg_II_term_exam_marks;

              $data->english_avg_II_term_total_marks = $request->english_avg_II_term_total_marks;

              $data->english_avg_II_term_grade = $request->english_avg_II_term_grade;


              $data->english_avg_III_term_assesment_marks = $request->english_avg_III_term_assesment_marks;

              $data->english_avg_III_term_exam_marks = $request->english_avg_III_term_exam_marks;

              $data->english_avg_III_term_total_marks = $request->english_avg_III_term_total_marks;


              $data->english_avg_III_term_grade = $request->english_avg_III_term_grade;



              $data->social_studies_unit_I_marks = $request->social_studies_unit_I_marks;


              $data->social_studies_I_term_assesment_marks = $request->social_studies_I_term_assesment_marks;

              $data->social_studies_I_term_exam_marks = $request->social_studies_I_term_exam_marks;

              $data->social_studies_I_term_total_marks = $request->social_studies_I_term_total_marks;

              $data->social_studies_I_term_grade = $request->social_studies_I_term_grade;


              $data->social_studies_II_term_assesment_marks = $request->social_studies_II_term_assesment_marks;

              $data->social_studies_II_term_exam_marks = $request->social_studies_II_term_exam_marks;

              $data->social_studies_II_term_total_marks = $request->social_studies_II_term_total_marks;


              $data->social_studies_II_term_grade = $request->social_studies_II_term_grade;


              $data->social_studies_III_term_assesment_marks = $request->social_studies_III_term_assesment_marks;

              $data->social_studies_III_term_exam_marks = $request->social_studies_III_term_exam_marks;

              $data->social_studies_III_term_total_marks = $request->social_studies_III_term_total_marks;


              $data->social_studies_III_term_grade = $request->social_studies_III_term_grade;



              $data->II_lang_unit_I_marks = $request->II_lang_unit_I_marks;


              $data->II_lang_I_term_assesment_marks = $request->II_lang_I_term_assesment_marks;

              $data->II_lang_I_term_exam_marks = $request->II_lang_I_term_exam_marks;

              $data->II_lang_I_term_total_marks = $request->II_lang_I_term_total_marks;


              $data->II_lang_I_term_grade = $request->II_lang_I_term_grade;


              $data->II_lang_II_term_assesment_marks = $request->II_lang_II_term_assesment_marks;

              $data->II_lang_II_term_exam_marks = $request->II_lang_II_term_exam_marks;

              $data->II_lang_II_term_total_marks = $request->II_lang_II_term_total_marks;


              $data->II_lang_II_term_grade = $request->II_lang_II_term_grade;


              $data->II_lang_III_term_assesment_marks = $request->II_lang_III_term_assesment_marks;

              $data->II_lang_III_term_exam_marks = $request->II_lang_III_term_exam_marks;

              $data->II_lang_III_term_total_marks = $request->II_lang_III_term_total_marks;


              $data->II_lang_III_term_grade = $request->II_lang_III_term_grade;




              $data->math_unit_I_marks = $request->math_unit_I_marks;


              $data->math_I_term_assesment_marks = $request->math_I_term_assesment_marks;

              $data->math_I_term_exam_marks = $request->math_I_term_exam_marks;

              $data->math_I_term_total_marks = $request->math_I_term_total_marks;


              $data->math_I_term_grade = $request->math_I_term_grade;


              $data->math_II_term_assesment_marks = $request->math_II_term_assesment_marks;

              $data->math_II_term_exam_marks = $request->math_II_term_exam_marks;

              $data->math_II_term_total_marks = $request->math_II_term_total_marks;


              $data->math_II_term_grade = $request->math_II_term_grade;


              $data->math_III_term_assesment_marks = $request->math_III_term_assesment_marks;

              $data->math_III_term_exam_marks = $request->math_III_term_exam_marks;

              $data->math_III_term_total_marks = $request->math_III_term_total_marks;

              $data->math_III_term_grade = $request->math_III_term_grade;



              $data->science_unit_I_marks = $request->science_unit_I_marks;


              $data->science_I_term_assesment_marks = $request->science_I_term_assesment_marks;

              $data->science_I_term_exam_marks = $request->science_I_term_exam_marks;

              $data->science_I_term_total_marks = $request->science_I_term_total_marks;


              $data->science_I_term_grade = $request->science_I_term_grade;


              $data->science_II_term_assesment_marks = $request->science_II_term_assesment_marks;

              $data->science_II_term_exam_marks = $request->science_II_term_exam_marks;

              $data->science_II_term_total_marks = $request->science_II_term_total_marks;


              $data->science_II_term_grade = $request->science_II_term_grade;


              $data->science_III_term_assesment_marks = $request->science_III_term_assesment_marks;

              $data->science_III_term_exam_marks = $request->science_III_term_exam_marks;

              $data->science_III_term_total_marks = $request->science_III_term_total_marks;

              $data->science_III_term_grade = $request->science_III_term_grade;




              $data->computer_app_unit_I_marks = $request->computer_app_unit_I_marks;


              $data->computer_app_I_term_assesment_marks = $request->computer_app_I_term_assesment_marks;

              $data->computer_app_I_term_exam_marks = $request->computer_app_I_term_exam_marks;

              $data->computer_app_I_term_total_marks = $request->computer_app_I_term_total_marks;


              $data->computer_app_I_term_grade = $request->computer_app_I_term_grade;


              $data->computer_app_II_term_assesment_marks = $request->computer_app_II_term_assesment_marks;

              $data->computer_app_II_term_exam_marks = $request->computer_app_II_term_exam_marks;

              $data->computer_app_II_term_total_marks = $request->computer_app_II_term_total_marks;


              $data->computer_app_II_term_grade = $request->computer_app_II_term_grade;


              $data->computer_app_III_term_assesment_marks = $request->computer_app_III_term_assesment_marks;

              $data->computer_app_III_term_exam_marks = $request->computer_app_III_term_exam_marks;

              $data->computer_app_III_term_total_marks = $request->computer_app_III_term_total_marks;


              $data->computer_app_III_term_grade = $request->computer_app_III_term_grade;

           


              $data->total_unit_I_marks = $request->total_unit_I_marks;


              $data->total_I_term_assesment_marks = $request->total_I_term_assesment_marks;

              $data->total_I_term_exam_marks = $request->total_I_term_exam_marks;

              $data->total_I_term_total_marks = $request->total_I_term_total_marks;


              $data->total_I_term_grade = $request->total_I_term_grade;


              $data->total_II_term_assesment_marks = $request->total_II_term_assesment_marks;

              $data->total_II_term_exam_marks = $request->total_II_term_exam_marks;

              $data->total_II_term_total_marks = $request->total_II_term_total_marks;


              $data->total_II_term_grade = $request->total_II_term_grade;


              $data->total_III_term_assesment_marks = $request->total_III_term_assesment_marks;

              $data->total_III_term_exam_marks = $request->total_III_term_exam_marks;

              $data->total_III_term_total_marks = $request->total_III_term_total_marks;


              $data->total_III_term_grade = $request->total_III_term_grade;



              $data->III_lang_unit_I_marks = $request->III_lang_unit_I_marks;


              $data->III_lang_I_term_assesment_marks = $request->III_lang_I_term_assesment_marks;

              $data->III_lang_I_term_exam_marks = $request->III_lang_I_term_exam_marks;

              $data->III_lang_I_term_total_marks = $request->III_lang_I_term_total_marks;


              $data->III_lang_I_term_grade = $request->III_lang_I_term_grade;


              $data->III_lang_II_term_assesment_marks = $request->III_lang_II_term_assesment_marks;

              $data->III_lang_II_term_exam_marks = $request->III_lang_II_term_exam_marks;

              $data->III_lang_II_term_total_marks = $request->III_lang_II_term_total_marks;

              $data->III_lang_II_term_grade = $request->III_lang_II_term_grade;


              $data->III_lang_III_term_assesment_marks = $request->III_lang_III_term_assesment_marks;

              $data->III_lang_III_term_exam_marks = $request->III_lang_III_term_exam_marks;

              $data->III_lang_III_term_total_marks = $request->III_lang_III_term_total_marks;


              $data->III_lang_III_term_grade = $request->III_lang_III_term_grade;



              $data->attendance_unit_I = $request->attendance_unit_I;

              $data->attendance_I_term = $request->attendance_I_term;

              $data->attendance_II_term = $request->attendance_II_term; 

              $data->attendance_III_term = $request->attendance_III_term;




              $data->remarks_I_term = $request->remarks_I_term;

              $data->remarks_II_term = $request->remarks_II_term; 

              $data->remarks_III_term = $request->remarks_III_term;



              $data->percentage_I_term = $request->percentage_I_term;

              $data->percentage_II_term = $request->percentage_II_term;

              $data->percentage_III_term = $request->percentage_III_term;


              $data->total_percentage = $request->total_percentage;




            
              $data->classteacher_sign_unit_I = $newPath1;

              $data->classteacher_sign_I_term = $newPath2;

              $data->classteacher_sign_II_term = $newPath3; 

              $data->classteacher_sign_III_term = $newPath4;

             

              $data->principal_sign_unit_I = $newPath5;

              $data->principal_sign_I_term = $newPath6;

              $data->principal_sign_II_term = $newPath7; 

              $data->principal_sign_III_term = $newPath8;


              $data->parent_sign_unit_I = $newPath9;

              $data->parent_sign_I_term = $newPath10;

              $data->parent_sign_II_term = $newPath11; 

              $data->parent_sign_III_term = $newPath12;

              $data->save();





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
