var percentage_I_term_var;
var percentage_II_term_var;
var percentage_III_term_var;
var english_lang_I_term_total_marks_var;
var english_lang_II_term_total_marks_var;
var english_lang_III_term_total_marks_var;
var english_lit_I_term_total_marks_var;
var english_lit_II_term_total_marks_var;
var english_lit_III_term_total_marks_var;
var english_avg_I_term_total_marks_var;
var english_avg_II_term_total_marks_var;
var english_avg_III_term_total_marks_var;
var social_studies_I_term_total_marks_var;
var social_studies_II_term_total_marks_var;
var social_studies_III_term_total_marks_var;
var II_lang_I_term_total_marks_var;
var II_lang_II_term_total_marks_var;
var II_lang_III_term_total_marks_var;
var math_I_term_total_marks_var;
var math_II_term_total_marks_var;
var math_III_term_total_marks_var;
var science_I_term_total_marks_var;
var science_II_term_total_marks_var;
var science_III_term_total_marks_var;
var computer_app_I_term_total_marks_var;
var computer_app_II_term_total_marks_var;
var computer_app_III_term_total_marks_var;
var III_lang_I_term_total_marks_var;
var III_lang_II_term_total_marks_var;
var III_lang_III_term_total_marks_var;
var total_I_term_total_marks_var;
var total_II_term_total_marks_var;
var total_III_term_total_marks_var;



$(document).ready(function(){

// #################### search filter start #####################


$("#myInput").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("#myTable tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});


// #################### search filter end #####################

// #################### for choosing date start ###################

$('.datepicker').datepicker({

  format: 'dd-mm-yyyy'

});


// #################### for choosing date end ###################




// ######################### student-details-add-start ####################



$('#adhar_num_id').change(function(){
  $(this).find("option:selected").each(function(){
    var optionValue = $(this).attr("value");
    if (optionValue=="Yes") {
      $(".adhar_num").show();
      $(".adhar_num :input").attr("disabled", false);
    }
    else{
      $(".adhar_num").hide();
      $(".adhar_num :input").attr("disabled", true);
    }
  });
}).change();


$('#is_new_student_id').change(function(){
  $(this).find("option:selected").each(function(){
    var optionValue = $(this).attr("value");
    if (optionValue=="Yes") {

      $(".previous_school_name").show();
      $(".previous_school_name :input").attr("disabled", false);

      $(".bus_transport_col").hide();
      $(".bus_transport_col :input").attr("disabled", true);

      $(".bus_transport_facility_col_9").show();
      $(".bus_transport_facility_col_9 :input").attr("disabled", false);

    }
    else{

      $(".previous_school_name").hide();
      $(".previous_school_name :input").attr("disabled", true);

      $(".bus_transport_col").show();
      $(".bus_transport_col :input").attr("disabled", false);


      $(".bus_transport_facility_col_9").hide();
      $(".bus_transport_facility_col_9 :input").attr("disabled", true);

    }
  });
}).change();


$('.bus_transport_class').change(function(){
  $(this).find("option:selected").each(function(){
    var optionValue = $(this).attr("value");
    if (optionValue=="Yes") {

      $(".bus_transport").show();
      $(".bus_transport :input").attr("disabled", false);

    }
    else{
      $(".bus_transport").hide();
      $(".bus_transport :input").attr("disabled", true);
    }
  });
}).change();



$('#sibling_id').change(function(){
  $(this).find("option:selected").each(function(){
    var optionValue = $(this).attr("value");
    if (optionValue=="Yes") {

      $(".sibling").show();
      $(".sibling :input").attr("disabled", false);

    }
    else{

      $(".sibling").hide();
      $(".sibling :input").attr("disabled", true);

    }
  });
}).change();


$('#class_id').change(function(){
  $(this).find("option:selected").each(function(){
    var optionValue = $(this).attr("value");

    if ( (optionValue == "IX" ) || (optionValue == "X" ) ) {
      $(".ncc").show();
      $(".ncc :input").attr("disabled", false);

    }
    else{
      $(".ncc").hide();
      $(".ncc :input").attr("disabled", true);
    }


  });
}).change();



$('#class_id').change(function(){
  $(this).find("option:selected").each(function(){
    var optionValue = $(this).attr("value");

    if ( (optionValue == "V" ) || (optionValue == "VI" ) || (optionValue == "VII" ) || (optionValue == "VIII" )) {

      $("#second_third_lang").show();
      // $("#second_third_lang:select option").attr("disabled", false);


      $("#second_lang").hide();
      $('#second_lang_select').prop('disabled', 'disabled');
      // $("#second_lang:select option").attr("disabled", true);

    }
    else{

      $("#second_third_lang").hide();
      $('#select1 , #select2').prop('disabled', 'disabled');
      // $("#second_third_lang:select option").attr("disabled", true);


      $("#second_lang").show();
      // $("#second_lang:select option").attr("disabled", false);
    }


  });
}).change();


// ######################### student-details-add-end ####################



// #################### for adding and deleting form row start ###################

var count=1;
$("#addRow").click(function(){

  $("#addNewSibling").append(addNewRow(count));
  count++;
});


function addNewRow(count){
  var newrow=	'<div class="row mt-5 sibling" id="'+(count)+'">'+
  '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">'+
  '<label> Sibling Name </label>'+
  '</div>'+
  '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">'+
  '<input type="text" name="sibling_name[]" class="form-control" placeholder="sibling name" required>'+
  '</div>'+
  '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">'+
  '<label> Class </label>'+
  '</div>'+
  '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">'+                        
  '<div class="row">'+
  '<div class="col-8">'+

  '<select class="form-control" name="sibling_class[]" required>'+
  '<option>  </option>'+
  '<option value="Nursery"> Nursery </option>'+
  '<option value="K.G."> K.G. </option>'+
  '<option value="I"> I </option>'+
  '<option value="II"> II </option>'+
  '<option value="III"> III </option>'+
  '<option value="IV"> IV</option>'+
  '<option value="V"> V </option>'+
  '<option value="VI"> VI </option>'+
  '<option value="VII"> VII </option>'+
  '<option value="VIII"> VIII </option>'+
  '<option value="IX"> IX </option>'+
  '<option value="X"> X </option>'+
  '</select>'+

  '</div>'+

  '<div class="col-4">'+

  '<select class="form-control" name="sibling_sec[]" required>'+
  '<option>  </option>'+
  '<option> A </option>'+
  '<option> B </option>'+
  '<option> C </option>'+
  '<option> D </option>'+
  '</select>'+

  '</div>'+

  '</div>'+


  '</div>'+

  '</div>';   

  return newrow;
}



$("#delRow").click(function(){

  if(count > 0){
  	
    $(this).find('id:"count"')(function(){

     $(this).parent().parent().remove();

   });

  }

});

// #################### for adding form row end ###################


// ######################## dynamic dependent selection start ################


//Reference: https://jsfiddle.net/fwv18zo1/
var $select1 = $( '#select1' ),
$select2 = $( '#select2' ),
$options = $select2.find( 'option' );

$select1.on( 'change', function() {
	$select2.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );


// ######################## dynamic dependent selection end ################


// ###################### student-marks-add-new start ####################


$(function(){
  $('#english_lang_unit_I_marks_id,#english_lit_unit_I_marks_id,#english_avg_unit_I_marks_id,#social_studies_unit_I_marks_id,#II_lang_unit_I_marks_id,#math_unit_I_marks_id,#science_unit_I_marks_id,#computer_app_unit_I_marks_id,#III_lang_unit_I_marks_id,#total_unit_I_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_unit_I_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_unit_I_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_unit_I_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_unit_I_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_unit_I_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_unit_I_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_unit_I_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_unit_I_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_unit_I_marks_id').val()) || 0;



   $('#total_unit_I_marks_id').val(value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9);

 });
});




$(function(){
  $('#english_lang_I_term_assesment_marks_id,#english_lit_I_term_assesment_marks_id,#english_avg_I_term_assesment_marks_id,#social_studies_I_term_assesment_marks_id,#II_lang_I_term_assesment_marks_id,#math_I_term_assesment_marks_id,#science_I_term_assesment_marks_id,#computer_app_I_term_assesment_marks_id,#III_lang_I_term_assesment_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_I_term_assesment_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_I_term_assesment_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_I_term_assesment_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_I_term_assesment_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_I_term_assesment_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_I_term_assesment_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_I_term_assesment_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_I_term_assesment_marks_id').val()) || 0;



   $('#total_I_term_assesment_marks_id').val(value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9);

 });
});



