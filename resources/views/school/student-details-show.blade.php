@extends('school.layout')

@section('content')

<section class="term-wise">
	
	<div class="container">
		
		<h1 class="text-center mt-5"> Student Details Show </h1>

		@if($StudentDetails)

		<div class="table-responsive mt-5" id="table_gradient">

			<table class="table table-bordered">

				<thead>


				</thead>


				<tbody>

					@foreach($StudentDetails as $var) 
					
					<tr> 

						<td> Admission Number </td>

						<td>  {{ $var->admission_num }} </td>

						<td> Roll No </td>

						<td> {{ $var->roll_num }} </td>


					</tr>

					<tr> 

						<td> Student Name </td>

						<td> {{ $var->student_name }}  </td>

						<td> Class </td>

						<td> {{ $var->student_class }}  {{ $var->student_sec }}  </td>


					</tr>


					<tr> 

						<td colspan="2"> NCC </td>

						<td colspan="2">  {{ $var->ncc }}  </td>

						

					</tr>


					<tr> 

						<td> Second Language </td>

						<td>  {{ $var->slang }}  </td>

						<td> Third Language </td>

						<td>  {{ $var->tlang }}  </td>

					</tr>


					<tr> 

						<td> Mother Name </td>

						<td> {{ $var->mother_name }}  </td>

						<td> Father Name </td>

						<td> {{ $var->father_name }}  </td>


					</tr>


					<tr> 

						<td> Date of Birth </td>

						<td> {{ $var->dob }} </td>

						<td> Date of Joining </td>

						<td> {{ $var->doj }}  </td>


					</tr>

					<tr> 

						<td> Gender </td>

						<td>  {{ $var->gender }}  </td>

						<td> House </td>

						<td> {{ $var->house }} </td>


					</tr>


					<tr> 

						<td> Religion </td>

						<td> {{ $var->religion }} </td>

						<td> Nationality </td>

						<td> {{ $var->nationality }} </td>


					</tr>


					<tr> 

						<td> Caste </td>

						<td> {{ $var->caste }}  </td>

						<td> Adharcard Number</td>

						<td> {{ $var->adhar_num }}  </td>


					</tr>


					<tr> 

						<td colspan="2"> Adharcard Number</td>

						<td colspan="2"> {{ $var->adhar_num_value }} </td>

					</tr>



					<tr> 

						<td> School Lunch </td>

						<td>  {{ $var->school_lunch }}  </td>

						<td> Sibling </td>

						<td>  {{ $var->sibling }} </td>


					</tr>


					<tr> 

						<td> Sibling Name </td>

						<td>  {{ $var->sibling_name }} </td>

						<td> Class  </td>

						<td> {{ $var->sibling_class }} {{ $var->sibling_sec }} </td>


					</tr>



					<tr> 

						<td> Is New Student </td>

						<td> {{ $var->is_new_student }} </td>

						<td> Previous School Name</td>

						<td> {{ $var->previous_school_name }} </td>


					</tr>


					<tr> 

						<td> Bus Transport Facility </td>

						<td> {{ $var->bus_transport_facility }}  </td>

						<td> Bus number </td>

						<td> {{ $var->bus_num }} </td>


					</tr>


					<tr> 

						<td> Conductor Contact Number </td>

						<td> {{ $var->conductor_contact_num }} </td>

						<td> Conductor Name </td>

						<td> {{ $var->conductor_name }} </td>


					</tr>


					<tr> 

						<td> Bus Stoppage points </td>

						<td> {{ $var->bus_stoppage_points }}  </td>

						<td> Father’s Contact Number </td>

						<td> {{ $var->father_contact_num }}  </td>


					</tr>

					<tr> 

						<td colspan="2"> Mother’s Contact Number </td>

						<td colspan="2"> {{ $var->mother_contact_num }} </td>


					</tr>


					@endforeach

				</tbody> 

			</div>

			@endif		

		</div>

	</section>

	@endsection