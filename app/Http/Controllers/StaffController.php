<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fetchdata = DB::table('staff_details')->get();
        return view('school.staff-details',compact('fetchdata'));
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


        $data = new Staff;

        $data->staff_id = $request->staff_id;
        $data->staff_name = $request->staff_name;
        $data->staff_email = $request->staff_email;
        
        $data->save();

        echo "<script> alert('Staff Details Added Successfully') </script>";
        
        return view('school.staff-details-add');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('school.staff-show',compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('school.staff-update',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {

        $data = new Staff;

        $data->staff_id = $request->staff_id;
        $data->staff_name = $request->staff_name;
        $data->staff_email = $request->staff_email;
        
        $data->save();

        echo "<script> alert('Staff Details Updated Successfully') </script>";

        return redirect()->route('staff.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $value = Staff::findorFail($staff->id);
        $value->delete();
        echo "<script> alert('Staff Details Deleted Successfully') </script>";

        return redirect()->route('staff.index');
    }
}