$(function(){
  $('#english_lang_II_term_assesment_marks_id,#english_lit_II_term_assesment_marks_id,#english_avg_II_term_assesment_marks_id,#social_studies_II_term_assesment_marks_id,#II_lang_II_term_assesment_marks_id,#math_II_term_assesment_marks_id,#science_II_term_assesment_marks_id,#computer_app_II_term_assesment_marks_id,#III_lang_II_term_assesment_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_II_term_assesment_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_II_term_assesment_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_II_term_assesment_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_II_term_assesment_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_II_term_assesment_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_II_term_assesment_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_II_term_assesment_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_II_term_assesment_marks_id').val()) || 0;



   $('#total_II_term_assesment_marks_id').val(value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9);

 });
});



$(function(){
  $('#english_lang_III_term_assesment_marks_id,#english_lit_III_term_assesment_marks_id,#english_avg_III_term_assesment_marks_id,#social_studies_III_term_assesment_marks_id,#II_lang_III_term_assesment_marks_id,#math_III_term_assesment_marks_id,#science_III_term_assesment_marks_id,#computer_app_III_term_assesment_marks_id,#III_lang_III_term_assesment_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_III_term_assesment_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_III_term_assesment_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_III_term_assesment_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_III_term_assesment_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_III_term_assesment_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_III_term_assesment_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_III_term_assesment_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_III_term_assesment_marks_id').val()) || 0;



   $('#total_II_term_assesment_marks_id').val(value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9);

 });
});




$(function(){
  $('#english_lang_I_term_exam_marks_id,#english_lit_I_term_exam_marks_id,#english_avg_I_term_exam_marks_id,#social_studies_I_term_exam_marks_id,#II_lang_I_term_exam_marks_id,#math_I_term_exam_marks_id,#science_I_term_exam_marks_id,#computer_app_I_term_exam_marks_id,#III_lang_I_term_exam_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_I_term_exam_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_I_term_exam_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_I_term_exam_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_I_term_exam_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_I_term_exam_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_I_term_exam_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_I_term_exam_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_I_term_exam_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_I_term_exam_marks_id').val()) || 0;



   $('#total_I_term_exam_marks_id').val(value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9);

 });
});



