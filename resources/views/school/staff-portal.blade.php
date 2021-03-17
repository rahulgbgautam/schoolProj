@extends('school.layout')

@section('content')

<section class="staff-login">
      
    <div class="container">

        <form> 

          <div class="row mt-5">
          
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <label> Staff Name </label>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <input type="text" name="" class="form-control">
            </div>

          </div>


          <div class="row mt-5">
          
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <label> Password </label>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <input type="Password" name="" class="form-control">

            </div>

          </div>

          <div class="row mt-3">
          
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <label>  <a href=""> Forgot Password </a> </label>
            </div>

          </div>


          <div class="d-flex justify-content-center">
                  
              <input type="submit" name="" value="submit">

          </div>

        </form>        

    </div>

</section>


@endsection