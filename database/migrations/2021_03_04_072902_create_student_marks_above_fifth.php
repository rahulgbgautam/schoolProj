<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentMarksAboveFifth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks_above_fifth', function (Blueprint $table) {
            

             $table->id();

             $table->string('student_name');

             $table->integer('roll_no');

             $table->char('student_class',20);

             $table->char('student_sec',2);



            $table->float('english_lang_unit_I_marks');


            $table->float('english_lang_I_term_assesment_marks');
            $table->float('english_lang_I_term_exam_marks');
            $table->float('english_lang_I_term_total_marks');
            $table->char('english_lang_I_term_grade',2);


            $table->float('english_lang_II_term_assesment_marks');
            $table->float('english_lang_II_term_exam_marks');
            $table->float('english_lang_II_term_total_marks');
            $table->char('english_lang_II_term_grade',2);


            $table->float('english_lang_III_term_assesment_marks');
            $table->float('english_lang_III_term_exam_marks');
            $table->float('english_lang_III_term_total_marks');
            $table->char('english_lang_III_term_grade',2);




            $table->float('english_lit_unit_I_marks');


            $table->float('english_lit_I_term_assesment_marks');
            $table->float('english_lit_I_term_exam_marks');
            $table->float('english_lit_I_term_total_marks');
            $table->char('english_lit_I_term_grade',2);


            $table->float('english_lit_II_term_assesment_marks');
            $table->float('english_lit_II_term_exam_marks');
            $table->float('english_lit_II_term_total_marks');
            $table->char('english_lit_II_term_grade',2);


            $table->float('english_lit_III_term_assesment_marks');
            $table->float('english_lit_III_term_exam_marks');
            $table->float('english_lit_III_term_total_marks');
            $table->char('english_lit_III_term_grade',2);



            $table->float('english_avg_unit_I_marks');


            $table->float('english_avg_I_term_assesment_marks');
            $table->float('english_avg_I_term_exam_marks');
            $table->float('english_avg_I_term_total_marks');
            $table->char('english_avg_I_term_grade',2);


            $table->float('english_avg_II_term_assesment_marks');
            $table->float('english_avg_II_term_exam_marks');
            $table->float('english_avg_II_term_total_marks');
            $table->char('english_avg_II_term_grade',2);


            $table->float('english_avg_III_term_assesment_marks');
            $table->float('english_avg_III_term_exam_marks');
            $table->float('english_avg_III_term_total_marks');
            $table->char('english_avg_III_term_grade',2);


            $table->float('history_civics_unit_I_marks');


            $table->float('history_civics_I_term_assesment_marks');
            $table->float('history_civics_I_term_exam_marks');
            $table->float('history_civics_I_term_total_marks');
            $table->char('history_civics_I_term_grade',2);


            $table->float('history_civics_II_term_assesment_marks');
            $table->float('history_civics_II_term_exam_marks');
            $table->float('history_civics_II_term_total_marks');
            $table->char('history_civics_II_term_grade',2);


            $table->float('history_civics_III_term_assesment_marks');
            $table->float('history_civics_III_term_exam_marks');
            $table->float('history_civics_III_term_total_marks');
            $table->char('history_civics_III_term_grade',2);


            $table->float('geography_unit_I_marks');


            $table->float('geography_I_term_assesment_marks');
            $table->float('geography_I_term_exam_marks');
            $table->float('geography_I_term_total_marks');
            $table->char('geography_I_term_grade',2);


            $table->float('geography_II_term_assesment_marks');
            $table->float('geography_II_term_exam_marks');
            $table->float('geography_II_term_total_marks');
            $table->char('geography_II_term_grade',2);


            $table->float('geography_III_term_assesment_marks');
            $table->float('geography_III_term_exam_marks');
            $table->float('geography_III_term_total_marks');
            $table->char('geography_III_term_grade',2);


            $table->float('social_studies_unit_I_marks');

            $table->float('social_studies_I_term_assesment_marks');
            $table->float('social_studies_I_term_exam_marks');
            $table->float('social_studies_I_term_total_marks');
            $table->char('social_studies_I_term_grade',2);


            $table->float('social_studies_II_term_assesment_marks');
            $table->float('social_studies_II_term_exam_marks');
            $table->float('social_studies_II_term_total_marks');
            $table->char('social_studies_II_term_grade',2);


            $table->float('social_studies_III_term_assesment_marks');
            $table->float('social_studies_III_term_exam_marks');
            $table->float('social_studies_III_term_total_marks');
            $table->char('social_studies_III_term_grade',2);



            $table->float('II_lang_unit_I_marks');


            $table->float('II_lang_I_term_assesment_marks');
            $table->float('II_lang_I_term_exam_marks');
            $table->float('II_lang_I_term_total_marks');
            $table->char('II_lang_I_term_grade',2);


            $table->float('II_lang_II_term_assesment_marks');
            $table->float('II_lang_II_term_exam_marks');
            $table->float('II_lang_II_term_total_marks');
            $table->char('II_lang_II_term_grade',2);


            $table->float('II_lang_III_term_assesment_marks');
            $table->float('II_lang_III_term_exam_marks');
            $table->float('II_lang_III_term_total_marks');
            $table->char('II_lang_III_term_grade',2);



            $table->float('math_unit_I_marks');


            $table->float('math_I_term_assesment_marks');
            $table->float('math_I_term_exam_marks');
            $table->float('math_I_term_total_marks');
            $table->char('math_I_term_grade',2);


            $table->float('math_II_term_assesment_marks');
            $table->float('math_II_term_exam_marks');
            $table->float('math_II_term_total_marks');
            $table->char('math_II_term_grade',2);


            $table->float('math_III_term_assesment_marks');
            $table->float('math_III_term_exam_marks');
            $table->float('math_III_term_total_marks');
            $table->char('math_III_term_grade',2);



            $table->float('physics_unit_I_marks');


            $table->float('physics_I_term_assesment_marks');
            $table->float('physics_I_term_exam_marks');
            $table->float('physics_I_term_total_marks');
            $table->char('physics_I_term_grade',2);


            $table->float('physics_II_term_assesment_marks');
            $table->float('physics_II_term_exam_marks');
            $table->float('physics_II_term_total_marks');
            $table->char('physics_II_term_grade',2);


            $table->float('physics_III_term_assesment_marks');
            $table->float('physics_III_term_exam_marks');
            $table->float('physics_III_term_total_marks');
            $table->char('physics_III_term_grade',2);


            $table->float('chemistry_unit_I_marks');


            $table->float('chemistry_I_term_assesment_marks');
            $table->float('chemistry_I_term_exam_marks');
            $table->float('chemistry_I_term_total_marks');
            $table->char('chemistry_I_term_grade',2);


            $table->float('chemistry_II_term_assesment_marks');
            $table->float('chemistry_II_term_exam_marks');
            $table->float('chemistry_II_term_total_marks');
            $table->char('chemistry_II_term_grade',2);


            $table->float('chemistry_III_term_assesment_marks');
            $table->float('chemistry_III_term_exam_marks');
            $table->float('chemistry_III_term_total_marks');
            $table->char('chemistry_III_term_grade',2);



            $table->float('biology_unit_I_marks');


            $table->float('biology_I_term_assesment_marks');
            $table->float('biology_I_term_exam_marks');
            $table->float('biology_I_term_total_marks');
            $table->char('biology_I_term_grade',2);


            $table->float('biology_II_term_assesment_marks');
            $table->float('biology_II_term_exam_marks');
            $table->float('biology_II_term_total_marks');
            $table->char('biology_II_term_grade',2);


            $table->float('biology_III_term_assesment_marks');
            $table->float('biology_III_term_exam_marks');
            $table->float('biology_III_term_total_marks');
            $table->char('biology_III_term_grade',2);




            $table->float('science_unit_I_marks');


            $table->float('science_I_term_assesment_marks');
            $table->float('science_I_term_exam_marks');
            $table->float('science_I_term_total_marks');
            $table->char('science_I_term_grade',2);


            $table->float('science_II_term_assesment_marks');
            $table->float('science_II_term_exam_marks');
            $table->float('science_II_term_total_marks');
            $table->char('science_II_term_grade',2);


            $table->float('science_III_term_assesment_marks');
            $table->float('science_III_term_exam_marks');
            $table->float('science_III_term_total_marks');
            $table->char('science_III_term_grade',2);



            $table->float('computer_app_unit_I_marks');


            $table->float('computer_app_I_term_assesment_marks');
            $table->float('computer_app_I_term_exam_marks');
            $table->float('computer_app_I_term_total_marks');
            $table->char('computer_app_I_term_grade',2);


            $table->float('computer_app_II_term_assesment_marks');
            $table->float('computer_app_II_term_exam_marks');
            $table->float('computer_app_II_term_total_marks');
            $table->char('computer_app_II_term_grade',2);


            $table->float('computer_app_III_term_assesment_marks');
            $table->float('computer_app_III_term_exam_marks');
            $table->float('computer_app_III_term_total_marks');
            $table->char('computer_app_III_term_grade',2);



            $table->float('total_unit_I_marks');


            $table->float('total_I_term_assesment_marks');
            $table->float('total_I_term_exam_marks');
            $table->float('total_I_term_total_marks');
            $table->char('total_I_term_grade',2);


            $table->float('total_II_term_assesment_marks');
            $table->float('total_II_term_exam_marks');
            $table->float('total_II_term_total_marks');
            $table->char('total_II_term_grade',2);


            $table->float('total_III_term_assesment_marks');
            $table->float('total_III_term_exam_marks');
            $table->float('total_III_term_total_marks');
            $table->char('total_III_term_grade',2);




            $table->float('III_lang_unit_I_marks');


            $table->float('III_lang_I_term_assesment_marks');
            $table->float('III_lang_I_term_exam_marks');
            $table->float('III_lang_I_term_total_marks');
            $table->char('III_lang_I_term_grade',2);


            $table->float('III_lang_II_term_assesment_marks');
            $table->float('III_lang_II_term_exam_marks');
            $table->float('III_lang_II_term_total_marks');
            $table->char('III_lang_II_term_grade',2);


            $table->float('III_lang_III_term_assesment_marks');
            $table->float('III_lang_III_term_exam_marks');
            $table->float('III_lang_III_term_total_marks');
            $table->char('III_lang_III_term_grade',2);



            $table->float('attendance_unit_I');

            $table->float('attendance_I_term');

            $table->float('attendance_II_term');

            $table->float('attendance_III_term');
          

           

            $table->float('remarks_I_term');
  
            $table->float('remarks_II_term');
 
            $table->float('remarks_III_term');


            $table->string('percentage_I_term');

            $table->string('percentage_II_term');

            $table->string('percentage_III_term');

            $table->string('total_percentage');






            $table->string('classteacher_sign_unit_I');

            $table->string('classteacher_sign_I_term');

            $table->string('classteacher_sign_II_term');

            $table->string('classteacher_sign_III_term');



            $table->string('principal_sign_unit_I');

            $table->string('principal_sign_I_term');

            $table->string('principal_sign_II_term');

            $table->string('principal_sign_III_term');



            $table->string('parent_sign_unit_I');

            $table->string('parent_sign_I_term');

            $table->string('parent_sign_II_term');

            $table->string('parent_sign_III_term');


            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks_above_fifth');
    }
}