$(function(){
  $('#english_lang_II_term_exam_marks_id,#english_lit_II_term_exam_marks_id,#english_avg_II_term_exam_marks_id,#social_studies_II_term_exam_marks_id,#II_lang_II_term_exam_marks_id,#math_II_term_exam_marks_id,#science_II_term_exam_marks_id,#computer_app_II_term_exam_marks_id,#III_lang_II_term_exam_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_II_term_exam_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_II_term_exam_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_II_term_exam_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_II_term_exam_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_II_term_exam_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_II_term_exam_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_II_term_exam_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_II_term_exam_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_II_term_exam_marks_id').val()) || 0;



   $('#total_II_term_exam_marks_id').val(value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9);

 });
});



$(function(){
  $('#english_lang_III_term_exam_marks_id,#english_lit_III_term_exam_marks_id,#english_avg_III_term_exam_marks_id,#social_studies_III_term_exam_marks_id,#II_lang_III_term_exam_marks_id,#math_III_term_exam_marks_id,#science_III_term_exam_marks_id,#computer_app_III_term_exam_marks_id,#III_lang_III_term_exam_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_III_term_exam_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_III_term_exam_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_III_term_exam_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_III_term_exam_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_III_term_exam_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_III_term_exam_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_III_term_exam_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_III_term_exam_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_III_term_exam_marks_id').val()) || 0;



   $('#total_III_term_exam_marks_id').val(value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9);

 });
});



$(function(){

  $('#english_lang_I_term_assesment_marks_id,#english_lang_I_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#english_lang_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lang_I_term_exam_marks_id').val()) || 0;

   english_lang_I_term_total_marks_var = value1 + value2;

   $('#english_lang_I_term_total_marks_id').val(english_lang_I_term_total_marks_var);


   if((value1 + value2) >90){
    $('#english_lang_I_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#english_lang_I_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#english_lang_I_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#english_lang_I_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#english_lang_I_term_grade_id').val("E");
  }


});

});



$(function(){
  $('#english_lang_II_term_assesment_marks_id,#english_lang_II_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#english_lang_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lang_II_term_exam_marks_id').val()) || 0;

   english_lang_II_term_total_marks_var = value1 + value2;

   $('#english_lang_II_term_total_marks_id').val(english_lang_II_term_total_marks_var);


   if((value1 + value2) >90){
    $('#english_lang_II_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#english_lang_II_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#english_lang_II_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#english_lang_II_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#english_lang_II_term_grade_id').val("E");
  }

});
});


$(function(){
  $('#english_lang_III_term_assesment_marks_id,#english_lang_III_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#english_lang_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lang_III_term_exam_marks_id').val()) || 0;

   english_lang_III_term_total_marks_var = value1 + value2;

   $('#english_lang_III_term_total_marks_id').val(english_lang_III_term_total_marks_var);


   if((value1 + value2) >90){
    $('#english_lang_III_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#english_lang_III_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#english_lang_III_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#english_lang_III_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#english_lang_III_term_grade_id').val("E");
  }


});
});





$(function(){
  $('#english_lit_I_term_assesment_marks_id,#english_lit_I_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#english_lit_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_I_term_exam_marks_id').val()) || 0;

   english_lit_I_term_total_marks_var = value1 + value2;

   $('#english_lit_I_term_total_marks_id').val(english_lit_I_term_total_marks_var);


   if((value1 + value2) >90){
    $('#english_lit_I_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#english_lit_I_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#english_lit_I_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#english_lit_I_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#english_lit_I_term_grade_id').val("E");
  }

});
});



$(function(){
  $('#english_lit_II_term_assesment_marks_id,#english_lit_II_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#english_lit_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_II_term_exam_marks_id').val()) || 0;

   english_lit_II_term_total_marks_var = value1 + value2;

   $('#english_lit_II_term_total_marks_id').val(english_lit_II_term_total_marks_var);

   if((value1 + value2) >90){
    $('#english_lit_II_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#english_lit_II_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#english_lit_II_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#english_lit_II_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#english_lit_II_term_grade_id').val("E");
  }

});
});


$(function(){
  $('#english_lit_III_term_assesment_marks_id,#english_lit_III_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#english_lit_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_III_term_exam_marks_id').val()) || 0;

   english_lit_III_term_total_marks_var = value1 + value2;

   $('#english_lit_III_term_total_marks_id').val(english_lit_III_term_total_marks_var);

   if((value1 + value2) >90){
    $('#english_lit_III_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#english_lit_III_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#english_lit_III_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#english_lit_III_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#english_lit_III_term_grade_id').val("E");
  }

});
});




$(function(){
  $('#english_avg_I_term_assesment_marks_id,#english_avg_I_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#english_avg_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_avg_I_term_exam_marks_id').val()) || 0;

   english_avg_I_term_total_marks_var = value1 + value2;

   $('#english_avg_I_term_total_marks_id').val(english_avg_I_term_total_marks_var);


   if((value1 + value2) >90){
    $('#english_avg_I_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#english_avg_I_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#english_avg_I_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#english_avg_I_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#english_avg_I_term_grade_id').val("E");
  }

});
});



