@extends('school.layout')

@section('content')

<section class="student-marks">

	<div class="container">

		<h1 class="text-center mt-5" style="color: #800000;text-shadow: 2px 2px 8px #FF0000;"> Student Marks </h1>


		<div class="row mt-5">

			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

				<div class="card shadow" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">

					<div class="card-body">

						<p> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. 
						</p>

					</div>

				</div>

			</div>

			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

				<div class="card shadow" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">

					<div class="card-body">

						<button class="btn btn-warning ml-5"> <a href="/student-below-fifth" class="text-light"> Student Is In Below Vth Class </a> </button>  

						<button class="btn btn-primary ml-5 mt-2"> <a href="/student-above-fifth" class="text-light"> Student Is In Above Vth Class </a> </button>



					</div>

				</div>


			</div>       


		</div>


	</div>


</section>




@endsection