@extends('school.layout')

@section('content')

<section class="notification-details">

  <div class="container">

    @if($notification)

    <h1 class="text-center"> Notification Update </h1>


    <form action=" {{ route('notification.update',$notification->id) }} " method="POST">

      @csrf
      @method('PUT')
      
      <div class="row">

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12"></div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

          <div class="row mt-5">

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
              <label> Title </label>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
              <input type="text" name="notification_title" class="form-control" value="{{ $notification->title }}">
            </div>

          </div>


          <div class="row mt-4">

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
              <label> Content </label>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">


              <textarea class="form-control" rows="4" name="notification_textarea"> {{ $notification->content }}</textarea>

            </div>

          </div>

          
        </div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12"></div>

      </div>

      <div class="row mt-5">

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12"></div>

        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

          <div class="text-center"> 
            <button type="submit" class="btn btn-success"> Update Notification </button>
          </div>

        </div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12"></div>

      </div>

    </form>


    @endif

  </div>

</section>

@endsection