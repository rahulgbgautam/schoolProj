@extends('school.layout')

@section('content')

<section class="term-wise">

	<div class="container">

		<h1 class="text-center mt-5"> Student And Bus Report </h1>

		@if($StudentInBus)

		<div class="table-responsive mt-3" id="table_gradient">

			<table class="table table-bordered">

				<thead>


					<tr>

						<th class="td_input_min_width_200px">  Student Name </th>
						<th class="td_input_width_100px">  Class </th>
						<th class="td_input_width_100px"> Section </th>

					</tr>

				</thead>


				<tbody>

					@foreach($StudentInBus as $var)    

					<tr> 

						<td> {{ $var->student_name }}</td>
						<td> {{ $var->student_class }}</td>
						<td> {{ $var->student_sec  }}</td>

					</tr>

					@endforeach

				</tbody> 

			</div>

			@endif

		</div>

	</section>

	@endsection