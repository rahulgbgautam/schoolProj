@extends('school.layout')

@section('content')

<section class="staff-details">
     
  <div class="container">

      <form action=" {{ route('image-upload.store')}} " method="POST" enctype="multipart/form-data">
          
          @csrf
          
          <input type="file" name="image" class="form-control mt-5">

          <button type="submit" class="btn btn-success"> Store </button>

      </form>
          
  </div>    

</section>

@endsection