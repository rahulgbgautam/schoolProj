@extends('school.layout')

@section('content')

<section class="staff-details-add">

 <div class="container">

  @if($staff)

  <div class="card shadow" style="width: 40rem;">

    <div class="card-body">

      <h2 class="text-center mt-2"> Update Staff Details </h2>  


      <form action=" {{ route('staff.update',$staff->id) }} " method="POST">

        @csrf
        @method('PUT')

        <div class="col-10"> 

          <div class="row mt-4">

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
              <label> Staff Id </label>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
              <input type="text" name="staff_id" class="form-control" value="{{ $staff->staff_id }}">
            </div>

          </div>
          

          <div class="row mt-4">

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
              <label> Staff Name </label>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
              <input type="text" name="staff_name" class="form-control"  value="{{ $staff->staff_name }}">
            </div>

          </div>


          <div class="row mt-4">

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
              <label> Email </label>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
              <input type="email" name="staff_email" class="form-control" value="{{ $staff->staff_email }}">
            </div>

          </div>


          <div class="row mt-4">

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

              <div class="d-flex justify-content-center">

                <button type="submit" class="btn btn-success" name=""> Update  </button>   

              </div>

            </div>

          </div>

          

        </div>   

      </form>  


    </div>

  </div>

  @endif

</div>


</section>

@endsection