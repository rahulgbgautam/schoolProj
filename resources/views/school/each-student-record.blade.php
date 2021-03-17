@extends('school.layout')

@section('content')

<section class="term-wise p-3">
     
    
      <h1 class="text-center mt-5"> Each Student Record </h1>

             @if($EachStudentRecord)

                @foreach($EachStudentRecord as $var)  

                 <div class="row m-1" style="border: 1.0px solid #ff9900;">
              
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="table_gradient">
                  
                    <div class="form-group">
                        
                        <label for="student_name"> Student Name </label>
                        <p> {{ $var->student_name }} </p>

                    </div>

                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="table_gradient">
                  
                    <div class="form-group">
                        
                        <label for="roll_no"> Roll No </label>
                       <p> {{ $var->roll_no }} </p>

                    </div>

                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="table_gradient">
                  
                  <div class="form-group">
                        
                        <label for="student_class"> Class </label>
                        
                        <p> {{ $var->student_class }} </p>

                  </div>

                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" id="table_gradient">
                  
                  <div class="form-group">
                        
                        <label for="student_sec"> Section </label>
                        
                       <p> {{ $var->student_sec }} </p>

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

                              

                                  <td colspan="1">  {{ $var->english_lang_unit_I_marks }} </td>


                                  <td> {{ $var->english_lang_I_term_assesment_marks }} </td>

                                  <td> {{ $var->english_lang_I_term_exam_marks }} </td>

                                  <td> {{ $var->english_lang_I_term_total_marks }} </td>

                                  <td> {{ $var->english_lang_I_term_grade }} </td>


                                  <td> {{ $var->english_lang_II_term_assesment_marks }} </td>

                                  <td> {{ $var->english_lang_II_term_exam_marks }} </td>

                                  <td> {{ $var->english_lang_II_term_total_marks }} </td>


                                  <td> {{ $var->english_lang_II_term_grade }} </td>


                                  <td> {{ $var->english_lang_III_term_assesment_marks }} </td>

                                  <td> {{ $var->english_lang_III_term_exam_marks }} </td>

                                  <td> {{ $var->english_lang_III_term_total_marks }} </td>

                                  <td> {{ $var->english_lang_III_term_grade }} </td>

                                

                            </tr>


                            <tr> 

                              <td colspan="1"> English-II(Lit.) </td>

                              <td colspan="1">  {{ $var->english_lit_unit_I_marks }}</td>


                              <td> {{ $var->english_lit_I_term_assesment_marks }}</td>

                              <td> {{ $var->english_lit_I_term_exam_marks }}</td>

                              <td> {{ $var->english_lit_I_term_total_marks }}</td>

                              <td> {{ $var->english_lit_I_term_grade }}</td>


                              <td> {{ $var->english_lit_II_term_assesment_marks }}</td>

                              <td> {{ $var->english_lit_II_term_exam_marks }}</td>

                              <td> {{ $var->english_lit_II_term_total_marks }}</td>


                              <td> {{ $var->english_lit_II_term_grade }}</td>


                              <td> {{ $var->english_lit_III_term_assesment_marks }}</td>

                              <td> {{ $var->english_lit_III_term_exam_marks }}</td>

                              <td> {{ $var->english_lit_III_term_total_marks }}</td>

                              <td> {{ $var->english_lit_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> English(Avg.) </td>

                              <td colspan="1">  {{ $var->english_avg_unit_I_marks }}</td>


                              <td> {{ $var->english_avg_I_term_assesment_marks }}</td>

                              <td> {{ $var->english_avg_I_term_exam_marks }}</td>

                              <td> {{ $var->english_avg_I_term_total_marks }}</td>

                              <td> {{ $var->english_avg_I_term_grade }}</td>


                              <td> {{ $var->english_avg_II_term_assesment_marks }}</td>

                              <td> {{ $var->english_avg_II_term_exam_marks }}</td>

                              <td> {{ $var->english_avg_II_term_total_marks }}</td>


                              <td> {{ $var->english_avg_II_term_grade }}</td>


                              <td> {{ $var->english_avg_III_term_assesment_marks }}</td>

                              <td> {{ $var->english_avg_III_term_exam_marks }}</td>

                              <td> {{ $var->english_avg_III_term_total_marks }}</td>

                              <td> {{ $var->english_avg_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Social Studies </td>

                              <td colspan="1">  {{ $var->social_studies_unit_I_marks }}</td>


                              <td> {{ $var->social_studies_I_term_assesment_marks }}</td>

                              <td> {{ $var->social_studies_I_term_exam_marks }}</td>

                              <td> {{ $var->social_studies_I_term_total_marks }}</td>

                              <td> {{ $var->social_studies_I_term_grade }}</td>


                              <td> {{ $var->social_studies_II_term_assesment_marks }}</td>

                              <td> {{ $var->social_studies_II_term_exam_marks }}</td>

                              <td> {{ $var->social_studies_II_term_total_marks }}</td>


                              <td> {{ $var->social_studies_II_term_grade }}</td>


                              <td> {{ $var->social_studies_III_term_assesment_marks }}</td>

                              <td> {{ $var->social_studies_III_term_exam_marks }}</td>

                              <td> {{ $var->social_studies_III_term_total_marks }}</td>

                              <td> {{ $var->social_studies_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> II Language( Telugu / Hindi ) </td>

                              <td colspan="1">  {{ $var->II_lang_unit_I_marks }}</td>


                              <td> {{ $var->II_lang_I_term_assesment_marks }}</td>

                              <td> {{ $var->II_lang_I_term_exam_marks }}</td>

                              <td> {{ $var->II_lang_I_term_total_marks }}</td>

                              <td> {{ $var->II_lang_I_term_grade }}</td>


                              <td> {{ $var->II_lang_II_term_assesment_marks }}</td>

                              <td> {{ $var->II_lang_II_term_exam_marks }}</td>

                              <td> {{ $var->II_lang_II_term_total_marks }}</td>


                              <td> {{ $var->II_lang_II_term_grade }}</td>


                              <td> {{ $var->II_lang_III_term_assesment_marks }}</td>

                              <td> {{ $var->II_lang_III_term_exam_marks }}</td>

                              <td> {{ $var->II_lang_III_term_total_marks }}</td>

                              <td> {{ $var->II_lang_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Mathematics </td>

                              <td colspan="1">  {{ $var->math_unit_I_marks }}</td>


                              <td> {{ $var->math_I_term_assesment_marks }}</td>

                              <td> {{ $var->math_I_term_exam_marks }}</td>

                              <td> {{ $var->math_I_term_total_marks }}</td>

                              <td> {{ $var->math_I_term_grade }}</td>


                              <td> {{ $var->math_II_term_assesment_marks }}</td>

                              <td> {{ $var->math_II_term_exam_marks }}</td>

                              <td> {{ $var->math_II_term_total_marks }}</td>


                              <td> {{ $var->math_II_term_grade }}</td>


                              <td> {{ $var->math_III_term_assesment_marks }}</td>

                              <td> {{ $var->math_III_term_exam_marks }}</td>

                              <td> {{ $var->math_III_term_total_marks }}</td>

                              <td> {{ $var->math_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Science </td>

                              <td colspan="1">  {{ $var->science_unit_I_marks }}</td>


                              <td> {{ $var->science_I_term_assesment_marks }}</td>

                              <td> {{ $var->science_I_term_exam_marks }}</td>

                              <td> {{ $var->science_I_term_total_marks }}</td>

                              <td> {{ $var->science_I_term_grade }}</td>


                              <td> {{ $var->science_II_term_assesment_marks }}</td>

                              <td> {{ $var->science_II_term_exam_marks }}</td>

                              <td> {{ $var->science_II_term_total_marks }}</td>


                              <td> {{ $var->science_II_term_grade }}</td>


                              <td> {{ $var->science_III_term_assesment_marks }}</td>

                              <td> {{ $var->science_III_term_exam_marks }}</td>

                              <td> {{ $var->science_III_term_total_marks }}</td>

                              <td> {{ $var->science_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Computer Applications </td>

                              <td colspan="1">  {{ $var->computer_app_unit_I_marks }}</td>


                              <td> {{ $var->computer_app_I_term_assesment_marks }}</td>

                              <td> {{ $var->computer_app_I_term_exam_marks }}</td>

                              <td> {{ $var->computer_app_I_term_total_marks }}</td>

                              <td> {{ $var->computer_app_I_term_grade }}</td>


                              <td> {{ $var->computer_app_II_term_assesment_marks }}</td>

                              <td> {{ $var->computer_app_II_term_exam_marks }}</td>

                              <td> {{ $var->computer_app_II_term_total_marks }}</td>


                              <td> {{ $var->computer_app_II_term_grade }}</td>


                              <td> {{ $var->computer_app_III_term_assesment_marks }}</td>

                              <td> {{ $var->computer_app_III_term_exam_marks }}</td>

                              <td> {{ $var->computer_app_III_term_total_marks }}</td>

                              <td> {{ $var->computer_app_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Computer Applications </td>

                              <td colspan="1">  {{ $var->III_lang_unit_I_marks }}</td>


                              <td> {{ $var->III_lang_I_term_assesment_marks }}</td>

                              <td> {{ $var->III_lang_I_term_exam_marks }}</td>

                              <td> {{ $var->III_lang_I_term_total_marks }}</td>

                              <td> {{ $var->III_lang_I_term_grade }}</td>


                              <td> {{ $var->III_lang_II_term_assesment_marks }}</td>

                              <td> {{ $var->III_lang_II_term_exam_marks }}</td>

                              <td> {{ $var->III_lang_II_term_total_marks }}</td>


                              <td> {{ $var->III_lang_II_term_grade }}</td>


                              <td> {{ $var->III_lang_III_term_assesment_marks }}</td>

                              <td> {{ $var->III_lang_III_term_exam_marks }}</td>

                              <td> {{ $var->III_lang_III_term_total_marks }}</td>

                              <td> {{ $var->III_lang_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Total </td>

                              <td colspan="1">  {{ $var->total_unit_I_marks }}</td>


                              <td> {{ $var->total_I_term_assesment_marks }}</td>

                              <td> {{ $var->total_I_term_exam_marks }}</td>

                              <td> {{ $var->total_I_term_total_marks }}</td>

                              <td> {{ $var->total_I_term_grade }}</td>


                              <td> {{ $var->total_II_term_assesment_marks }}</td>

                              <td> {{ $var->total_II_term_exam_marks }}</td>

                              <td> {{ $var->total_II_term_total_marks }}</td>


                              <td> {{ $var->total_II_term_grade }}</td>


                              <td> {{ $var->total_III_term_assesment_marks }}</td>

                              <td> {{ $var->total_III_term_exam_marks }}</td>

                              <td> {{ $var->total_III_term_total_marks }}</td>

                              <td> {{ $var->total_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Attendance </td>

                              <td colspan="1">  {{ $var->attendance_unit_I }}</td>


                              <td colspan="4"> {{ $var->attendance_I_term }}</td>

                              <td colspan="4"> {{ $var->attendance_II_term }}</td>

                              <td colspan="4"> {{ $var->attendance_III_term }}</td>


                            </tr>


                            <tr> 

                              <td colspan="2"> Remarks </td>

                             


                              <td colspan="4">  {{ $var->remarks_I_term }}</td>

                              <td colspan="4"> {{ $var->remarks_II_term }}</td>

                              <td colspan="4"> {{ $var->remarks_III_term }}</td>


                            </tr>
                            
                            <tr> 

                              <td colspan="1"> Percentage </td>

                            
                              <td colspan="1"> </td>

                              <td colspan="4"> {{ $var->percentage_I_term }}</td>

                              <td colspan="4"> {{ $var->percentage_II_term }}</td>

                              <td colspan="4"> {{ $var->percentage_III_term }}</td>


                            </tr>


                             <tr> 

                              <td colspan="1"> Total Percentage </td>

                              <td colspan="1"> {{ $var->total_percentage }}</td>

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

                              <td colspan="1">  <img src="{{ asset($var->classteacher_sign_unit_I)  }}" class="img-fluid" style="height: 100px; width: 100px;">  </td>


                              <td colspan="4"> <img src="{{ asset($var->classteacher_sign_I_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>


                              <td colspan="4">  <img src="{{ asset($var->classteacher_sign_II_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>


                              <td colspan="4">  <img src="{{ asset($var->classteacher_sign_III_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>


                            </tr>

                            <tr> 

                              <td colspan="1"> Principal  </td>

                              <td colspan="1">  <img src="{{ asset($var->principal_sign_unit_I)  }}" class="img-fluid" style="height: 100px; width: 100px;">  </td>


                              <td colspan="4"> <img src="{{ asset($var->principal_sign_I_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>


                              <td colspan="4">  <img src="{{ asset($var->principal_sign_II_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>


                              <td colspan="4">  <img src="{{ asset($var->principal_sign_III_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>

                            </tr>

                            <tr> 

                              <td colspan="1"> Parent  </td>
                              
                              <td colspan="1">  <img src="{{ asset($var->parent_sign_unit_I)  }}" class="img-fluid" style="height: 100px; width: 100px;">  </td>


                              <td colspan="4"> <img src="{{ asset($var->parent_sign_I_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>


                              <td colspan="4">  <img src="{{ asset($var->parent_sign_II_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>


                              <td colspan="4">  <img src="{{ asset($var->parent_sign_III_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>

                            </tr>


                        @endforeach      

                    </tbody> 

                </div>

            @endif    



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