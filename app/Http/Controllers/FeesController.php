<?php

namespace App\Http\Controllers;

use App\Models\FeesModel;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('school.fees-structure');

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
       //  print_r( $request->all() );

        $data = new FeesModel;

        $data->no = $request->no;
        $data->date = $request->date;
        $data->name = $request->name;
        $data->class = $request->class;
        $data->section = $request->section;
        $data->father_name = $request->father_name;
        $data->admission_no = $request->admission_no;
        $data->admission_fee_rs = $request->admission_fee_rs;
        $data->admission_fee_ps = $request->admission_fee_ps;
        $data->caution_deposit_fee_rs = $request->caution_deposit_fee_rs;
        $data->caution_deposit_fee_ps = $request->caution_deposit_fee_ps;
        $data->annual_fee_rs = $request->annual_fee_rs;
        $data->annual_fee_ps = $request->annual_fee_ps;
        $data->tution_fee_term = $request->tution_fee_term;
        $data->tution_fee_rs = $request->tution_fee_rs;
        $data->tution_fee_ps = $request->tution_fee_ps;
        $data->bus_fee_term = $request->bus_fee_term;
        $data->bus_fee_rs = $request->bus_fee_rs;
        $data->bus_fee_ps = $request->bus_fee_ps;
        $data->registration_fee_rs = $request->registration_fee_rs;
        $data->registration_fee_ps = $request->registration_fee_ps;
        $data->prospectus_fee_rs = $request->prospectus_fee_rs;
        $data->prospectus_fee_ps = $request->prospectus_fee_ps;
        $data->others_fee_rs = $request->others_fee_rs;
        $data->others_fee_ps = $request->others_fee_ps;
        $data->total_fee_rs = $request->total_fee_rs;
        $data->total_fee_ps = $request->total_fee_ps;

        $data->save();

        return view('school.fees-structure');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeesModel  $feesModel
     * @return \Illuminate\Http\Response
     */
    public function show(FeesModel $feesModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeesModel  $feesModel
     * @return \Illuminate\Http\Response
     */
    public function edit(FeesModel $feesModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeesModel  $feesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeesModel $feesModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeesModel  $feesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeesModel $feesModel)
    {
        //
    }
}