$(function(){
  $('#english_avg_II_term_assesment_marks_id,#english_avg_II_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#english_avg_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_avg_II_term_exam_marks_id').val()) || 0;

   english_avg_II_term_total_marks_var = value1 + value2;

   $('#english_avg_II_term_total_marks_id').val(english_avg_II_term_total_marks_var);


   if((value1 + value2) >90){
    $('#english_avg_II_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#english_avg_II_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#english_avg_II_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#english_avg_II_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#english_avg_II_term_grade_id').val("E");
  }

});
});


$(function(){
  $('#english_avg_III_term_assesment_marks_id,#english_avg_III_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#english_avg_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_avg_III_term_exam_marks_id').val()) || 0;

   english_avg_II_term_total_marks_var = value1 + value2; 

   $('#english_avg_III_term_total_marks_id').val(english_avg_II_term_total_marks_var);

   if((value1 + value2) >90){
    $('#english_avg_III_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#english_avg_III_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#english_avg_III_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#english_avg_III_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#english_avg_III_term_grade_id').val("E");
  }

});
});



$(function(){
  $('#social_studies_I_term_assesment_marks_id,#social_studies_I_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#social_studies_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#social_studies_I_term_exam_marks_id').val()) || 0;

   social_studies_I_term_total_marks_var = value1 + value2;
   $('#social_studies_I_term_total_marks_id').val(social_studies_I_term_total_marks_var);

   if((value1 + value2) >90){
    $('#social_studies_I_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#social_studies_I_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#social_studies_I_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#social_studies_I_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#social_studies_I_term_grade_id').val("E");
  }

});
});



$(function(){
  $('#social_studies_II_term_assesment_marks_id,#social_studies_II_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#social_studies_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#social_studies_II_term_exam_marks_id').val()) || 0;

   social_studies_II_term_total_marks_var = value1 + value2;

   $('#social_studies_II_term_total_marks_id').val(value1 + value2);

   if((value1 + value2) >90){
    $('#social_studies_II_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#social_studies_II_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#social_studies_II_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#social_studies_II_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#social_studies_II_term_grade_id').val("E");
  }

});
});


$(function(){
  $('#social_studies_III_term_assesment_marks_id,#social_studies_III_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#social_studies_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#social_studies_III_term_exam_marks_id').val()) || 0;

   social_studies_III_term_total_marks_var = value1 + value2;

   $('#social_studies_III_term_total_marks_id').val(value1 + value2);


   if((value1 + value2) >90){
    $('#social_studies_III_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#social_studies_III_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#social_studies_III_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#social_studies_III_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#social_studies_III_term_grade_id').val("E");
  }

});
});





$(function(){
  $('#II_lang_I_term_assesment_marks_id,#II_lang_I_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#II_lang_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#II_lang_I_term_exam_marks_id').val()) || 0;

   II_lang_I_term_total_marks_var = value1 + value2;
   $('#II_lang_I_term_total_marks_id').val(II_lang_I_term_total_marks_var);


   if((value1 + value2) >90){
    $('#II_lang_I_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#II_lang_I_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#II_lang_I_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#II_lang_I_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#II_lang_I_term_grade_id').val("E");
  }

});
});



$(function(){
  $('#II_lang_II_term_assesment_marks_id,#II_lang_II_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#II_lang_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#II_lang_II_term_exam_marks_id').val()) || 0;

   II_lang_II_term_total_marks_var = value1 + value2;

   $('#II_lang_II_term_total_marks_id').val(II_lang_II_term_total_marks_var);

   if((value1 + value2) >90){
    $('#II_lang_II_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#II_lang_II_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#II_lang_II_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#II_lang_II_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#II_lang_II_term_grade_id').val("E");
  }

});
});


$(function(){
  $('#II_lang_III_term_assesment_marks_id,#II_lang_III_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#II_lang_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#II_lang_III_term_exam_marks_id').val()) || 0;

   II_lang_III_term_total_marks_var = value1 + value2;

   $('#II_lang_III_term_total_marks_id').val(II_lang_III_term_total_marks_var);


   if((value1 + value2) >90){
    $('#II_lang_III_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#II_lang_III_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#II_lang_III_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#II_lang_III_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#II_lang_III_term_grade_id').val("E");
  }


});
});




$(function(){
  $('#math_I_term_assesment_marks_id,#math_I_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#math_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#math_I_term_exam_marks_id').val()) || 0;

   math_I_term_total_marks_var = value1 + value2;
   $('#math_I_term_total_marks_id').val(math_I_term_total_marks_var);

   if((value1 + value2) >90){
    $('#math_I_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#math_I_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#math_I_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#math_I_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#math_I_term_grade_id').val("E");
  }

});
});



$(function(){
  $('#math_II_term_assesment_marks_id,#math_II_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#math_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#math_II_term_exam_marks_id').val()) || 0;

   math_II_term_total_marks_var = value1 + value2;
   $('#math_II_term_total_marks_id').val(math_II_term_total_marks_var);


   if((value1 + value2) >90){
    $('#math_II_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#math_II_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#math_II_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#math_II_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#math_II_term_grade_id').val("E");
  }

});
});


