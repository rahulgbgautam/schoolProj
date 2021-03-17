@extends('school.layout')

@section('content')

<section class="admin-add">

    <div class="container">

        <div class="col-8 m-auto">

          <form action=" {{ route('admin.store') }} " method="POST">

            @csrf
            
            <div class="row mt-5">
              
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <label> Admin Name </label>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <input type="text" name="admin_name" class="form-control">
                </div>

            </div>

            <div class="row mt-5">
              
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <label> Admin Id </label>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <input type="text" name="admin_id" class="form-control">
                </div>

            </div>


            <div class="row mt-5">
              
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <label> Email </label>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <input type="email" name="admin_email" class="form-control">
                </div>

            </div>

            <div class="row mt-5 mb-5">
                
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                      
                    <label> Select Image </label>

                </div>

                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                      
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                </div>

            </div>


            <div class="row mt-5">
              
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <label> Password </label>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <input type="Password" name="admin_password" class="form-control">
                </div>

            </div>

            <div class="row mt-5">
              
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <label> Confirm Password </label>
              </div>

              <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <input type="Password" name="admin_confirm_password" class="form-control">
              </div>

            </div>

            <div class="row mt-5 mb-5">
              
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
              </div>

              <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    
                <div class="text-center"> 
                    <button type="submit" name="" class="btn btn-success mr-5"> Register </button>
                </div>

              </div>

            </div>

          </form>

        </div>

    </div>

</section>

@endsection