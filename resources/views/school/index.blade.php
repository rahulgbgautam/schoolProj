@extends('school.layout')

@section('content')

<section class="index-section">

    <div class="container mt-5 mb-5">

        <div class="d-flex justify-content-center">

            <img src="https://th.bing.com/th/id/OIP.fJ7cK8xO4x4cMFVpvxTQuAHaHa?pid=ImgDet&rs=1" alt="" style="height: 100px;width: 100px;">

        </div>

        <div class="row">
        	
        	<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
        		
        		<div class="card shadow" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">

        			<h2 class="text-center mt-2"> Notice </h2>

        			<div class="card-body">

                        @foreach($data as $var)

                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <p> <a class="text-dark" href="{{ route('notification.show',$var->id) }}"> {{ $var->title }} </a> </p>

                            </div>

                            

                        </div>     

                        @endforeach

                    </div>

                </div>

            </div>

            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">

                <div class="card shadow mb-5" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">

                    <div class="card-body">

                        <div class="container">

                            <h2 class="text-center mt-4"> Staff Login </h2>

                            <form action="/stafflogin" method="POST">

                              @csrf 

                              <div class="row mt-4">

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label> Staff Id </label>
                                </div>

                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input type="text" name="staff_id" class="form-control">
                                </div>

                            </div>


                            <div class="row mt-4">

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label> Password </label>
                                </div>

                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input type="Password" name="staff_pass" class="form-control">

                                </div>

                            </div>

                            <div class="row mt-3">

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

                                </div>

                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                    <label class="d-flex justify-content-end">  <a href="/forgot-password"> Forgot Password </a> </label>
                                </div>

                            </div>


                            <div class="d-flex justify-content-center">

                              <button type="submit" class="btn btn-success"> Login </button>

                          </div>

                      </form>        

                  </div>

              </div>

          </div>

          <div class="card shadow mb-5">

            <div class="card-body">

                <div class="container">

                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                            <h2 class="text-center"> Admin ? </h2>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                            <div class="text-center mt-3">
                                <!-- <button class="btn  btn-secondary"><a class="text-light" href="/admin-portal"> Click Here </a></button> -->

                                <a href="/admin-portal"> Click Here </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>        		

    </div>

</div>

</div>

</section>

@endsection


