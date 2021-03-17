@extends('school.layout')

@section('content')

<section class="term-wise">

  <div class="container">

    <h1 class="text-center mt-5"> Hindi  Student Report </h1>

    @if($hindicount)

    <div class="table-responsive mt-3" id="table_gradient">

      <table class="table table-bordered">

        <thead>


          <tr>

            <th class="td_input_min_width_200px">  Class </th>
            <th class="td_input_width_100px"> Section </th>
            <th class="td_input_width_100px"> No of Hindi Student </th>

        </tr>

    </thead>


    <tbody>

       <tr> 

          <td> {{ $class }}</td>
          <td> {{ $sec }}</td>
          <td> {{ $hindicount }}</td>

      </tr>

  </tbody> 

</div>


@endif

</div>

</section>

@endsection