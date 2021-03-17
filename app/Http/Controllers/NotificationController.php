<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fetcheddata= DB::table('notification_details')->get();
        
        return view('school.notification-details',compact('fetcheddata'));
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

      

        $data = new Notification;
        $data->title = $request->notification_title;
        $data->content = $request->notification_textarea;
        $data->save();

        echo "<script> alert('Notifications Added Successfully') </script>";

        return view('school.notification-add');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        return view('school.notification-portal',compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {

        return view('school.notification-update',compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {

       $data = new Notification;
       $data->title = $request->notification_title;
       $data->content = $request->notification_textarea;
       $data->save();

       echo "<script> alert('Notifications Updated Successfully') </script>";

       return redirect()->route('notification.index');

   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        $value = Notification::findorFail($notification->id);
        $value->delete();
        echo "<script> alert('Notifications Deleted Successfully') </script>";

        return redirect()->route('notification.index');

    }
}
