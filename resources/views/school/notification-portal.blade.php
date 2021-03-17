@extends('school.layout')

@section('content')



@if($notification)

<div class="container">

	<h1 class="text-center"> Notification Portal </h1>

	<div class="row mt-5">

		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

			<label> <h1> Title </h1> </label>

		</div>

		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

			<label> <h1> Content </h1> </label>

		</div>

	</div>


	<div class="row mt-5">

		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

			<p> {{ $notification->title }}</p>

		</div>

		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

			<p> {{ $notification->content }}</p>

		</div>

	</div>

</div>


@endif

@endsection