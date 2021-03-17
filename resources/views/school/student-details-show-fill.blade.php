@extends('school.layout')

@section('content')

<section class="student-details-show-fill">

 <div class="container">

  <div class="card shadow" style="width: 40rem;">

    <div class="card-body">

      <h2 class="text-center mt-2"> Fill Student Details  </h2>  

      <form action="/student-details-show" method="POST">

        @csrf

        <div class="row mt-4">

          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <label> Admission No </label>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="text" name="admission_num" class="form-control">
          </div>

        </div>


        <div class="row mt-4">

          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <label> Roll No </label>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="text" name="roll_num" class="form-control">
          </div>

        </div>


        <div class="row mt-4">

          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <label> Student Name </label>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <input type="text" name="student_name" class="form-control">
          </div>

        </div>



        <div class="row mt-3">

          <div class="col-3">

            <label> class </label>

          </div>

          <div class="col-4">

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

          <div class="col-2">

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


        <div class="text-center mt-3">
          <button type="submit" class="btn btn-success"> Display Record </button>
        </div>

      </form>

    </div>

  </div>

</div>

</section>

@endsection