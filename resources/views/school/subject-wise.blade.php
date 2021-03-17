@extends('school.layout')

@section('content')

<section class="term-wise">

	<div class="container">

		<h1 class="text-center mt-5"> Subject Wise Report </h1>

		@if($EachClassReport)


		@if($subject=="English Lang")

		<div class="table-responsive mt-3" id="table_gradient">

			<table class="table table-bordered">

				<thead>


					<tr>


						<th> Subject </th>
						<th>  Class </th>
						<th>  Average Report Of Class </th>

					</tr>

				</thead>


				<tbody>

					@php $sum = 0; @endphp 

					@foreach($EachClassReport as $var)

					<?php $sum += $var->english_lang_I_term_exam_marks + $var->english_lang_II_term_exam_marks + $var->english_lang_III_term_exam_marks + $var->english_lang_I_term_assesment_marks + $var->english_lang_II_term_assesment_marks + $var->english_lang_III_term_assesment_marks 
					?>

					@endforeach

					<tr> 

						<td> {{ $subject }} </td>

						<td> {{ $student_class }} </td>

						<td> {{ $sum }} </td>


					</tr>

					

				</tbody> 

			</div>

			@endif





			@if($subject=="English Lit")

			<div class="table-responsive mt-3" id="table_gradient">

				<table class="table table-bordered">

					<thead>


						<tr>


							<th> Subject </th>
							<th>  Class </th>
							<th>  Average Report Of Class </th>

						</tr>

					</thead>


					<tbody>

						@php $sum = 0; @endphp 

						@foreach($EachClassReport as $var)

						<?php $sum += $var->english_lit_I_term_exam_marks + $var->english_lit_II_term_exam_marks + $var->english_lit_III_term_exam_marks + $var->english_lit_I_term_assesment_marks + $var->english_lit_II_term_assesment_marks + $var->english_lit_III_term_assesment_marks 
						?>

						@endforeach

						<tr> 

							<td> {{ $subject }} </td>

							<td> {{ $student_class }} </td>

							<td> {{ $sum }}  </td>


						</tr>

						

					</tbody> 

				</div>

				@endif




				@if($subject=="English Avg")

				<div class="table-responsive mt-3" id="table_gradient">

					<table class="table table-bordered">

						<thead>


							<tr>


								<th> Subject </th>
								<th>  Class </th>
								<th>  Average Report Of Class </th>

							</tr>

						</thead>


						<tbody>

							@php $sum = 0; @endphp 

							@foreach($EachClassReport as $var)

							<?php $sum += $var->english_avg_I_term_exam_marks + $var->english_avg_II_term_exam_marks + $var->english_avg_III_term_exam_marks + $var->english_avg_I_term_assesment_marks + $var->english_avg_II_term_assesment_marks + $var->english_avg_III_term_assesment_marks 
							?>

							@endforeach


							<tr> 

								<td> {{ $subject }} </td>

								<td> {{ $student_class }} </td>

								<td> {{ $sum }}  </td>


							</tr>

						</tbody> 

					</div>

					@endif




					@if($subject=="Social Studies")

					<div class="table-responsive mt-3" id="table_gradient">

						<table class="table table-bordered">

							<thead>


								<tr>


									<th> Subject </th>
									<th>  Class </th>
									<th>  Average Report Of Class </th>

								</tr>

							</thead>


							<tbody>

								@php $sum = 0; @endphp 

								@foreach($EachClassReport as $var)

								<?php $sum += $var->social_studies_I_term_exam_marks + $var->social_studies_II_term_exam_marks + $var->social_studies_III_term_exam_marks + $var->social_studies_I_term_assesment_marks + $var->social_studies_II_term_assesment_marks + $var->social_studies_III_term_assesment_marks 
								?>

								@endforeach


								<tr> 

									<td> {{ $subject }} </td>

									<td> {{ $student_class }} </td>

									<td> {{ $sum }}  </td>


								</tr>

							</tbody> 

						</div>

						@endif




						@if($subject=="II Language")

						<div class="table-responsive mt-3" id="table_gradient">

							<table class="table table-bordered">

								<thead>


									<tr>


										<th> Subject </th>
										<th>  Class </th>
										<th>  Average Report Of Class </th>

									</tr>

								</thead>


								<tbody>

									@php $sum = 0; @endphp 

									@foreach($EachClassReport as $var)

									<?php $sum += $var->II_lang_I_term_exam_marks + $var->II_lang_II_term_exam_marks + $var->II_lang_III_term_exam_marks + $var->II_lang_I_term_assesment_marks + $var->II_lang_II_term_assesment_marks + $var->II_lang_III_term_assesment_marks 
									?>

									@endforeach


									<tr> 

										<td> {{ $subject }} </td>

										<td> {{ $student_class }} </td>

										<td> {{ $sum }}  </td>


									</tr>

								</tbody> 

							</div>

							@endif



							@if($subject=="Mathematics")

							<div class="table-responsive mt-3" id="table_gradient">

								<table class="table table-bordered">

									<thead>


										<tr>


											<th> Subject </th>
											<th>  Class </th>
											<th>  Average Report Of Class </th>

										</tr>

									</thead>


									<tbody>

										@php $sum = 0; @endphp 

										@foreach($EachClassReport as $var)

										<?php $sum += $var->math_I_term_exam_marks + $var->math_II_term_exam_marks + $var->math_III_term_exam_marks + $var->math_I_term_assesment_marks + $var->math_II_term_assesment_marks + $var->math_III_term_assesment_marks 
										?>

										@endforeach


										<tr> 

											<td> {{ $subject }} </td>

											<td> {{ $student_class }} </td>

											<td> {{ $sum }}  </td>


										</tr>

									</tbody> 

								</div>

								@endif



								@if($subject=="Science")

								<div class="table-responsive mt-3" id="table_gradient">

									<table class="table table-bordered">

										<thead>


											<tr>


												<th> Subject </th>
												<th>  Class </th>
												<th>  Average Report Of Class </th>

											</tr>

										</thead>


										<tbody>


											@php $sum = 0; @endphp 

											@foreach($EachClassReport as $var)

											<?php $sum += $var->science_I_term_exam_marks + $var->science_II_term_exam_marks + $var->science_III_term_exam_marks + $var->science_I_term_assesment_marks + $var->science_II_term_assesment_marks + $var->science_III_term_assesment_marks 
											?>

											@endforeach


											<tr> 

												<td> {{ $subject }} </td>

												<td> {{ $student_class }} </td>

												<td> {{ $sum }}  </td>


											</tr>

										</tbody> 

									</div>

									@endif



									@if($subject=="Computer Applications")

									<div class="table-responsive mt-3" id="table_gradient">

										<table class="table table-bordered">

											<thead>


												<tr>


													<th> Subject </th>
													<th>  Class </th>
													<th>  Average Report Of Class </th>

												</tr>

											</thead>


											<tbody>

												@php $sum = 0; @endphp 

												@foreach($EachClassReport as $var)

												<?php $sum += $var->computer_app_I_term_exam_marks + $var->computer_app_II_term_exam_marks + $var->computer_app_III_term_exam_marks + $var->computer_app_I_term_assesment_marks + $var->computer_app_II_term_assesment_marks + $var->computer_app_III_term_assesment_marks 
												?>

												@endforeach


												<tr> 

													<td> {{ $subject }} </td>

													<td> {{ $student_class }} </td>

													<td> {{ $sum }}  </td>


												</tr>

											</tbody> 

										</div>

										@endif



										@if($subject=="III Language")

										<div class="table-responsive mt-3" id="table_gradient">

											<table class="table table-bordered">

												<thead>


													<tr>


														<th> Subject </th>
														<th>  Class </th>
														<th>  Average Report Of Class </th>

													</tr>

												</thead>


												<tbody>

													@php $sum = 0; @endphp 

													@foreach($EachClassReport as $var)

													<?php $sum += $var->III_lang_I_term_exam_marks + $var->III_lang_II_term_exam_marks + $var->III_lang_III_term_exam_marks + $var->III_lang_I_term_assesment_marks + $var->III_lang_II_term_assesment_marks + $var->III_lang_III_term_assesment_marks 
													?>

													@endforeach

													<tr> 

														<td> {{ $subject }} </td>

														<td> {{ $student_class }} </td>

														<td> {{ $sum }}  </td>


													</tr>

												</tbody> 

											</div>

											@endif







											@endif

										</div>

									</section>

									@endsection