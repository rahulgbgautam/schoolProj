@extends('school.layout')

@section('content')

<section class="fees-structure pt-5 pb-5">
  
  <h1 class="text-center"> SIVA SIVANI PUBLIC SCHOOL </h1>
  <h3 class="text-center"> SECUNDERBAD / VISAKHAPATNAM </h3>

  <div class="container">
    
    <form action=" {{ route('fees-structure.store') }} " method="POST">

      @csrf

      <div class="row mt-5">

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12">

            <label> NO </label>

        </div>
        
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
              
            <input type="text" name="no" class="form-control">

        </div>

        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">

        </div>

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12">

            <label> Date </label>

        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
              
            <input type="text" name="date" class="form-control datepicker pl-3" placeholder="select date">

        </div>

      </div>


      <div class="row mt-3">

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12">

            <label> Name </label>

        </div>
        
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
              
            <input type="text" name="name" class="form-control">

        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

        </div>

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12">
                        
          <label> Class </label>

        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        
                        <div class="row">
                            
                            <div class="col-8">
                                
                                <select class="form-control" id="class_id"  name="class" >
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

                            <div class="col-4">
                                
                              <select class="form-control" name="section" >
                                  <option>  </option>
                                  <option value="A"> A </option>
                                  <option value="B"> B </option>
                                  <option value="C"> C </option>
                                  <option value="D"> D </option>
                              </select>

                            </div>

                        </div>
                            

        </div>

      </div>


      <div class="row mt-3">

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12">

            <label> Father's Name </label>

        </div>
        
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
              
            <input type="text" name="father_name" class="form-control">

        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

        </div>

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12">
                        
          <label> Admission No </label>

        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
           
           <input type="text" name="admission_no" class="form-control">                                     
                            
        </div>

      </div>


            <table class="table table-bordered mt-3" style="border: 5.0px solid rgb(153, 0, 61);">
              <thead>

                <tr>
                  <th class="text-center" >S.No.</th>
                  <th class="text-center" >Particulars</th>
                  <th class="text-center" colspan="2">Amount</th>
                  
                </tr>

                <tr>
                  <th></th>
                  <th></th>
                  <th class="text-center">RS</th>
                  <th class="text-center">PS</th>
                  
                </tr>

              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Admission Fee</td>
                  <td><input type="text" name="admission_fee_rs" class="form-control w-75 m-auto"></td>
                  <td><input type="text" name="admission_fee_ps" class="form-control w-75 m-auto"></td>
                  
                  
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Caution Deposit(Refundable)</td>
                  <td><input type="text" name="caution_deposit_fee_rs" class="form-control w-75 m-auto"></td>
                  <td><input type="text" name="caution_deposit_fee_ps" class="form-control w-75 m-auto"></td>
                  
                  
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Annual Fee</td>
                  <td><input type="text" name="annual_fee_rs" class="form-control w-75 m-auto"></td>
                  <td><input type="text" name="annual_fee_ps" class="form-control w-75 m-auto"></td>

                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td id="fee_term">Tution Fee

                      <select class="form-control w-50" name="tution_fee_term" >
                        <option> Select Term </option>
                        <option value="I"> I </option>
                        <option value="II"> II </option>
                        <option value="III"> III </option>
                        <option value="IV"> IV </option>
                      </select>

                  </td>
                  <td><input type="text" name="tution_fee_rs" class="form-control w-75 m-auto"></td>
                  <td><input type="text" name="tution_fee_ps" class="form-control w-75 m-auto"></td>

                  
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td id="fee_term">Bus Fee

                      <select class="form-control w-50" name="bus_fee_term" >
                        <option> Select Term </option>
                        <option value="I"> I </option>
                        <option value="II"> II </option>
                        <option value="III"> III </option>
                        <option value="IV"> IV </option>
                      </select>

                  </td>
                  <td><input type="text" name="bus_fee_rs" class="form-control w-75 m-auto"></td>
                  <td><input type="text" name="bus_fee_ps" class="form-control w-75 m-auto"></td>

                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td>Registration Fee</td>
                  <td><input type="text" name="registration_fee_rs" class="form-control w-75 m-auto"></td>
                  <td><input type="text" name="registration_fee_ps" class="form-control w-75 m-auto"></td>

                </tr>


                <tr>
                  <th scope="row">7</th>
                  <td> Prospectus </td>
                  <td><input type="text" name="prospectus_fee_rs" class="form-control w-75 m-auto"></td>
                  <td><input type="text" name="prospectus_fee_ps" class="form-control w-75 m-auto"></td>

                  
                </tr>

                <tr>

                  <th scope="row">8</th>
                  <td> Others </td>
                  <td><input type="text" name="others_fee_rs" class="form-control w-75 m-auto"></td>
                  <td><input type="text" name="others_fee_ps" class="form-control w-75 m-auto"></td>

                  
                </tr>


                <tr>
                  
                  <td colspan="2"> Rupees Total </td>

                  <td><input type="text" name="total_fee_rs" class="form-control w-75 m-auto"></td>
                  <td><input type="text" name="total_fee_ps" class="form-control w-75 m-auto"></td>

                  
                </tr>

                <tr>
                  
                  <td colspan="4"> <b style="font-size: 1.8rem;"> Note : </b>  Fees Once will paid not be refunded under any circumstances </td>

                  
                  
                </tr>


              </tbody>
            </table>

        <div class="d-flex justify-content-center mt-4 mb-3">
          <button type=" text submit" class="btn btn-success"> Submit </button>
        </div>

    </form>  

  </div>

</section>

<style type="text/css">
  
  th , td {

  border: 0.1px solid rgb(153, 77, 0) !important;

}

  #fee_term{

    display: flex;
    align-items: center;
    justify-content: space-between;

  }


    

</style>


@endsection