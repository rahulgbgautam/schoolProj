@extends('school.layout')

@section('content')

<section class="staff-details">

  <div class="container">

    <h1 class="text-center"> Staff Details </h1>

    <div class="card shadow mt-5 mb-5" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">

      <div class="row">

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>

        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">

          <div class="row mt-5">

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

              <button class="btn btn-success"> <a href="/staff-details-add" class="text-light"> Add Staff Details +  </a> </button>

            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

              <form>

                <div class="input-group">

                  <input type="text" class="form-control" placeholder="search" id="myInput">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-search"></i></button>
                  </div>

                </div>

              </form>

            </div>

          </div>

          <div class="table-responsive">
            <table class="table table-hover mt-5">
              <thead>
                <tr>

                  <th> Staff Id </th>
                  <th> Staff Name </th>
                  <th> Staff Email </th>
                  <th> </th>
                  <th> </th>
                  <th> </th>

                </tr>
              </thead>
              <tbody id="myTable">

                @foreach($fetchdata as $var)

                <tr>

                  <td> {{ $var->staff_id }} </td>
                  <td> {{ $var->staff_name }} </td>
                  <td> {{ $var->staff_email }} </td>

                  <td> <button class="btn btn-info"> <a class="text-light" href="{{ route('staff.show',$var->id) }}"> Read </a> </button></td>

                  <td> <button class="btn btn-warning"> <a class="text-light" href="{{ route('staff.edit',$var->id)}}"> Update </a>  </button></td>

                  <form action="{{ route('staff.destroy',$var->id) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <td> <button class="btn btn-danger"> Delete </button></td>

                  </form>

                </tr>

                @endforeach

              </tbody>
            </table>
          </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>

      </div>

    </div>

  </div>    

</section>

@endsection