$(function(){
  $('#math_III_term_assesment_marks_id,#math_III_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#math_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#math_III_term_exam_marks_id').val()) || 0;

   math_III_term_total_marks_var = value1 + value2;
   $('#math_III_term_total_marks_id').val(math_III_term_total_marks_var);

   if((value1 + value2) >90){
    $('#math_III_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#math_III_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#math_III_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#math_III_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#math_III_term_grade_id').val("E");
  }

});
});



$(function(){
  $('#science_I_term_assesment_marks_id,#science_I_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#science_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#science_I_term_exam_marks_id').val()) || 0;

   science_I_term_total_marks_var = value1 + value2;
   $('#science_I_term_total_marks_id').val(science_I_term_total_marks_var);

   if((value1 + value2) >90){
    $('#science_I_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#science_I_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#science_I_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#science_I_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#science_I_term_grade_id').val("E");
  }

});
});



$(function(){
  $('#science_II_term_assesment_marks_id,#science_II_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#science_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#science_II_term_exam_marks_id').val()) || 0;

   science_II_term_total_marks_var = value1 + value2;
   $('#science_II_term_total_marks_id').val(science_II_term_total_marks_var);

   if((value1 + value2) >90){
    $('#science_II_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#science_II_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#science_II_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#science_II_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#science_II_term_grade_id').val("E");
  }


});
});


$(function(){
  $('#science_III_term_assesment_marks_id,#science_III_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#science_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#science_III_term_exam_marks_id').val()) || 0;

   science_III_term_total_marks_var = value1 + value2;
   $('#science_III_term_total_marks_id').val(science_III_term_total_marks_var);

   if((value1 + value2) >90){
    $('#science_III_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#science_III_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#science_III_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#science_III_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#science_III_term_grade_id').val("E");
  }

});
});


$(function(){
  $('#computer_app_I_term_assesment_marks_id,#computer_app_I_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#computer_app_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#computer_app_I_term_exam_marks_id').val()) || 0;

   computer_app_I_term_total_marks_var = value1 + value2;
   $('#computer_app_I_term_total_marks_id').val(computer_app_I_term_total_marks_var);

   if((value1 + value2) >90){
    $('#computer_app_I_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#computer_app_I_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#computer_app_I_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#computer_app_I_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#computer_app_I_term_grade_id').val("E");
  }


});
});



$(function(){
  $('#computer_app_II_term_assesment_marks_id,#computer_app_II_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#computer_app_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#computer_app_II_term_exam_marks_id').val()) || 0;

   computer_app_II_term_total_marks_var = value1 + value2;
   $('#computer_app_II_term_total_marks_id').val(computer_app_II_term_total_marks_var);

   if((value1 + value2) >90){
    $('#computer_app_II_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#computer_app_II_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#computer_app_II_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#computer_app_II_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#computer_app_II_term_grade_id').val("E");
  }

});
});


$(function(){
  $('#computer_app_III_term_assesment_marks_id,#computer_app_III_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#computer_app_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#computer_app_III_term_exam_marks_id').val()) || 0;

   computer_app_III_term_total_marks_var = value1 + value2;
   $('#computer_app_III_term_total_marks_id').val(computer_app_III_term_total_marks_var);

   if((value1 + value2) >90){
    $('#computer_app_III_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#computer_app_III_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#computer_app_III_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#computer_app_III_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#computer_app_III_term_grade_id').val("E");
  }

});
});



$(function(){
  $('#III_lang_I_term_assesment_marks_id,#III_lang_I_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#III_lang_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#III_lang_I_term_exam_marks_id').val()) || 0;

   III_lang_I_term_total_marks_var = value1 + value2;
   $('#III_lang_I_term_total_marks_id').val(III_lang_I_term_total_marks_var);


   if((value1 + value2) >90){
    $('#III_lang_I_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#III_lang_I_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#III_lang_I_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#III_lang_I_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#III_lang_I_term_grade_id').val("E");
  }

});
});



$(function(){
  $('#III_lang_II_term_assesment_marks_id,#III_lang_II_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#III_lang_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#III_lang_II_term_exam_marks_id').val()) || 0;

   III_lang_II_term_total_marks_var = value1 + value2;
   $('#III_lang_II_term_total_marks_id').val(III_lang_II_term_total_marks_var);

   if((value1 + value2) >90){
    $('#III_lang_II_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#III_lang_II_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#III_lang_II_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#III_lang_II_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#III_lang_II_term_grade_id').val("E");
  }

});
});


$(function(){
  $('#III_lang_III_term_assesment_marks_id,#III_lang_III_term_exam_marks_id').keyup(function(){

   var value1 = parseFloat($('#III_lang_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#III_lang_III_term_exam_marks_id').val()) || 0;

   III_lang_III_term_total_marks_var = value1 + value2;
   $('#III_lang_III_term_total_marks_id').val(III_lang_III_term_total_marks_var);

   if((value1 + value2) >90){
    $('#III_lang_III_term_grade_id').val("A");
  }else if((value1 + value2) > 80 && (value1 + value2) <= 90){
    $('#III_lang_III_term_grade_id').val("B");
  }else if((value1 + value2) > 70 && (value1 + value2) <= 80){
    $('#III_lang_III_term_grade_id').val("C");
  }else if((value1 + value2) > 60 && (value1 + value2) <= 70){
    $('#III_lang_III_term_grade_id').val("D");
  }else if((value1 + value2) > 50 && (value1 + value2) <= 60){
    $('#III_lang_III_term_grade_id').val("E");
  }

});
});





