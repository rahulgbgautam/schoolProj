@extends('school.layout')

@section('content')

<section class="term-wise">

      <h1 class="text-center mt-5"> Term III Wise Report </h1>

      @if($TermVise)

           @foreach($TermVise as $var)    

                
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

                          <th colspan="1" class="text-center" style="background-color: #993300;color: #fff;"> </th>

                          <th colspan="4" class="text-center" style="background-color: #993300;color: #fff;"> III Term Examination </th>

                        </tr>

                        <tr>

                          <th colspan="1" class="td_input_min_width_200px">  Subject </th>
                          <th class="td_input_width_100px"> ASSESMENT MARKS </th>
                          <th class="td_input_width_100px"> EXAMINATION MARKS </th>
                          <th class="td_input_width_100px"> TOTAL MARKS </th>                        
                          <th class="td_input_width_100px"> GRADE </th>
                          

                        </tr>

                      </thead>


                      <tbody>
                        
                       

                            <tr> 

                              <td colspan="1"> English-I(Lang.) </td>

                                  <td> {{ $var->english_lang_III_term_assesment_marks }} </td>

                                  <td> {{ $var->english_lang_III_term_exam_marks }} </td>

                                  <td> {{ $var->english_lang_III_term_total_marks }} </td>

                                  <td> {{ $var->english_lang_III_term_grade }} </td>

                                

                            </tr>


                            <tr> 

                              <td colspan="1"> English-II(Lit.) </td>


                              <td> {{ $var->english_lit_III_term_assesment_marks }}</td>

                              <td> {{ $var->english_lit_III_term_exam_marks }}</td>

                              <td> {{ $var->english_lit_III_term_total_marks }}</td>

                              <td> {{ $var->english_lit_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> English(Avg.) </td>

                              <td> {{ $var->english_avg_III_term_assesment_marks }}</td>

                              <td> {{ $var->english_avg_III_term_exam_marks }}</td>

                              <td> {{ $var->english_avg_III_term_total_marks }}</td>

                              <td> {{ $var->english_avg_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Social Studies </td>

                              <td> {{ $var->social_studies_III_term_assesment_marks }}</td>

                              <td> {{ $var->social_studies_III_term_exam_marks }}</td>

                              <td> {{ $var->social_studies_III_term_total_marks }}</td>

                              <td> {{ $var->social_studies_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> II Language( Telugu / Hindi ) </td>

                              <td> {{ $var->II_lang_III_term_assesment_marks }}</td>

                              <td> {{ $var->II_lang_III_term_exam_marks }}</td>

                              <td> {{ $var->II_lang_III_term_total_marks }}</td>

                              <td> {{ $var->II_lang_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Mathematics </td>

                              <td> {{ $var->math_III_term_assesment_marks }}</td>

                              <td> {{ $var->math_III_term_exam_marks }}</td>

                              <td> {{ $var->math_III_term_total_marks }}</td>

                              <td> {{ $var->math_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Science </td>

                              <td> {{ $var->science_III_term_assesment_marks }}</td>

                              <td> {{ $var->science_III_term_exam_marks }}</td>

                              <td> {{ $var->science_III_term_total_marks }}</td>

                              <td> {{ $var->science_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Computer Applications </td>

                              <td> {{ $var->computer_app_III_term_assesment_marks }}</td>

                              <td> {{ $var->computer_app_III_term_exam_marks }}</td>

                              <td> {{ $var->computer_app_III_term_total_marks }}</td>

                              <td> {{ $var->computer_app_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Computer Applications </td>

                              <td> {{ $var->III_lang_III_term_assesment_marks }}</td>

                              <td> {{ $var->III_lang_III_term_exam_marks }}</td>

                              <td> {{ $var->III_lang_III_term_total_marks }}</td>

                              <td> {{ $var->III_lang_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Total </td>

                              <td> {{ $var->total_III_term_assesment_marks }}</td>

                              <td> {{ $var->total_III_term_exam_marks }}</td>

                              <td> {{ $var->total_III_term_total_marks }}</td>

                              <td> {{ $var->total_III_term_grade }}</td>

                            </tr>


                            <tr> 

                              <td colspan="1"> Attendance </td>

                              <td colspan="4"> {{ $var->attendance_III_term }}</td>


                            </tr>


                            <tr> 

                              <td colspan="2"> Remarks </td>

                              <td colspan="4"> {{ $var->remarks_III_term }}</td>

                            </tr>
                            
                            <tr> 

                              <td colspan="1"> Percentage </td>

                            
                              <td colspan="1"> </td>


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

                              <td colspan="4">  <img src="{{ asset($var->classteacher_sign_III_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>


                            </tr>

                            <tr> 

                              <td colspan="1"> Principal  </td>

                              <td colspan="4">  <img src="{{ asset($var->principal_sign_III_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>

                            </tr>

                            <tr> 

                              <td colspan="1"> Parent  </td>

                              <td colspan="4">  <img src="{{ asset($var->parent_sign_III_term)  }}" class="img-fluid" style="height: 100px; width: 100px;"> </td>

                            </tr>


            @endforeach

             </tbody> 

            </div>

      @endif

</section>

@endsection