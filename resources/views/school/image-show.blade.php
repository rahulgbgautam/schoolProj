@extends('school.layout')

@section('content')

<section class="admin-add">

    <div class="container">

        <h1> image show </h1>

        @if($path)

            @foreach($path as $val)

                 <img src="{{ asset($val->path)  }}" class="img-fluid" style="height: 100px; width: 100px;"> 

            @endforeach

        @endif

    </div>

</section>

@endsection