$(function(){
  $('#english_lang_I_term_assesment_marks_id,#english_lit_I_term_assesment_marks_id,#english_avg_I_term_assesment_marks_id,#social_studies_I_term_assesment_marks_id,#II_lang_I_term_assesment_marks_id,#math_I_term_assesment_marks_id,#science_I_term_assesment_marks_id,#computer_app_I_term_assesment_marks_id,#III_lang_I_term_assesment_marks_id,#english_lang_I_term_exam_marks_id,#english_lit_I_term_exam_marks_id,#english_avg_I_term_exam_marks_id,#social_studies_I_term_exam_marks_id,#II_lang_I_term_exam_marks_id,#math_I_term_exam_marks_id,#science_I_term_exam_marks_id,#computer_app_I_term_exam_marks_id,#III_lang_I_term_exam_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_I_term_assesment_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_I_term_assesment_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_I_term_assesment_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_I_term_assesment_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_I_term_assesment_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_I_term_assesment_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_I_term_assesment_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_I_term_assesment_marks_id').val()) || 0;


   var value10 = parseFloat($('#english_lang_I_term_exam_marks_id').val()) || 0;
   var value11 = parseFloat($('#english_lit_I_term_exam_marks_id').val()) || 0;
   var value12 = parseFloat($('#english_avg_I_term_exam_marks_id').val()) || 0;
   var value13 = parseFloat($('#social_studies_I_term_exam_marks_id').val()) || 0;
   var value14 = parseFloat($('#II_lang_I_term_exam_marks_id').val()) || 0;
   var value15 = parseFloat($('#math_I_term_exam_marks_id').val()) || 0;
   var value16 = parseFloat($('#science_I_term_exam_marks_id').val()) || 0;
   var value17 = parseFloat($('#computer_app_I_term_exam_marks_id').val()) || 0;
   var value18 = parseFloat($('#III_lang_I_term_exam_marks_id').val()) || 0;

   var percent=(value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9 + value10 + value11 + value12 + value13 + value14 + value15 + value16 + value17 + value18);

   var total_I_term_total_marks_var = (percent.toFixed(2));

   $('#total_I_term_total_marks_id').val(total_I_term_total_marks_var);

 });
});




$(function(){
  $('#english_lang_I_term_assesment_marks_id,#english_lit_I_term_assesment_marks_id,#english_avg_I_term_assesment_marks_id,#social_studies_I_term_assesment_marks_id,#II_lang_I_term_assesment_marks_id,#math_I_term_assesment_marks_id,#science_I_term_assesment_marks_id,#computer_app_I_term_assesment_marks_id,#III_lang_I_term_assesment_marks_id,#english_lang_I_term_exam_marks_id,#english_lit_I_term_exam_marks_id,#english_avg_I_term_exam_marks_id,#social_studies_I_term_exam_marks_id,#II_lang_I_term_exam_marks_id,#math_I_term_exam_marks_id,#science_I_term_exam_marks_id,#computer_app_I_term_exam_marks_id,#III_lang_I_term_exam_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_I_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_I_term_assesment_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_I_term_assesment_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_I_term_assesment_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_I_term_assesment_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_I_term_assesment_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_I_term_assesment_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_I_term_assesment_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_I_term_assesment_marks_id').val()) || 0;


   var value10 = parseFloat($('#english_lang_I_term_exam_marks_id').val()) || 0;
   var value11 = parseFloat($('#english_lit_I_term_exam_marks_id').val()) || 0;
   var value12 = parseFloat($('#english_avg_I_term_exam_marks_id').val()) || 0;
   var value13 = parseFloat($('#social_studies_I_term_exam_marks_id').val()) || 0;
   var value14 = parseFloat($('#II_lang_I_term_exam_marks_id').val()) || 0;
   var value15 = parseFloat($('#math_I_term_exam_marks_id').val()) || 0;
   var value16 = parseFloat($('#science_I_term_exam_marks_id').val()) || 0;
   var value17 = parseFloat($('#computer_app_I_term_exam_marks_id').val()) || 0;
   var value18 = parseFloat($('#III_lang_I_term_exam_marks_id').val()) || 0;

   var percent=(((value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9 + value10 + value11 + value12 + value13 + value14 + value15 + value16 + value17 + value18)*100)/900);

   percentage_I_term_var = ( percent.toFixed(2) + "%");

   $('#percentage_I_term_id').val(percentage_I_term_var);

 });
});



