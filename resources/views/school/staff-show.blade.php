@extends('school.layout')

@section('content')

<section class="staff-show">

	<div class="container">

		@if($staff)

		<h1 class="text-center mt-5"> Staff Details </h1>


		<div class="table-responsive">
			<table class="table table-hover mt-5">

				<thead>

					<tr>

						<th> Staff Id </th>
						<th> Staff Name </th>
						<th> Staff Email </th>
						
					</tr>

				</thead>

				<tbody id="myTable">

					

					<tr>

						<td> {{ $staff->staff_id }} </td>
						<td> {{ $staff->staff_name }} </td>
						<td> {{ $staff->staff_email }} </td>
						

					</tr>

					

				</tbody>

			</table>

		</div>



		@endif


	</div>


</section>

@endsection