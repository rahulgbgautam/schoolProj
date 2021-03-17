@extends('school.layout')

@section('content')

<div class="forgot-password">
  
  <div class="container">

    <div class="card shadow" style="width: 40rem;">

      <div class="card-body">

        <h2 class="text-center mt-2"> Forgot Password </h2>  

        <p class="mt-4 mb-4"> Don't Worry! just fill your email and we'll send you a link to reset your password </p>

        <form>
        
          <div class="row">
                
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
              <label> Email </label>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
              <input type="email" name="" class="form-control">
            </div>

          </div>

          <div class="text-center mt-3">
            <button type="submit" class="btn btn-success"> Reset Password </button>
          </div>
          
        </form>

      </div>

    </div>
      
  </div>

</div>

@endsection