$(function(){
  $('#english_lang_II_term_assesment_marks_id,#english_lit_II_term_assesment_marks_id,#english_avg_II_term_assesment_marks_id,#social_studies_II_term_assesment_marks_id,#II_lang_II_term_assesment_marks_id,#math_II_term_assesment_marks_id,#science_II_term_assesment_marks_id,#computer_app_II_term_assesment_marks_id,#III_lang_II_term_assesment_marks_id,#english_lang_II_term_exam_marks_id,#english_lit_II_term_exam_marks_id,#english_avg_II_term_exam_marks_id,#social_studies_II_term_exam_marks_id,#II_lang_II_term_exam_marks_id,#math_II_term_exam_marks_id,#science_II_term_exam_marks_id,#computer_app_II_term_exam_marks_id,#III_lang_II_term_exam_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_II_term_assesment_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_II_term_assesment_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_II_term_assesment_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_II_term_assesment_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_II_term_assesment_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_II_term_assesment_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_II_term_assesment_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_II_term_assesment_marks_id').val()) || 0;


   var value10 = parseFloat($('#english_lang_II_term_exam_marks_id').val()) || 0;
   var value11 = parseFloat($('#english_lit_II_term_exam_marks_id').val()) || 0;
   var value12 = parseFloat($('#english_avg_II_term_exam_marks_id').val()) || 0;
   var value13 = parseFloat($('#social_studies_II_term_exam_marks_id').val()) || 0;
   var value14 = parseFloat($('#II_lang_II_term_exam_marks_id').val()) || 0;
   var value15 = parseFloat($('#math_II_term_exam_marks_id').val()) || 0;
   var value16 = parseFloat($('#science_II_term_exam_marks_id').val()) || 0;
   var value17 = parseFloat($('#computer_app_II_term_exam_marks_id').val()) || 0;
   var value18 = parseFloat($('#III_lang_II_term_exam_marks_id').val()) || 0;

   var total=(value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9 + value10 + value11 + value12 + value13 + value14 + value15 + value16 + value17 + value18);

   var total_II_term_total_marks_var = (total.toFixed(2));

   $('#total_II_term_total_marks_id').val(total_II_term_total_marks_var);

 });
});



$(function(){
  $('#english_lang_II_term_assesment_marks_id,#english_lit_II_term_assesment_marks_id,#english_avg_II_term_assesment_marks_id,#social_studies_II_term_assesment_marks_id,#II_lang_II_term_assesment_marks_id,#math_II_term_assesment_marks_id,#science_II_term_assesment_marks_id,#computer_app_II_term_assesment_marks_id,#III_lang_II_term_assesment_marks_id,#english_lang_II_term_exam_marks_id,#english_lit_II_term_exam_marks_id,#english_avg_II_term_exam_marks_id,#social_studies_II_term_exam_marks_id,#II_lang_II_term_exam_marks_id,#math_II_term_exam_marks_id,#science_II_term_exam_marks_id,#computer_app_II_term_exam_marks_id,#III_lang_II_term_exam_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_II_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_II_term_assesment_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_II_term_assesment_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_II_term_assesment_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_II_term_assesment_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_II_term_assesment_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_II_term_assesment_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_II_term_assesment_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_II_term_assesment_marks_id').val()) || 0;


   var value10 = parseFloat($('#english_lang_II_term_exam_marks_id').val()) || 0;
   var value11 = parseFloat($('#english_lit_II_term_exam_marks_id').val()) || 0;
   var value12 = parseFloat($('#english_avg_II_term_exam_marks_id').val()) || 0;
   var value13 = parseFloat($('#social_studies_II_term_exam_marks_id').val()) || 0;
   var value14 = parseFloat($('#II_lang_II_term_exam_marks_id').val()) || 0;
   var value15 = parseFloat($('#math_II_term_exam_marks_id').val()) || 0;
   var value16 = parseFloat($('#science_II_term_exam_marks_id').val()) || 0;
   var value17 = parseFloat($('#computer_app_II_term_exam_marks_id').val()) || 0;
   var value18 = parseFloat($('#III_lang_II_term_exam_marks_id').val()) || 0;

   var percent=(((value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9 + value10 + value11 + value12 + value13 + value14 + value15 + value16 + value17 + value18)*100)/900);

   percentage_II_term_var = ( percent.toFixed(2) + "%");

   $('#percentage_II_term_id').val(percentage_II_term_var);

 });
});




$(function(){
  $('#english_lang_III_term_assesment_marks_id,#english_lit_III_term_assesment_marks_id,#english_avg_III_term_assesment_marks_id,#social_studies_III_term_assesment_marks_id,#II_lang_III_term_assesment_marks_id,#math_III_term_assesment_marks_id,#science_III_term_assesment_marks_id,#computer_app_III_term_assesment_marks_id,#III_lang_III_term_assesment_marks_id,#english_lang_III_term_exam_marks_id,#english_lit_III_term_exam_marks_id,#english_avg_III_term_exam_marks_id,#social_studies_III_term_exam_marks_id,#II_lang_III_term_exam_marks_id,#math_III_term_exam_marks_id,#science_III_term_exam_marks_id,#computer_app_III_term_exam_marks_id,#III_lang_III_term_exam_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_III_term_assesment_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_III_term_assesment_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_III_term_assesment_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_III_term_assesment_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_III_term_assesment_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_III_term_assesment_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_III_term_assesment_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_III_term_assesment_marks_id').val()) || 0;


   var value10 = parseFloat($('#english_lang_III_term_exam_marks_id').val()) || 0;
   var value11 = parseFloat($('#english_lit_III_term_exam_marks_id').val()) || 0;
   var value12 = parseFloat($('#english_avg_III_term_exam_marks_id').val()) || 0;
   var value13 = parseFloat($('#social_studies_III_term_exam_marks_id').val()) || 0;
   var value14 = parseFloat($('#II_lang_III_term_exam_marks_id').val()) || 0;
   var value15 = parseFloat($('#math_III_term_exam_marks_id').val()) || 0;
   var value16 = parseFloat($('#science_III_term_exam_marks_id').val()) || 0;
   var value17 = parseFloat($('#computer_app_III_term_exam_marks_id').val()) || 0;
   var value18 = parseFloat($('#III_lang_III_term_exam_marks_id').val()) || 0;

   var total=(value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9 + value10 + value11 + value12 + value13 + value14 + value15 + value16 + value17 + value18);

   var total_III_term_total_marks_var = (total.toFixed(2));

   $('#total_III_term_total_marks_id').val(total_III_term_total_marks_var);

 });
});


