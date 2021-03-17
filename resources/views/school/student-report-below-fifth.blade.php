@extends('school.layout')

@section('content')

<section class="student-report">

  <div class="container">

    <h1 class="text-center mt-5"> Student Report </h1>

    <div class="row">

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

        <div class="card shadow mt-4" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);" id="btn1-hide">

          <div class="card-body">

            <div class="col-6 m-auto">

             <form action="/each-student-record" method="post">

              @csrf

              <div class="form-group">

               <label for="roll_no"> Student Roll No </label>
               <input type="text" name="roll_no" class="form-control">

             </div>


             <div class="row mt-4">

              <div class="col-8">

                <select class="form-control" name="student_class">
                  <option> Class </option>
                  <option value="Nursery"> Nursery </option>
                  <option value="K.G."> K.G. </option>
                  <option value="I"> I </option>
                  <option value="II"> II </option>
                  <option value="III"> III </option>
                  <option value="IV"> IV</option>
                  <option value="V"> V </option>

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


            <button type="submit" class="btn btn-success mt-4 mb-4"> Display Record </button>

          </form>

        </div>

      </div>

    </div>

    <div class="card shadow mt-4" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);" id="btn2-hide">

      <div class="card-body">

       <div class="col-6 m-auto">

         <form action="/term-vise" method="post">
          @csrf

          <div class="form-group">

           <label for="roll_no"> Student Roll No </label>
           <input type="text" name="roll_no" class="form-control">

         </div>


         <div class="row mt-4">

          <div class="col-8">

            <select class="form-control" name="student_class">
              <option> Class </option>
              <option value="Nursery"> Nursery </option>
              <option value="K.G."> K.G. </option>
              <option value="I"> I </option>
              <option value="II"> II </option>
              <option value="III"> III </option>
              <option value="IV"> IV</option>
              <option value="V"> V </option>

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

        <div class="row mt-3">

          <div class="col-12">    

            <select class="form-control" name="term" >
              <option>  </option>
              <option value="I"> I </option>
              <option value="II"> II </option>
              <option value="III"> III </option>
            </select>

          </div>  

        </div>

        <button type="submit" class="btn btn-success mt-3 mb-3"> Display Record </button>

      </form>

    </div>

  </div>

</div>

<div class="card shadow mt-4" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);" id="btn3-hide">

  <div class="card-body">

   <div class="col-6 m-auto">

     <form action="/SubjectVise" method="post">

      @csrf


      <div class="row">

        <div class="col-10">

          <label> Class </label>

          <select class="form-control" name="student_class">
            <option>  </option>
            <option value="Nursery"> Nursery </option>
            <option value="K.G."> K.G. </option>
            <option value="I"> I </option>
            <option value="II"> II </option>
            <option value="III"> III </option>
            <option value="IV"> IV</option>
            <option value="V"> V </option>

          </select>

        </div>

        <!-- <div class="col-4">

          <select class="form-control" name="student_sec" >
            <option>  </option>
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
            <option value="D"> D </option>
            <option value="E"> E </option>

          </select>

        </div> -->

      </div>



      <div class="row mt-2">

        <div class="col-10">

          <label> Subject </label>

          <select class="form-control" name="subject">

            <option>  </option>
            <option value="english_lang"> English-I(Lang.) </option>
            <option value="english_lit"> English-II(Lit.) </option>
            <option value="english_avg"> English(Avg.) </option>
            <option value="social_studies"> Social Studies </option>
            <option value="II_lang"> II Language </option>
            <option value="math"> Mathematics </option>
            <option value="science"> Science </option>
            <option value="computer_app"> Computer Applications </option>
            <option value="III_lang"> III Language </option>

          </select>

        </div>



      </div>


      <button type="submit" class="btn btn-success mt-3"> Display Record </button>

    </form>

  </div>

</div>

</div>


<div class="card shadow mt-4" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);" id="btn4-hide">

  <div class="card-body">

   <div class="col-6 m-auto">

     <form action="/NumberGirlsAndBoys" method="post">

      @csrf

      <select class="form-control" name="student_class">
        <option> Class </option>
        <option value="Nursery"> Nursery </option>
        <option value="K.G."> K.G. </option>
        <option value="I"> I </option>
        <option value="II"> II </option>
        <option value="III"> III </option>
        <option value="IV"> IV</option>
        <option value="V"> V </option>

      </select>


      <select class="form-control mt-3" name="girls_or_boys">
        <option> Select Girl Or Boys </option>
        <option value="Female"> Girls </option>
        <option value="Male"> Boys </option>
      </select>


      <button type="submit" class="btn btn-success mt-3"> Display Record </button>

    </form>

  </div>

</div>

</div>

<div class="card shadow mt-4" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);" id="btn5-hide">

  <div class="card-body">

   <div class="col-6 m-auto">

     <form action="/HindiAndTelguStudent" method="post">

      @csrf

      <div class="row mt-4">

        <div class="col-8">

          <label> Select Class </label>
          <select class="form-control" name="student_class">
            <option>  </option>
            <option value="Nursery"> Nursery </option>
            <option value="K.G."> K.G. </option>
            <option value="I"> I </option>
            <option value="II"> II </option>
            <option value="III"> III </option>
            <option value="IV"> IV</option>
            <option value="V"> V </option>

          </select>

        </div>

        <div class="col-4">

          <label> Sec </label>
          <select class="form-control" name="student_sec">
            <option>  </option>
            <option value="A"> A </option>
            <option value="B"> B </option>
            <option value="C"> C </option>
            <option value="D"> D </option>
            <option value="E"> E </option>

          </select>

        </div>

      </div>

      <div class="row mt-2">

        <div class="col-12">

          <label> select lang </label>
          <select class="form-control" name="hindi_or_telgu">

            <option>  </option>
            <option value="Hindi"> Hindi </option>
            <option value="Telgu"> Telgu </option>

          </select>

        </div>
        

      </div>


      <button type="submit" class="btn btn-success mt-3 mb-3"> Display Record </button>

    </form>

  </div>

</div>

</div>


<div class="card shadow mt-4" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);" id="btn6-hide">

  <div class="card-body">

   <div class="col-6 m-auto">

     <form action="/StudentInBus" method="post">

      @csrf

      <div class="form-group">

        <label for="bus_no"> Bus No </label>
        <input type="text" name="bus_no" class="form-control">

      </div>

      <button type="submit" class="btn btn-success"> Display Record </button>

    </form>

  </div>

</div>

</div>



</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

  <div class="card shadow mt-4" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">

    <div class="card-body">

      <button class="btn" id="btn1">  Each Student Academic Record </button> <br>

      <button class="btn" id="btn2">  Term Vise student report total & percentage   <br>


        <button class="btn" id="btn3"> Subject vise Average report of each class    </button> <br>


        <button class="btn" id="btn4">  Number of Girls and Boys in Each class  </button> <br> 

        <button class="btn" id="btn5"> Number of Hindi and telgu student in each class (class and section vise)  </button> <br>

        <button class="btn" id="btn6">  List of number of student in each bus –bus wise name and their class & section  </button> <br>

      </div>

    </div>

  </div>

</div>




</div>

</section>

@endsection