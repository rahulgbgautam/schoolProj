<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // use HasFactory;
     protected $table = "student_details";

    protected $fillable = ['admission_num','roll_num','student_name','student_class','student_sec','slang','tlang','ncc','mother_name','father_name','dob','doj','gender','house','religion','nationality','caste','adhar_num','adhar_num_value','school_lunch','sibling','sibling_name','sibling_class','sibling_sec','is_new_student','previous_school_name','bus_transport_facility','bus_num','conductor_contact_num','conductor_name','bus_stoppage_points','father_contact_num','mother_contact_num'];


	protected $casts = [

	'sibling_name' => 'array',
	'sibling_class' => 'array',
	'sibling_sec' => 'array'

	];


}


