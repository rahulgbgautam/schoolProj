@extends('school.layout')

@section('content')

<section class="admin-details" style="height: 100vh;">
	
	<div class="container">

        <h1 class="text-center"> Admin Details </h1>

        <div class="card shadow" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">
        	
        	<div class="row">
        		
        		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>

        		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">

        			<div class="row mt-5">
        				
        				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        					
        					<button class="btn btn-primary"> 	<a href="/admin-add" class="text-light"> Add Admins +  </a> </button>

        				</div>

        				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        					
        				</div>

        				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

        					<form>
        						
        						<div class="input-group">
								  
								  <input type="text" class="form-control" placeholder="search" id="myInput">

								  <div class="input-group-append">
								    <button type="submit" class="btn btn-success"> <i class="fa fa-search"></i></button>
								  </div>

								</div>

        					</form>
        					
        				</div>

        			</div>

        			<div class="table-responsive">

			          	<table class="table table-hover mt-5">
				            <thead>
				              <tr>
				                <th scope="col">S.No.</th>
				                <th scope="col">Admin Id </th>
				                <th scope="col">First Name </th>
				                <th scope="col">Middle Name</th>
				                <th scope="col">Last Name</th>
				              </tr>
				            </thead>
				            <tbody id="myTable">
				              <tr>
				                <td>1</td>
				                <td>s1</td>
				                <td>Mark</td>
				                <td>Otto</td>
				                <td>@mdo</td>
				                <td> <button class="btn btn-info"> Read </button></td>
				                <td> <button class="btn btn-warning"> Update </button></td>
				                <td> <button class="btn btn-danger"> Delete </button></td>
				              </tr>
				              <tr>
				                <td>2</td>
				                <td>s2</td>
				                <td>Jacob</td>
				                <td>Thornton</td>
				                <td>@fat</td>
				                <td> <button class="btn btn-info"> Read </button></td>
				                <td> <button class="btn btn-warning"> Update </button></td>
				                <td> <button class="btn btn-danger"> Delete </button></td>
				              </tr>
				              <tr>
				                <td>3</td>
				                <td>s3</td>
				                <td>Jacob</td>
				                <td>Thornton</td>
				                <td>@fat</td>
				                <td> <button class="btn btn-info"> Read </button></td>
				                <td> <button class="btn btn-warning"> Update </button></td>
				                <td> <button class="btn btn-danger"> Delete </button></td>
				              </tr>
				            </tbody>
			          	</table>
          	
          			</div>

        		</div>

        		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>

        	</div>

        </div>

    </div>

</section>

@endsection