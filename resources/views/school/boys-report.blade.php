@extends('school.layout')

@section('content')

<section class="term-wise">

  <div class="container">

    <h1 class="text-center mt-5">  Boys Report </h1>

    @if($Boyscount)


    <div class="table-responsive mt-3" id="table_gradient">

      <table class="table table-bordered">

        <thead>


          <tr>

            <th class="td_input_min_width_200px">  Class </th>
            <th class="td_input_width_100px"> No Of Boys </th>

          </tr>

        </thead>


        <tbody>


          <tr> 

            <td> {{ $class }}</td>
            <td>   {{ $Boyscount }}  </td>
            
          </tr>




        </tbody> 

      </div>

      @endif

    </div>

  </section>

  @endsection