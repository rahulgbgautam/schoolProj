@extends('school.layout')

@section('content')

<section class="student-marks">
     
     <div class="container">

        <h1 class="text-center mt-5" style="color: #800000;text-shadow: 2px 2px 8px #FF0000;"> Student Reports </h1>

        <button class="btn btn-dark mt-5"> <a href="/student-report-below-fifth" class="text-light"> Student Is In Below Vth Class </a> </button>  

        <button class="btn btn-dark mt-5"> <a href="/student-report-above-fifth" class="text-light"> Student Is In Above Vth Class </a> </button>

    </div>

</section>




@endsection