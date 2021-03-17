@extends('school.layout')

@section('content')

<section class="term-wise">

  <div class="container">

    <h1 class="text-center mt-5"> Girls  Report </h1>

    @if($Girlscount)


    <div class="table-responsive mt-3" id="table_gradient">

      <table class="table table-bordered">

        <thead>


          <tr>

            <th colspan="1" class="td_input_min_width_200px">  Class </th>
            <th class="td_input_width_100px"> No Of Girls </th>

          </tr>

        </thead>


        <tbody>



         <tr> 

          <td> {{ $class }}</td>
          <td> {{ $Girlscount }}</td>


        </tr>




      </tbody> 

    </div>

    @endif

  </div>

</section>

@endsection