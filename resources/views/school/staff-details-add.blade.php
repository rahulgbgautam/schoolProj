@extends('school.layout')

@section('content')

<section class="staff-details-add">

 <div class="container">


  <div class="card shadow mt-5" style="width: 40rem;">

    <div class="card-body">

      <h2 class="text-center mt-2"> Add Staff Details </h2>  

      <div class="d-flex justify-content-end">

        <button class="btn btn-warning mt-4"> <a class="text-light" href="{{ route('staff.index')}}"> See Staff Details </a> </button>

      </div>

      <form action=" {{ route('staff.store') }} " method="POST">

        @csrf

        <div class="col-10"> 

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
              <label> Staff Name </label>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
              <input type="text" name="staff_name" class="form-control">
            </div>

          </div>


          <div class="row mt-4">

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
              <label> Email </label>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
              <input type="email" name="staff_email" class="form-control">
            </div>

          </div>


          <div class="row mt-4">

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

              <div class="d-flex justify-content-center">

                <button type="submit" class="btn btn-success" name=""> Submit  </button>   

              </div>

            </div>

          </div>

          

        </div>   

      </form>  


    </div>

  </div>


</div>


</section>

@endsection