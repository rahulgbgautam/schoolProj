@extends('school.layout')

@section('content')

<section class="student-marks-add-new p-3">
     
    <h1 class="text-center mt-5 mb-5" style="color: #800000;text-shadow: 2px 2px 8px #FF0000;"> Academics </h1>  

    <div class="d-flex justify-content-end m-4">
        <button class="btn btn-warning"> <a href="/student-report-below-fifth" class="text-light"> Student-report </a> </button>
    </div>

    <form action=" {{ route('student-marks.store') }} " method="POST" enctype="multipart/form-data">

      @csrf 

      <div class="row m-1" style="border: 1.0px solid #ff9900;">
          
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="table_gradient">
              
                <div class="form-group">
                    
                    <label for="student_name"> Student Name </label>
                    <input type="text" name="student_name" class="form-control">

                </div>

            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="table_gradient">
              
                <div class="form-group">
                    
                    <label for="roll_no"> Roll No </label>
                    <input type="text" name="roll_no" class="form-control">

                </div>

            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="table_gradient">
              
              <div class="form-group">
                    
                    <label for="student_class"> Class </label>
                    
                    <select class="form-control" name="student_class">
                      <option> Select </option>
                      <option value="Nursery"> Nursery </option>
                      <option value="K.G."> K.G. </option>
                      <option value="I"> I </option>
                      <option value="II"> II </option>
                      <option value="III"> III </option>
                      <option value="IV"> IV</option>
                      <option value="V"> V </option>

                    </select>

              </div>

            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="table_gradient">
              
              <div class="form-group">
                    
                    <label for="student_sec"> Section </label>
                    
                    <select class="form-control" name="student_sec" >
                      <option> Select </option>
                      <option value="A"> A </option>
                      <option value="B"> B </option>
                      <option value="C"> C </option>
                      <option value="D"> D </option>
                      <option value="E"> E </option>
                      
                    </select>

              </div>

            </div>

        </div>




      <div class="table-responsive mt-3" id="table_gradient">

        <table class="table table-bordered">

          <thead>

            <tr>

              <th colspan="2" class="text-center" style="background-color: #993300;color: #fff;"> UNIT-I </th>
              <th colspan="4" class="text-center" style="background-color: #993300;color: #fff;"> I Term Examination </th>
              <th colspan="4" class="text-center" style="background-color: #993300;color: #fff;"> II Term Examination  </th>
              <th colspan="4" class="text-center" style="background-color: #993300;color: #fff;"> III Term Examination </th>

            </tr>

            <tr>

              <th colspan="1" class="td_input_min_width_200px">  Subject </th>
              <th colspan="1" class="text-center"> Marks   </th>

              <th class="td_input_width_100px"> ASSESMENT MARKS </th>
              <th class="td_input_width_100px"> EXAMINATION MARKS </th>
              <th class="td_input_width_100px"> TOTAL MARKS </th>
              
              <th class="td_input_width_100px"> GRADE </th>

              <th class="td_input_width_100px"> ASSESMENT MARKS </th>
              <th class="td_input_width_100px"> EXAMINATION MARKS </th>
              <th class="td_input_width_100px"> TOTAL MARKS </th>
             
              <th class="td_input_width_100px"> GRADE </th>

              <th class="td_input_width_100px"> ASSESMENT MARKS </th>
              <th class="td_input_width_100px"> EXAMINATION MARKS </th>
              <th class="td_input_width_100px"> TOTAL MARKS </th>
              
              <th class="td_input_width_100px"> GRADE </th>
              

            </tr>

          </thead>

          <tbody>
            
            <tr> 

              <td colspan="1"> English-I(Lang.) </td>

              <td colspan="1"> <input type=" text " name="english_lang_unit_I_marks" class="form-control " id="english_lang_unit_I_marks_id" style="width: 120px;margin: auto;"></td>


              <td> <input type="number" name="english_lang_I_term_assesment_marks" class="form-control td_input_width_100px" id="english_lang_I_term_assesment_marks_id"></td>

              <td> <input type="number" name="english_lang_I_term_exam_marks" class="form-control td_input_width_100px" id="english_lang_I_term_exam_marks_id"></td>

              <td> <input type=" text " name="english_lang_I_term_total_marks" class="form-control td_input_width_100px" id="english_lang_I_term_total_marks_id"></td>


              <td> <input type=" text " name="english_lang_I_term_grade" class="form-control td_input_width_100px" id="english_lang_I_term_grade_id"></td>


              <td> <input type="number" name="english_lang_II_term_assesment_marks" class="form-control td_input_width_100px" id="english_lang_II_term_assesment_marks_id"></td>

              <td> <input type="number" name="english_lang_II_term_exam_marks" class="form-control td_input_width_100px" id="english_lang_II_term_exam_marks_id"></td>

              <td> <input type="text" name="english_lang_II_term_total_marks" class="form-control td_input_width_100px" id="english_lang_II_term_total_marks_id"></td>

              <td> <input type="text" name="english_lang_II_term_grade" class="form-control td_input_width_100px" id="english_lang_II_term_grade_id"></td>

              <td> <input type="number" name="english_lang_III_term_assesment_marks" class="form-control td_input_width_100px" id="english_lang_III_term_assesment_marks_id"></td>

              <td> <input type="number" name="english_lang_III_term_exam_marks" class="form-control td_input_width_100px" id="english_lang_III_term_exam_marks_id"></td>

              <td> <input type="text" name="english_lang_III_term_total_marks" class="form-control td_input_width_100px" id="english_lang_III_term_total_marks_id"></td>

              <td> <input type="text" name="english_lang_III_term_grade" class="form-control td_input_width_100px" id="english_lang_III_term_grade_id"></td>

            </tr>

            <tr> 

              <td colspan="1"> English-II(Lit.) </td>

              <td colspan="1">  <input type="text" name="english_lit_unit_I_marks" class="form-control" id="english_lit_unit_I_marks_id" style="width: 120px;margin: auto;"></td>


              <td> <input type="number" name="english_lit_I_term_assesment_marks" class="form-control" id="english_lit_I_term_assesment_marks_id"></td>

              <td> <input type="number" name="english_lit_I_term_exam_marks" class="form-control" id="english_lit_I_term_exam_marks_id"></td>

              <td> <input type="text" name="english_lit_I_term_total_marks" class="form-control" id="english_lit_I_term_total_marks_id"></td>

              <td> <input type="text" name="english_lit_I_term_grade" class="form-control" id="english_lit_I_term_grade_id"></td>


              <td> <input type="number" name="english_lit_II_term_assesment_marks" class="form-control" id="english_lit_II_term_assesment_marks_id"></td>

              <td> <input type="number" name="english_lit_II_term_exam_marks" class="form-control" id="english_lit_II_term_exam_marks_id"></td>

              <td> <input type="text" name="english_lit_II_term_total_marks" class="form-control" id="english_lit_II_term_total_marks_id"></td>

              <td> <input type="text" name="english_lit_II_term_grade" class="form-control" id="english_lit_II_term_grade_id"></td>


              <td> <input type="number" name="english_lit_III_term_assesment_marks" class="form-control" id="english_lit_III_term_assesment_marks_id"></td>

              <td> <input type="number" name="english_lit_III_term_exam_marks" class="form-control" id="english_lit_III_term_exam_marks_id"></td>

              <td> <input type="text" name="english_lit_III_term_total_marks" class="form-control" id="english_lit_III_term_total_marks_id"></td>


              <td> <input type="text" name="english_lit_III_term_grade" class="form-control" id="english_lit_III_term_grade_id"></td>

            </tr>

            <tr> 

              <td colspan="1"> English(Avg.) </td>

              <td colspan="1"> <input type="text" name="english_avg_unit_I_marks" class="form-control " id="english_avg_unit_I_marks_id" style="width: 120px;margin: auto;"></td>

              <td> <input type="number" name="english_avg_I_term_assesment_marks" class="form-control" id="english_avg_I_term_assesment_marks_id"></td>

              <td> <input type="number" name="english_avg_I_term_exam_marks" class="form-control" id="english_avg_I_term_exam_marks_id"></td>

              <td> <input type="text" name="english_avg_I_term_total_marks" class="form-control" id="english_avg_I_term_total_marks_id"></td>

              <td> <input type="text" name="english_avg_I_term_grade" class="form-control" id="english_avg_I_term_grade_id"></td>

              <td> <input type="number" name="english_avg_II_term_assesment_marks" class="form-control" id="english_avg_II_term_assesment_marks_id"></td>

              <td> <input type="number" name="english_avg_II_term_exam_marks" class="form-control" id="english_avg_II_term_exam_marks_id"></td>

              <td> <input type="text" name="english_avg_II_term_total_marks" class="form-control" id="english_avg_II_term_total_marks_id"></td>

              <td> <input type="text" name="english_avg_II_term_grade" class="form-control" id="english_avg_II_term_grade_id"></td>

              <td> <input type="number" name="english_avg_III_term_assesment_marks" class="form-control" id="english_avg_III_term_assesment_marks_id"></td>

              <td> <input type="number" name="english_avg_III_term_exam_marks" class="form-control" id="english_avg_III_term_exam_marks_id"></td>

              <td> <input type="text" name="english_avg_III_term_total_marks" class="form-control" id="english_avg_III_term_total_marks_id"></td>

              <td> <input type="text" name="english_avg_III_term_grade" class="form-control" id="english_avg_III_term_grade_id"></td>

            </tr>


            <tr> 

              <td colspan="1"> Social Studies </td>

              <td colspan="1"> <input type="text" name="social_studies_unit_I_marks" class="form-control " id="social_studies_unit_I_marks_id" style="width: 120px;margin: auto;"></td>


              <td> <input type="number" name="social_studies_I_term_assesment_marks" class="form-control" id="social_studies_I_term_assesment_marks_id"></td>

              <td> <input type="number" name="social_studies_I_term_exam_marks" class="form-control" id="social_studies_I_term_exam_marks_id"></td>

              <td> <input type="text" name="social_studies_I_term_total_marks" class="form-control" id="social_studies_I_term_total_marks_id"></td>

              <td> <input type="text" name="social_studies_I_term_grade" class="form-control" id="social_studies_I_term_grade_id"></td>


              <td> <input type="number" name="social_studies_II_term_assesment_marks" class="form-control" id="social_studies_II_term_assesment_marks_id"></td>

              <td> <input type="number" name="social_studies_II_term_exam_marks" class="form-control" id="social_studies_II_term_exam_marks_id"></td>

              <td> <input type="text" name="social_studies_II_term_total_marks" class="form-control" id="social_studies_II_term_total_marks_id"></td>

              <td> <input type="text" name="social_studies_II_term_grade" class="form-control" id="social_studies_II_term_grade_id"></td>


              <td> <input type="number" name="social_studies_III_term_assesment_marks" class="form-control" id="social_studies_III_term_assesment_marks_id"></td>

              <td> <input type="number" name="social_studies_III_term_exam_marks" class="form-control" id="social_studies_III_term_exam_marks_id"></td>

              <td> <input type="text" name="social_studies_III_term_total_marks" class="form-control" id="social_studies_III_term_total_marks_id"></td>

              <td> <input type="text" name="social_studies_III_term_grade" class="form-control" id="social_studies_III_term_grade_id"></td>

            </tr>


            <tr> 

              <td colspan="1"> II Language( Telugu / Hindi ) </td>

              <td colspan="1"> <input type="text" name="II_lang_unit_I_marks" class="form-control" id="II_lang_unit_I_marks_id" style="width: 120px;margin: auto;"></td>


              <td> <input type="number" name="II_lang_I_term_assesment_marks" class="form-control" id="II_lang_I_term_assesment_marks_id"></td>

              <td> <input type="number" name="II_lang_I_term_exam_marks" class="form-control" id="II_lang_I_term_exam_marks_id"></td>

              <td> <input type="text" name="II_lang_I_term_total_marks" class="form-control" id="II_lang_I_term_total_marks_id"></td>


              <td> <input type="text" name="II_lang_I_term_grade" class="form-control" id="II_lang_I_term_grade_id"></td>


              <td> <input type="number" name="II_lang_II_term_assesment_marks" class="form-control" id="II_lang_II_term_assesment_marks_id"></td>

              <td> <input type="number" name="II_lang_II_term_exam_marks" class="form-control" id="II_lang_II_term_exam_marks_id"></td>

              <td> <input type="text" name="II_lang_II_term_total_marks" class="form-control" id="II_lang_II_term_total_marks_id"></td>

              <td> <input type="text" name="II_lang_II_term_grade" class="form-control"id="II_lang_II_term_grade_id"></td>


              <td> <input type="number" name="II_lang_III_term_assesment_marks" class="form-control" id="II_lang_III_term_assesment_marks_id"></td>

              <td> <input type="number" name="II_lang_III_term_exam_marks" class="form-control" id="II_lang_III_term_exam_marks_id"></td>

              <td> <input type="text" name="II_lang_III_term_total_marks" class="form-control" id="II_lang_III_term_total_marks_id"></td>

              <td> <input type="text" name="II_lang_III_term_grade" class="form-control" id="II_lang_III_term_grade_id"></td>

            </tr>


            <tr> 

              <td colspan="1"> Mathematics </td>

              <td colspan="1"> <input type="text" name="math_unit_I_marks" class="form-control " id="math_unit_I_marks_id" style="width: 120px;margin: auto;"></td>


              <td> <input type="number" name="math_I_term_assesment_marks" class="form-control" id="math_I_term_assesment_marks_id"></td>

              <td> <input type="number" name="math_I_term_exam_marks" class="form-control" id="math_I_term_exam_marks_id"></td>

              <td> <input type="text" name="math_I_term_total_marks" class="form-control" id="math_I_term_total_marks_id"></td>

              <td> <input type="text" name="math_I_term_grade" class="form-control" id="math_I_term_grade_id"></td>


              <td> <input type="number" name="math_II_term_assesment_marks" class="form-control" id="math_II_term_assesment_marks_id"></td>

              <td> <input type="number" name="math_II_term_exam_marks" class="form-control" id="math_II_term_exam_marks_id"></td>

              <td> <input type="text" name="math_II_term_total_marks" class="form-control" id="math_II_term_total_marks_id"></td>

              <td> <input type="text" name="math_II_term_grade" class="form-control" id="math_II_term_grade_id"></td>


              <td> <input type="number" name="math_III_term_assesment_marks" class="form-control" id="math_III_term_assesment_marks_id"></td>

              <td> <input type="number" name="math_III_term_exam_marks" class="form-control" id="math_III_term_exam_marks_id"></td>

              <td> <input type="text" name="math_III_term_total_marks" class="form-control" id="math_III_term_total_marks_id"></td>

              <td> <input type="text" name="math_III_term_grade" class="form-control" id="math_III_term_grade_id"></td>

            </tr>

            <tr> 

              <td colspan="1"> Science </td>

              <td colspan="1"> <input type="text" name="science_unit_I_marks" class="form-control " id="science_unit_I_marks_id" style="width: 120px;margin: auto;"></td>


              <td> <input type="number" name="science_I_term_assesment_marks" class="form-control" id="science_I_term_assesment_marks_id"></td>

              <td> <input type="number" name="science_I_term_exam_marks" class="form-control" id="science_I_term_exam_marks_id"></td>

              <td> <input type="text" name="science_I_term_total_marks" class="form-control" id="science_I_term_total_marks_id"></td>

              <td> <input type="text" name="science_I_term_grade" class="form-control" id="science_I_term_grade_id"></td>


              <td> <input type="number" name="science_II_term_assesment_marks" class="form-control" id="science_II_term_assesment_marks_id"></td>

              <td> <input type="number" name="science_II_term_exam_marks" class="form-control" id="science_II_term_exam_marks_id"></td>

              <td> <input type="text" name="science_II_term_total_marks" class="form-control" id="science_II_term_total_marks_id"></td>

              <td> <input type="text" name="science_II_term_grade" class="form-control"id="science_II_term_grade_id"></td>


              <td> <input type="number" name="science_III_term_assesment_marks" class="form-control" id="science_III_term_assesment_marks_id"></td>

              <td> <input type="number" name="science_III_term_exam_marks" class="form-control" id="science_III_term_exam_marks_id"></td>

              <td> <input type="text" name="science_III_term_total_marks" class="form-control" id="science_III_term_total_marks_id"></td>

              <td> <input type="text" name="science_III_term_grade" class="form-control" id="science_III_term_grade_id"></td>

            </tr>

            <tr> 

              <td colspan="1"> Computer Applications </td>

              <td colspan="1"> <input type="text" name="computer_app_unit_I_marks" class="form-control " id="computer_app_unit_I_marks_id" style="width: 120px;margin: auto;"></td>


              <td> <input type="number" name="computer_app_I_term_assesment_marks" class="form-control" id="computer_app_I_term_assesment_marks_id"></td>

              <td> <input type="number" name="computer_app_I_term_exam_marks" class="form-control" id="computer_app_I_term_exam_marks_id"></td>

              <td> <input type="text" name="computer_app_I_term_total_marks" class="form-control" id="computer_app_I_term_total_marks_id"></td>

              <td> <input type="text" name="computer_app_I_term_grade" class="form-control" id="computer_app_I_term_grade_id"></td>


              <td> <input type="number" name="computer_app_II_term_assesment_marks" class="form-control" id="computer_app_II_term_assesment_marks_id"></td>

              <td> <input type="number" name="computer_app_II_term_exam_marks" class="form-control" id="computer_app_II_term_exam_marks_id"></td>

              <td> <input type="text" name="computer_app_II_term_total_marks" class="form-control" id="computer_app_II_term_total_marks_id"></td>

              <td> <input type="text" name="computer_app_II_term_grade" class="form-control" id="computer_app_II_term_grade_id"></td>


              <td> <input type="number" name="computer_app_III_term_assesment_marks" class="form-control" id="computer_app_III_term_assesment_marks_id"></td>

              <td> <input type="number" name="computer_app_III_term_exam_marks" class="form-control" id="computer_app_III_term_exam_marks_id"></td>

              <td> <input type="text" name="computer_app_III_term_total_marks" class="form-control" id="computer_app_III_term_total_marks_id"></td>

              <td> <input type="text" name="computer_app_III_term_grade" class="form-control" id="computer_app_III_term_grade_id"></td>

            </tr>

            <tr> 

              <td colspan="1"> III Language </td>

              <td colspan="1"> <input type="text" name="III_lang_unit_I_marks" class="form-control " id="III_lang_unit_I_marks_id" style="width: 120px;margin: auto;"></td>

              <td> <input type="number" name="III_lang_I_term_assesment_marks" class="form-control" id="III_lang_I_term_assesment_marks_id"></td>

              <td> <input type="number" name="III_lang_I_term_exam_marks" class="form-control" id="III_lang_I_term_exam_marks_id"></td>

              <td> <input type="text" name="III_lang_I_term_total_marks" class="form-control" id="III_lang_I_term_total_marks_id"></td>

              <td> <input type="text" name="III_lang_I_term_grade" class="form-control" id="III_lang_I_term_grade_id"></td>


              <td> <input type="number" name="III_lang_II_term_assesment_marks" class="form-control" id="III_lang_II_term_assesment_marks_id"></td>

              <td> <input type="number" name="III_lang_II_term_exam_marks" class="form-control" id="III_lang_II_term_exam_marks_id"></td>

              <td> <input type="text" name="III_lang_II_term_total_marks" class="form-control" id="III_lang_II_term_total_marks_id"></td>

              <td> <input type="text" name="III_lang_II_term_grade" class="form-control" id="III_lang_II_term_grade_id"></td>


              <td> <input type="number" name="III_lang_III_term_assesment_marks" class="form-control" id="III_lang_III_term_assesment_marks_id"></td>

              <td> <input type="number" name="III_lang_III_term_exam_marks" class="form-control" id="III_lang_III_term_exam_marks_id"></td>

              <td> <input type="text" name="III_lang_III_term_total_marks" class="form-control" id="III_lang_III_term_total_marks_id"></td>

              <td> <input type="text" name="III_lang_III_term_grade" class="form-control" id="III_lang_III_term_grade_id"></td>

            </tr>


            <tr> 

              <td colspan="1"> Total </td>

              <td colspan="1"> <input type="text" name="total_unit_I_marks" class="form-control " style="width: 120px;margin: auto;" id="total_unit_I_marks_id" ></td>

              <td> <input type="text" name="total_I_term_assesment_marks" class="form-control" id="total_I_term_assesment_marks_id" ></td>

              <td> <input type="text" name="total_I_term_exam_marks" class="form-control" id="total_I_term_exam_marks_id" ></td>

              <td> <input type="text" name="total_I_term_total_marks" class="form-control" id="total_I_term_total_marks_id" ></td>

              <td> <input type="text" name="total_I_term_grade" class="form-control"></td>


              <td> <input type="text" name="total_II_term_assesment_marks" class="form-control" id="total_II_term_assesment_marks_id" ></td>

              <td> <input type="text" name="total_II_term_exam_marks" class="form-control" id="total_II_term_exam_marks_id" ></td>

              <td> <input type="text" name="total_II_term_total_marks" class="form-control" id="total_II_term_total_marks_id" ></td>

              <td> <input type="text" name="total_II_term_grade" class="form-control" ></td>


              <td> <input type="text" name="total_III_term_assesment_marks" class="form-control" id="total_III_term_assesment_marks_id" ></td>

              <td> <input type="text" name="total_III_term_exam_marks" class="form-control" id="total_III_term_exam_marks_id" ></td>

              <td> <input type="text" name="total_III_term_total_marks" class="form-control" id="total_III_term_total_marks_id" ></td>

              <td> <input type="text" name="total_III_term_grade" class="form-control"  ></td>

            </tr>

            <tr> 

              <td colspan="1"> Attendance </td>

              <td colspan="1"> <input type="text" name="attendance_unit_I" class="form-control " style="width: 120px;margin: auto;"></td>

              
              <td colspan="4"> <input type="text" name="attendance_I_term" class="form-control"></td>
              <td colspan="4"> <input type="text" name="attendance_II_term" class="form-control"></td>
              <td colspan="4"> <input type="text" name="attendance_III_term" class="form-control"></td>
              

            </tr>

            <tr> 

              <td colspan="1"> Remarks </td>

              <td colspan="1"> <input type="text" name="remarks_unit_I" class="form-control"></td>

              <td colspan="4"> <input type="text" name="remarks_I_term" class="form-control"></td>
              <td colspan="4"> <input type="text" name="remarks_II_term" class="form-control"></td>
              <td colspan="4"> <input type="text" name="remarks_III_term" class="form-control"></td>

            </tr>

            <tr> 

              <td colspan="1">  Percentage </td>

              <td colspan="1"> </td>

              <td colspan="4">  <input type="text" name="percentage_I_term" class="form-control" id="percentage_I_term_id"></td>

              <td colspan="4">  <input type="text" name="percentage_II_term" class="form-control" id="percentage_II_term_id"></td>

              <td colspan="4">  <input type="text" name="percentage_III_term" class="form-control" id="percentage_III_term_id"></td>

            </tr>

            <tr> 

              <td colspan="1"> Total Percentage </td>

              <td colspan="1"> <input type="text" name="total_percentage" class="form-control" style="width: 120px;margin: auto;"> </td>

              <td colspan="14">  </td>

            </tr>


            <tr> 

              <td colspan="16"> </td>

            </tr>

            <tr> 

              <td colspan="16"> Signature  </td>

            </tr>

            <tr> 

              <td colspan="1"> Class Teacher  </td>
              <td colspan="1">  <input type="file" name="classteacher_sign_unit_I"> </td>
              <td colspan="4">  <input type="file" name="classteacher_sign_I_term"> </td>
              <td colspan="4">  <input type="file" name="classteacher_sign_II_term"> </td>
              <td colspan="4">  <input type="file" name="classteacher_sign_III_term"> </td>

            </tr>

            <tr> 

              <td colspan="1"> Principal  </td>
              <td colspan="1">  <input type="file" name="principal_sign_unit_I" ></td>

              <td colspan="4">   <input type="file" name="principal_sign_I_term" ></td>
              <td colspan="4">  <input type="file" name="principal_sign_II_term" > </td>
              <td colspan="4">   <input type="file" name="principal_sign_III_term" ></td>

            </tr>

            <tr> 

              <td colspan="1"> Parent  </td>
              <td colspan="1">  <input type="file" name="parent_sign_unit_I" ></td>

              <td colspan="4"> <input type="file" name="parent_sign_I_term" >  </td>
              <td colspan="4">  <input type="file" name="parent_sign_II_term" > </td>
              <td colspan="4"> <input type="file" name="parent_sign_III_term" >  </td>

            </tr>


          </tbody>

        </table>

      </div>

      <div class="d-flex justify-content-center mt-3 mb-3">
          <button type=" text submit" class="btn btn-success"> Submit </button>          
      </div>

    </form>  

</section>

<style type="text/css">
  
  th{

    font-size: 14px;

  }

 
 #table_gradient{

      background-image: linear-gradient(to top,rgb(255, 235, 204),rgb(255, 245, 230) 
);

 }

th , td {

  border: 0.1px solid rgb(153, 77, 0) !important;

}

.td_input_width_100px{

    width: 100px !important;

}

.td_input_min_width_200px{

    min-width: 200px;

}


.table-responsive{

    border: 5.0px solid #ff9900;

}

</style>





@endsection