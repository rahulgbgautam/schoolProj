@extends('school.layout')

@section('content')

<section class="student-details" style="height: 100vh;">

  <div class="container">

    <h1 class="text-center"> Student Details </h1>

                <!-- <form>
                    
                  <div class="input-group">
                  
                    <input type="text" class="form-control" placeholder="search" id="myInput">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-success"> <i class="fa fa-search"></i></button>
                    </div>

                  </div>

                </form> -->

                




                <div class="row mt-5">

                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

                    <div class="card shadow" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">

                      <div class="card-body">

                        <p> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. 
                        </p>

                      </div>

                    </div>

                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

                    <div class="card shadow" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">

                      <div class="card-body">

                        <button class="btn  btn-block btn-warning"> <a href="/student-details-add" class="text-light"> Add Student Details +  </a> </button> 

                        <button class="btn  btn-block  btn-primary"> <a href="/student-marks-add" class="text-light"> Add Student Marks +  </a> </button> 

                        <button class="btn  btn-block  btn-success"> <a href="/fees-structure" class="text-light"> Add fees Structure  </a> </button> 

                        <button class="btn  btn-block  btn-secondary"> <a href="/student-reports" class="text-light"> Student Report </a> </button> 

                      </div>

                    </div>


                  </div>       


                </div>


              </div>



            </section>

            @endsection