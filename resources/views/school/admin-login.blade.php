@extends('school.layout')

@section('content')

<section class="admin-login">

  <div class="container">

    <div class="card shadow" style="width: 40rem;">

      <div class="card-body">

        <h2 class="text-center mt-2"> Admin Login </h2>  

        <form>

          <div class="col-10"> 

            <div class="row mt-4">

              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <label> Admin Name </label>
              </div>

              <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <input type="text" name="" class="form-control">
              </div>

            </div>


            <div class="row mt-4">

              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <label> Password </label>
              </div>

              <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <input type="Password" name="" class="form-control">
              </div>

            </div>

            <div class="d-flex justify-content-end mt-3">

             <label>  <a href="/forgot-password"> Forgot Password </a> </label>   

           </div>

           <div class="d-flex justify-content-center">

             <button type="submit" class="btn btn-success" name=""> Login </button>   

           </div>

         </div>   

       </form>  


     </div>

   </div>

 </div>

</section>


@endsection