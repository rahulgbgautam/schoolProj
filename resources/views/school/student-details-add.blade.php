@extends('school.layout')

@section('content')

<section class="student-details-add" id="form_gradient">

	<div class="container p-5">

		<h1 class="text-center"> Student Details </h1>

		<div class="row justify-content-end mt-5 p-3">

			<div>

				<button class="btn  btn-block btn-warning"> <a href="/student-details-show-fill" class="text-light"> See Student Details +  </a> </button> 

			</div>

		</div>  

		<form action=" {{ route('student.store') }} " method="POST" id="form_gradient" class="p-3" style="border: 3.0px solid #ff9900;margin-top: 5vh;">

			@csrf

			<div class="row mt-5">

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Admission Number </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<input type="text" name="admission_num" class="form-control">
						</div>

					</div>

				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Roll Number </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<input type="text" name="roll_num" class="form-control"  >
						</div>

					</div>

				</div>

			</div>




			<div class="row mt-5">

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> Student Name </label>

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<input type="text" name="student_name" class="form-control" placeholder="Student name">

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> Class </label>

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<div class="row">

						<div class="col-8">

							<select class="form-control" name="student_class" id="class_id">
								<option>  </option>
								<option value="Nursery"> Nursery </option>
								<option value="K.G."> K.G. </option>
								<option value="I"> I </option>
								<option value="II"> II </option>
								<option value="III"> III </option>
								<option value="IV"> IV</option>
								<option value="V"> V </option>
								<option value="VI"> VI </option>
								<option value="VII"> VII </option>
								<option value="VIII"> VIII </option>
								<option value="IX"> IX </option>
								<option value="X"> X </option>
							</select>

						</div>

						<div class="col-4">

							<select class="form-control" name="student_sec" >
								<option>  </option>
								<option value="A"> A </option>
								<option value="B"> B </option>
								<option value="C"> C </option>
								<option value="D"> D </option>
								<option value="E"> E </option>

							</select>

						</div>

					</div>


				</div>



			</div>


			<div class="row mt-5 ncc">

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> NCC </label>

				</div>

				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

					<select class="form-control"  name="ncc">
						<option> </option>
						<option value="Yes">Yes</option>
						<option value="No"> No </option>
					</select>

				</div>

			</div>


			<div class="row mt-5" id="second_lang">

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> Second Language </label>

				</div>        

				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					<select class="form-control" name="slang" id="second_lang_select">
						<option>  </option>
						<option value="Hindi"> Hindi </option>
						<option value="Telgu"> Telgu </option>
					</select>
				</div>

			</div>


			<div class="row mt-5" id="second_third_lang">

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Second Language </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<select class="form-control" name="slang" id="select1" >
								<option>  </option>
								<option value="Hindi"> Hindi </option>
								<option value="Telgu"> Telgu </option>
							</select>
						</div>

					</div>

				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Third Language  </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<select class="form-control" name="tlang" id="select2">
								<option value="Telgu"> Hindi </option>
								<option value="Hindi"> Telgu </option>

							</select>
						</div>

					</div>

				</div>

			</div>




			<div class="row mt-5">

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> Mother Name </label>

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<input type="text" name="mother_name" class="form-control" placeholder="first name"  >

				</div>



				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> Father Name </label>

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<input type="text" name="father_name" class="form-control" placeholder="last name"  >

				</div>


			</div>

			<div class="row mt-5">

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Date of Birth </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<input type="text" name="dob" class="form-control datepicker pl-3" placeholder="select date">
						</div>

					</div>

				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Date of Joining </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<input type="text" name="doj" class="form-control datepicker pl-3" placeholder="select date"  >
						</div>

					</div>

				</div>

			</div>


			<div class="row mt-5">

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Gender </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<select class="form-control" name="gender" >
								<option> </option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>

					</div>

				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> House </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<select class="form-control" name="house">

								<option>  </option>

								<option value="Siddhartha" class="text-primary fa">  Siddhartha <img src="{{ asset('img/06t5WJqZfGtq0SBZiKkD7TPfiunVtqbDKbjKaceY.jpg') }}" alt="">
								</option>

								<option value="Ashoka" class="text-success">Ashoka  </option>

								<option value="Harsha"  class="text-warning"> Harsha </option>

								<option value="Shivaji" class="text-danger"> Shivaji </option>

							</select>
						</div>

					</div>

				</div>

			</div>



			<div class="row mt-5">

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Religion </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<select class="form-control" name="religion">
								<option> Select Religion </option>
								<option value="Hindu"> Hindu </option>
								<option value="Muslim"> Muslim </option>

							</select>
						</div>

					</div>

				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Nationality  </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<select class="form-control" name="nationality">
								<option value="Telgu"> Hindi </option>
								<option value="Hindi"> Telgu </option>
								<option value="Hindi"> Telgu </option>
								<option value="Hindi"> Telgu </option>
								<option value="Hindi"> Telgu </option>

							</select>
						</div>

					</div>

				</div>

			</div>

			<div class="row mt-5">

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Caste </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<select class="form-control" name="caste" >
								<option>  </option>
								<option value="OC">OC</option>
								<option value="OBC">OBC</option>
								<option value="SC">SC</option>
								<option value="ST">ST</option>
							</select>
						</div>

					</div>

				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Adharcard Number  </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

							<select class="form-control" name="adhar_num" id="adhar_num_id" >
								<option>  </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>

						</div>

					</div>

				</div>

			</div>


			<div class="row mt-5 adhar_num">

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> Adharcard Number  </label>

				</div>

				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
					<input type="text" name="adhar_num_value" class="form-control" minlength="12"maxlength="12">
				</div>  

			</div>


			<div class="row mt-5">

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> School Lunch </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<select class="form-control" name="school_lunch" >
								<option> </option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>

					</div>

				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Sibling </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<select class="form-control" name="sibling" id="sibling_id"  >
								<option> </option>
								<option value="Yes"> Yes </option>
								<option value="No"> No </option>
							</select>
						</div>

					</div>

				</div>

			</div>

			<div id="addNewSibling">

				<div class="row mt-5 sibling">

					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

						<label> Sibling Name </label>

					</div>

					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

						<input type="text" name="sibling_name[]" class="form-control" placeholder="sibling name"  >

					</div>

					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

						<label> Class </label>

					</div>

					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

						<div class="row">

							<div class="col-8">

								<select class="form-control" id="class_id"  name="sibling_class[]" >
									<option>  </option>
									<option value="Nursery"> Nursery </option>
									<option value="K.G."> K.G. </option>
									<option value="I"> I </option>
									<option value="II"> II </option>
									<option value="III"> III </option>
									<option value="IV"> IV</option>
									<option value="V"> V </option>
									<option value="VI"> VI </option>
									<option value="VII"> VII </option>
									<option value="VIII"> VIII </option>
									<option value="IX"> IX </option>
									<option value="X"> X </option>
								</select>

							</div>

							<div class="col-4">

								<select class="form-control" name="sibling_sec[]" >
									<option>  </option>
									<option value="A"> A </option>
									<option value="B"> B </option>
									<option value="C"> C </option>
									<option value="D"> D </option>
								</select>

							</div>

						</div>


					</div>


				</div>

			</div>

			<div class="row sibling mt-2">

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
					<button class="btn btn-success" style="height: 24px;width: 24px;padding: initial;" id="addRow"><img src="https://img.icons8.com/small/16/000000/plus-math.png"/ style="margin-bottom: 5px;"> </button>
					<!-- <button class="btn btn-danger" style="height: 24px;width: 24px;padding: initial;" id="delRow"> - </button> -->

				</div>

			</div>


			<div class="row mt-5">

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> Is New Student </label>

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<select class="form-control" name="is_new_student" id="is_new_student_id">
						<option> </option>
						<option value="Yes"> Yes </option>
						<option value="No"> No </option>
					</select>

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 previous_school_name">

					<label> Previous School Name   </label>

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 previous_school_name">

					<input type="text" name="previous_school_name_value" class="form-control">

				</div>


				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 bus_transport_col">

					<label> Bus Transport Facility  </label>

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 bus_transport_col">

					<select class="form-control bus_transport_class" name="bus_transport_facility">
						<option> </option>
						<option value="Yes"> Yes </option>
						<option value="No"> No </option>
					</select>

				</div>


			</div>



			<div class="row mt-5 bus_transport_facility_col_9">

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> Bus Transport Facility </label>

				</div>

				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

					<select class="form-control bus_transport_class" name="bus_transport_facility">
						<option> </option>
						<option value="Yes"> Yes </option>
						<option value="No"> No </option>
					</select>

				</div>

			</div>

			<div class="row mt-5 bus_transport">

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Bus number </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<input type="text" name="bus_num" class="form-control"  >
						</div>

					</div>

				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Conductor Contact Number </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<input type="" name="conductor_contact_num" class="form-control"  >
						</div>

					</div>

				</div>

			</div>




			<div class="row mt-5 bus_transport">

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> Conductor Name </label>

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<input type="text" name="conductor_name" class="form-control" placeholder="first name"  >

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<label> Bus Stoppage points  </label>

				</div>

				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

					<textarea class="form-control" rows="2" name="bus_stoppage_points"  ></textarea>

				</div>

			</div>


			<div class="row mt-5 bus_transport">

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Father’s Contact Number </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<input type="text" name="father_contact_num" class="form-control"  >
						</div>

					</div>

				</div>

				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

					<div class="row">

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<label> Mother’s Contact Number </label>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<input type="" name="mother_contact_num" class="form-control"  >
						</div>

					</div>

				</div>

			</div>

			<div class="row mt-5 mb-5">



				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

					<div class="d-flex justify-content-center">

						<button type="submit" class="btn btn-success mr-5"> Submit </button>

					</div> 

				</div>

			</div>

		</form>            

	</div>

</section>


<style type="text/css">



	#form_gradient{

		background-image: linear-gradient(to top,rgb(255, 235, 204),rgb(255, 245, 230) 
			);

	}


</style>




@endsection