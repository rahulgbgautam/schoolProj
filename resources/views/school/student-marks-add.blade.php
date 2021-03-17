@extends('school.layout')

@section('content')

<section class="student-marks-add p-3">
     
    <h1 class="text-center mt-5 mb-5" style="color: #800000;text-shadow: 2px 2px 8px #FF0000;"> Academics </h1>  

    <form action=" {{ route('student-marks.store') }} " method="POST">

      @csrf 

      <div class="table-responsive">

        <table class="table table-bordered" id="table_gradient">

          <thead>

            <tr>

              <th colspan="2" class="text-center"> UNIT-I </th>
              <th colspan="5" class="text-center"> I Term Examination </th>
              <th colspan="5" class="text-center"> II Term Examination  </th>
              <th colspan="5" class="text-center"> III Term Examination </th>

            </tr>

            <tr>

              <th colspan="1" class="td_input_min_width_200px"> Subject </th>
              <th colspan="1" class="td_input_width_120px"> Marks   </th>

              <th class="td_input_width_120px"> ASSESMENT MARKS </th>
              <th class="td_input_width_120px"> EXAMINATION MARKS </th>
              <th class="td_input_width_120px"> TOTAL MARKS </th>
              <th class="td_input_width_120px"> Percentage </th>
              <th class="td_input_width_120px"> GRADE </th>

              <th class="td_input_width_120px"> ASSESMENT MARKS </th>
              <th class="td_input_width_120px"> EXAMINATION MARKS </th>
              <th class="td_input_width_120px"> TOTAL MARKS </th>
              <th class="td_input_width_120px"> Percentage </th>
              <th class="td_input_width_120px"> GRADE </th>

              <th class="td_input_width_120px"> ASSESMENT MARKS </th>
              <th class="td_input_width_120px"> EXAMINATION MARKS </th>
              <th class="td_input_width_120px"> TOTAL MARKS </th>
              <th class="td_input_width_120px"> Percentage</th>
              <th class="td_input_width_120px"> GRADE </th>
              
            </tr>

          </thead>

          <tbody>
            
            <tr> 

              <td colspan="1"> English-I(Lang.) </td>

              <td colspan="1"> <input type=" text " name="english_lang_marks" class="form-control "></td>


              <td> <input type=" text " name="english_lang_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_grade" class="form-control"></td>


              <td> <input type=" text " name="english_lang_II_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_II_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_II_term_total_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_II_term_grade" class="form-control"></td>


              <td> <input type=" text " name="english_lang_III_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_III_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_III_term_total_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lang_III_term_grade" class="form-control"></td>

            </tr>

            <tr> 

              <td colspan="1"> English-II(Lit.) </td>

              <td colspan="1">  <input type=" text " name="english_lit_marks" class="form-control"></td>


              <td> <input type=" text " name="english_lit_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lit_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lit_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="english_lit_grade" class="form-control"></td>


              <td> <input type=" text " name="english_lit_II_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lit_II_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lit_II_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="english_lit_II_term_grade" class="form-control"></td>


              <td> <input type=" text " name="english_lit_III_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lit_III_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="english_lit_III_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="english_lit_III_term_grade" class="form-control"></td>

            </tr>

            <tr> 

              <td colspan="1"> English(Avg.) </td>

              <td colspan="1"> <input type=" text " name="english_avg_marks" class="form-control"></td>


              <td> <input type=" text " name="english_avg_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="english_avg_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="english_avg_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="english_avg_grade" class="form-control"></td>


              <td> <input type=" text " name="english_avg_II_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="english_avg_II_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="english_avg_II_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="english_avg_II_term_grade" class="form-control"></td>

              <td> <input type=" text " name="english_avg_III_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="english_avg_III_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="english_avg_III_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="english_avg_III_term_grade" class="form-control"></td>

            </tr>


            <tr> 

              <td colspan="1"> Social Studies </td>

              <td colspan="1"> <input type=" text " name="social_studies_marks" class="form-control"></td>


              <td> <input type=" text " name="social_studies_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="social_studies_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="social_studies_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="social_studies_grade" class="form-control"></td>


              <td> <input type=" text " name="social_studies_II_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="social_studies_II_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="social_studies_II_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="social_studies_II_term_grade" class="form-control"></td>


              <td> <input type=" text " name="social_studies_III_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="social_studies_III_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="social_studies_III_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="social_studies_III_term_grade" class="form-control"></td>

            </tr>


            <tr> 

              <td colspan="1"> II Language( Telugu / Hindi ) </td>

              <td colspan="1"> <input type=" text " name="II_lang_marks" class="form-control"></td>


              <td> <input type=" text " name="II_lang_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="II_lang_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="II_lang_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="II_lang_grade" class="form-control"></td>


              <td> <input type=" text " name="II_lang_II_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="II_lang_II_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="II_lang_II_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="II_lang_II_term_grade" class="form-control"></td>


              <td> <input type=" text " name="II_lang_III_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="II_lang_III_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="II_lang_III_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="II_lang_III_term_grade" class="form-control"></td>

            </tr>


            <tr> 

              <td colspan="1"> Mathematics </td>

              <td colspan="1"> <input type=" text " name="math_marks" class="form-control"></td>


              <td> <input type=" text " name="math_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="math_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="math_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="math_grade" class="form-control"></td>


              <td> <input type=" text " name="math_II_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="math_II_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="math_II_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="math_II_term_grade" class="form-control"></td>


              <td> <input type=" text " name="math_III_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="math_III_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="math_III_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="math_III_term_grade" class="form-control"></td>

            </tr>

            <tr> 

              <td colspan="1"> Science </td>

              <td colspan="1"> <input type=" text " name="science_marks" class="form-control"></td>


              <td> <input type=" text " name="science_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="science_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="science_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="science_grade" class="form-control"></td>


              <td> <input type=" text " name="science_II_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="science_II_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="science_II_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="science_II_term_grade" class="form-control"></td>


              <td> <input type=" text " name="science_III_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="science_III_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="science_III_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="science_III_term_grade" class="form-control"></td>

            </tr>

            <tr> 

              <td colspan="1"> Computer Applications </td>

              <td colspan="1"> <input type=" text " name="computer_app_marks" class="form-control"></td>


              <td> <input type=" text " name="computer_app_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="computer_app_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="computer_app_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="computer_app_grade" class="form-control"></td>


              <td> <input type=" text " name="computer_app_II_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="computer_app_II_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="computer_app_II_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="computer_app_II_term_grade" class="form-control"></td>


              <td> <input type=" text " name="computer_app_III_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="computer_app_III_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="computer_app_III_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="computer_app_III_term_grade" class="form-control"></td>

            </tr>


            <tr> 

              <td colspan="1"> Total </td>

              <td colspan="1"> <input type=" text " name="total_marks" class="form-control"></td>


              <td> <input type=" text " name="total_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="total_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="total_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="total_grade" class="form-control"></td>


              <td> <input type=" text " name="total_II_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="total_II_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="total_II_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="total_II_term_grade" class="form-control"></td>


              <td> <input type=" text " name="total_III_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="total_III_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="total_III_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="total_III_term_grade" class="form-control"></td>

            </tr>

            <tr> 

              <td colspan="1"> III Language </td>


              <td colspan="1"> <input type=" text " name="III_lang_marks" class="form-control"></td>


              <td> <input type=" text " name="III_lang_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="III_lang_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="III_lang_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="III_lang_grade" class="form-control"></td>


              <td> <input type=" text " name="III_lang_II_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="III_lang_II_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="III_lang_II_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="III_lang_II_term_grade" class="form-control"></td>


              <td> <input type=" text " name="III_lang_III_term_assesment_marks" class="form-control"></td>
              <td> <input type=" text " name="III_lang_III_term_exam_marks" class="form-control"></td>
              <td> <input type=" text " name="III_lang_III_term_total_marks" class="form-control"></td>

              <td> <input type=" text " name="english_lang_total_marks" class="form-control"></td>


              <td> <input type=" text " name="III_lang_III_term_grade" class="form-control"></td>

            </tr>

            <tr> 

              <td colspan="1"> Attendance </td>

              <td colspan="1"> <input type="text" name="" class="form-control"></td>

              <td colspan="5"> <input type="text" name="" class="form-control"></td>
              <td colspan="5"> <input type="text" name="" class="form-control"></td>
              <td colspan="5"> <input type="text" name="" class="form-control"></td>
              

            </tr>

            <tr> 

              <td colspan="2"> Remarks </td>

              <td colspan="5"> <input type="text" name="" class="form-control"></td>
              <td colspan="5"> <input type="text" name="" class="form-control"></td>
              <td colspan="5"> <input type="text" name="" class="form-control"></td>
              


            </tr>

            <tr> 

              <td colspan="17"> </td>

              

            </tr>

            <tr> 

              <td colspan="2"> Signature  </td>
              
              
              <td colspan="15">  </td>
              

            </tr>

            <tr> 

              <td colspan="1"> Class Teacher  </td>
              
              <td colspan="1">  <input type="" name="" class="form-control"></td>

              <td colspan="5">  <input type="" name="" class="form-control"> </td>
              <td colspan="5">  <input type="" name="" class="form-control"> </td>
              <td colspan="5">  <input type="" name="" class="form-control"> </td>
              


            </tr>


            <tr> 

              <td colspan="1"> Principal  </td>
              
              <td colspan="1">  <input type="" name="" class="form-control"></td>

              <td colspan="5">   <input type="" name="" class="form-control"></td>
              <td colspan="5">  <input type="" name="" class="form-control"> </td>
              <td colspan="5">   <input type="" name="" class="form-control"></td>
              


            </tr>

            <tr> 

              <td colspan="1"> Parent  </td>
              
              <td colspan="1">  <input type="" name="" class="form-control"></td>

              <td colspan="5"> <input type="" name="" class="form-control">  </td>
              <td colspan="5">  <input type="" name="" class="form-control"> </td>
              <td colspan="5"> <input type="" name="" class="form-control">  </td>
              


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

.td_input_width_120px{

    min-width: 120px !important;

}

.td_input_min_width_200px{

    min-width: 200px;

}


.table-responsive{

    border: 5.0px solid #ff9900;

}


</style>


@endsection