<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
     
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        


        // echo "<pre>";
        // print_r($request->all());

     

        $data = new Student;

        $data->admission_num = $request->admission_num;
        $data->roll_num = $request->roll_num;
        $data->student_name = $request->student_name;
        $data->student_class = $request->student_class;
        $data->student_sec = $request->student_sec;
        $data->ncc = $request->ncc;
        $data->religion = $request->religion;
        $data->nationality = $request->nationality;

        $data->adhar_num = $request->adhar_num;
        $data->adhar_num_value = $request->adhar_num_value;
        $data->is_new_student = $request->is_new_student;


        $data->mother_name = $request->mother_name;
        $data->father_name = $request->father_name;
        $data->dob = $request->dob;
        $data->doj = $request->doj;
        $data->gender = $request->gender;
        $data->house = $request->house;
        $data->slang = $request->slang;
        $data->tlang = $request->tlang;
        $data->caste = $request->caste;
        $data->school_lunch = $request->school_lunch;
        $data->sibling = $request->sibling;

        // $sibling_name = implode(",",$request->sibling_name);
        // $sibling_class = implode(",",$request->sibling_class);
        // $sibling_sec = implode(",",$request->sibling_sec);

        $data->sibling_name = $request->sibling_name;
        $data->sibling_class = $request->sibling_class;
        $data->sibling_sec = $request->sibling_sec;

        $data->bus_transport_facility = $request->bus_transport_facility;
        $data->bus_num = $request->bus_num;
        $data->conductor_contact_num = $request->conductor_contact_num;
        $data->conductor_name = $request->conductor_name;
        $data->bus_stoppage_points = $request->bus_stoppage_points;
        $data->father_contact_num = $request->father_contact_num;
        $data->mother_contact_num = $request->mother_contact_num;

        $data->save();

        
         // $sibling_names_str = implode(" , ",$request->sibling_name);
        // return $request->sibling_class;
        // return  $request->sibling_sec;


        // return redirect()->route('school.index')->with('success','Details Submitted successfully');

        return view('school.student-details-add');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