$(function(){
  $('#english_lang_III_term_assesment_marks_id,#english_lit_III_term_assesment_marks_id,#english_avg_III_term_assesment_marks_id,#social_studies_III_term_assesment_marks_id,#II_lang_III_term_assesment_marks_id,#math_III_term_assesment_marks_id,#science_III_term_assesment_marks_id,#computer_app_III_term_assesment_marks_id,#III_lang_III_term_assesment_marks_id,#english_lang_III_term_exam_marks_id,#english_lit_III_term_exam_marks_id,#english_avg_III_term_exam_marks_id,#social_studies_III_term_exam_marks_id,#II_lang_III_term_exam_marks_id,#math_III_term_exam_marks_id,#science_III_term_exam_marks_id,#computer_app_III_term_exam_marks_id,#III_lang_III_term_exam_marks_id').keyup(function(){
   var value1 = parseFloat($('#english_lang_III_term_assesment_marks_id').val()) || 0;
   var value2 = parseFloat($('#english_lit_III_term_assesment_marks_id').val()) || 0;
   var value3 = parseFloat($('#english_avg_III_term_assesment_marks_id').val()) || 0;
   var value4 = parseFloat($('#social_studies_III_term_assesment_marks_id').val()) || 0;
   var value5 = parseFloat($('#II_lang_III_term_assesment_marks_id').val()) || 0;
   var value6 = parseFloat($('#math_III_term_assesment_marks_id').val()) || 0;
   var value7 = parseFloat($('#science_III_term_assesment_marks_id').val()) || 0;
   var value8 = parseFloat($('#computer_app_III_term_assesment_marks_id').val()) || 0;
   var value9 = parseFloat($('#III_lang_III_term_assesment_marks_id').val()) || 0;


   var value10 = parseFloat($('#english_lang_III_term_exam_marks_id').val()) || 0;
   var value11 = parseFloat($('#english_lit_III_term_exam_marks_id').val()) || 0;
   var value12 = parseFloat($('#english_avg_III_term_exam_marks_id').val()) || 0;
   var value13 = parseFloat($('#social_studies_III_term_exam_marks_id').val()) || 0;
   var value14 = parseFloat($('#II_lang_III_term_exam_marks_id').val()) || 0;
   var value15 = parseFloat($('#math_III_term_exam_marks_id').val()) || 0;
   var value16 = parseFloat($('#science_III_term_exam_marks_id').val()) || 0;
   var value17 = parseFloat($('#computer_app_III_term_exam_marks_id').val()) || 0;
   var value18 = parseFloat($('#III_lang_III_term_exam_marks_id').val()) || 0;

   var percent=(((value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9 + value10 + value11 + value12 + value13 + value14 + value15 + value16 + value17 + value18)*100)/900);

   percentage_III_term_var = ( percent.toFixed(2) + "%");

   $('#percentage_III_term_id').val(percentage_III_term_var);

 });
});


$('input[type=number]').on('input', function () {

  var value = $(this).val();

  $(this).val(Math.max(Math.min(value, 100), 0));

});




// ###################### student-marks-add-new end ####################




// ######################## student-report start #######################


$("#btn1-hide").hide();
$("#btn2-hide").hide();
$("#btn3-hide").hide();
$("#btn4-hide").hide();
$("#btn5-hide").hide();
$("#btn6-hide").hide();

$("#btn1").click(function(){
  $("#btn1-hide").show();
  $("#btn2-hide").hide();
  $("#btn3-hide").hide();
  $("#btn4-hide").hide();
  $("#btn5-hide").hide();
  $("#btn6-hide").hide();
});


$("#btn2").click(function(){
  $("#btn1-hide").hide();
  $("#btn2-hide").show();
  $("#btn3-hide").hide();
  $("#btn4-hide").hide();
  $("#btn5-hide").hide();
  $("#btn6-hide").hide();
});

$("#btn3").click(function(){
 $("#btn1-hide").hide();
 $("#btn2-hide").hide();
 $("#btn3-hide").show();
 $("#btn4-hide").hide();
 $("#btn5-hide").hide();
 $("#btn6-hide").hide();
});

$("#btn4").click(function(){
  $("#btn1-hide").hide();
  $("#btn2-hide").hide();
  $("#btn3-hide").hide();
  $("#btn4-hide").show();
  $("#btn5-hide").hide();
  $("#btn6-hide").hide();
});

$("#btn5").click(function(){
  $("#btn1-hide").hide();
  $("#btn2-hide").hide();
  $("#btn3-hide").hide();
  $("#btn4-hide").hide();
  $("#btn5-hide").show();
  $("#btn6-hide").hide();
});

$("#btn6").click(function(){
  $("#btn1-hide").hide();
  $("#btn2-hide").hide();
  $("#btn3-hide").hide();
  $("#btn4-hide").hide();
  $("#btn5-hide").hide();
  $("#btn6-hide").show();
});


// ######################## student-report end #######################




});


