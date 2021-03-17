@extends('school.layout')

@section('content')

<section class="student-details-add-new" id="form_gradient">
      
      <div class="col-5 m-auto p-5">

       <div class="container mb-5" style="border:5.0px solid #ff9900;">

          <h1 class="text-center mb-5" style="color: #800000;text-shadow: 2px 2px 8px #FF0000;"> Student Details </h1>
            
            <form action=" {{ route('student.store') }} " method="POST">
              
              @csrf

                <div class="row mt-5">
                
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <label> Admission Number </label>

                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                      <input type="text" name="" class="form-control" required>

                  </div>

                </div>


                <div class="row mt-5">
                
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <label> Roll Number </label>

                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" required>

                  </div>

                </div>

                

              
                <div class="row mt-5">
                
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <label> Student Name </label>

                  </div>

                  <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="first name" required>

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="middle name">

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="last name" required>

                  </div> -->

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <input type="" name="" class="form-control">
                  </div>

                </div>



                <div class="row mt-5">
                
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <label> Father Name </label>

                  </div>

                  <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="first name" required>

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="middle name">

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="last name" required>

                  </div> -->

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <input type="" name="" class="form-control">
                  </div>

                </div>



                <div class="row mt-5">
                
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <label> Mother Name </label>

                  </div>

             

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <input type="" name="" class="form-control">
                  </div>

                </div>


                <div class="row mt-5">
                
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <label> Class </label>

                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <select class="form-control" id="class_id" required>
                        <option>  </option>
                        <option value="Nursery"> Nursery </option>
                        <option value="K.G."> K.G. </option>
                        <option value="I"> I </option>
                        <option value="II"> II </option>
                        <option value="III"> III </option>
                        <option value="IV"> IV</option>
                        <option value="V"> V </option>
                        <option value="VI"> VI </option>
                        <option value="VII"> VII </option>
                        <option value="VIII"> VIII </option>
                        <option value="IX"> IX </option>
                        <option value="X"> X </option>
                      </select>

                  </div>

                </div>

                <div class="row mt-5">

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <label> Section </label>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <select class="form-control" required>
                      <option>  </option>
                      <option> A </option>
                      <option> B </option>
                      <option> C </option>
                      <option> D </option>
                    </select>
                  </div>

                </div>


                <div class="row mt-5 ncc">
                
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    
                    <label> NCC </label>

                  </div>

                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

                      <select class="form-control" required>
                        <option> </option>
                        <option value="yes">Yes</option>
                        <option value="no"> NO </option>
                      </select>

                  </div>

                </div>

                <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Date of Birth </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <input type="text" name="" class="form-control datepicker pl-3" placeholder="select date" required>
                          </div>

                </div>

                <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Date of Joining </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <input type="text" name="" class="form-control datepicker pl-3" placeholder="select date" required>
                          </div>

                      </div>

                        <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Gender </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" required>
                                <option> </option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                          </div>

                      </div>

                      <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> House </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" required>
                                <option>  </option>
                                <option> House 1 </option>
                                <option> House 2 </option>
                                <option> House 3 </option>
                                <option> House 4 </option>
                              </select>
                          </div>

                      </div>

                    <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Secondary Language </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" required>
                                <option>  </option>
                                <option> Hindi </option>
                                <option> Telgu </option>
                              </select>
                          </div>

                      </div>


                      <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Third Language  </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" required>
                                <option>  </option>
                                <option> </option>
                                <option> </option>
                              </select>
                          </div>

                      </div>

                      <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Caste </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" required>
                                <option>  </option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                          </div>

                      </div>


                      <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Adharcard Number  </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                
                              <select class="form-control" id="adhar_num_id"required>
                                <option>  </option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>

                          </div>

                      </div>



                

                <div class="row mt-5 adhar_num">
                
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <label> Adharcard Number  </label>

                  </div>

                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

                    <div class="row">
                      
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="row">
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div>
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div> 
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div> 
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div>   
                        </div>

                      </div>

                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="row">
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div>
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div> 
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div> 
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div>   
                        </div>
                        
                      </div>

                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        
                        <div class="row">
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div>
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div> 
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div> 
                            <div class="col-3">
                                <input type="" name="" class="form-control">
                            </div>   
                        </div>

                      </div>

                    </div>
                  
                  </div>  

                </div>

                <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> School Lunch </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" required>
                                <option> </option>
                                <option>Yes</option>
                                <option>No</option>
                              </select>
                          </div>

                  </div>

                  <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Sibling </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" id="sibling_id" required>
                                <option> </option>
                                <option value="yes"> Yes </option>
                                <option value="no"> No </option>
                              </select>
                          </div>

                      </div>


            


                <div class="row mt-5 sibling">

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <label> Sibling Name </label>

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="sibling name" required>

                  </div>

                </div>


                <div class="row mt-5 sibling">
                
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <div class="row">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Class </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" required>
                                <option>  </option>
                                <option> Nursery </option>
                                <option> K.G. </option>
                                <option> I </option>
                                <option> II </option>
                                <option> III </option>
                                <option> IV</option>
                                <option> V </option>
                                <option> VI </option>
                                <option> VII </option>
                                <option> VIII </option>
                                <option> IX </option>
                                <option> X </option>
                              </select>
                          </div>

                      </div>

                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <div class="row">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Section </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" required>
                                <option>  </option>
                                <option> A </option>
                                <option> B </option>
                                <option> C </option>
                                <option> D </option>
                              </select>
                          </div>

                      </div>

                  </div>

                </div>
                
                <div class="row mt-5 sibling">
                  
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                       <button class="btn btn-info"> Add Sibling </button>
                  </div>

                </div>

                <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> School Lunch </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" required>
                                <option>  </option>
                                <option> Yes </option>
                                <option> No </option>
                              </select>
                          </div>

                </div>

                <div class="row mt-5">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Bus Transport Facility </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <select class="form-control" id="bus_transport_id"required>
                                <option> </option>
                                <option value="yes"> Yes </option>
                                <option value="no"> No </option>
                              </select>
                          </div>

                      </div>


                

                <div class="row mt-5 bus_transport">
                
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <div class="row">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Bus number </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <input type="text" name="" class="form-control" required>
                          </div>

                      </div>

                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <div class="row">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Conductor Contact Number </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <input type="" name="" class="form-control" required>
                          </div>

                      </div>

                  </div>

                </div>

                <div class="row mt-5 bus_transport">
                
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <label> Conductor Name </label>

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="first name" required>

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="middle name">

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="last name" required>

                  </div>

                </div>

                <div class="row mt-5 bus_transport">
                
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <label> Bus Stoppage points  </label>

                  </div>

                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

                    <textarea class="form-control" rows="4" name="bus_stoppage_points" required></textarea>
                  
                  </div>  

                </div>


                <div class="row mt-5 bus_transport">
                
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <label> Father  Name </label>

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="first name" required>

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="middle name">

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="last name" required>

                  </div>

                </div>

                <div class="row mt-5 bus_transport">
                
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <label> Mother Name </label>

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="first name" required>

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="middle name">

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                      <input type="text" name="" class="form-control" placeholder="last name" required>

                  </div>

                </div>


                <div class="row mt-5 bus_transport">
                
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <div class="row">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Father’s Contact Number </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <input type="text" name="" class="form-control" required>
                          </div>

                      </div>

                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      
                      <div class="row">

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <label> Mother’s Contact Number </label>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <input type="" name="" class="form-control" required>
                          </div>

                      </div>

                  </div>

                </div>
                



                <div class="row mt-5 mb-5">
                
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

                  </div>

                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                      
                    <div class="d-flex justify-content-center">
                    
                      <button type="submit" class="btn btn-success mr-5"> Submit </button>

                    </div> 

                  </div>

                </div>

            </form>

        </div>

      </div>

</section>

<style type="text/css">
  

 
 #form_gradient{

      background-image: linear-gradient(to top,rgb(255, 235, 204),rgb(255, 245, 230) 
);

 }

/*form{

    border: 5.0px solid #ff9900 !important;

}
*/
</style>

@endsection