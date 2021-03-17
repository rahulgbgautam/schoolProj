@extends('school.layout')

@section('content')

<section class="admin-portal">

    <div class="container mt-5">

        <div class="row">

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

                <div class="card shadow" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">

                    <div class="card-body">

                        <p> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. 
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">

                <div class="card shadow" style="background-color: #FFFFFF;border: 0 solid rgba(0,0,0,.125);">

                    <div class="card-body">

                        <button class="btn btn-block btn-warning"><a class="text-light" href="/admin-details">  Admin </a>  </button>

                        <button class="btn btn-block btn-primary"><a class="text-light" href="/student-details">  Student </a>  </button>

                        <button class="btn btn-block btn-success"><a class="text-light" href=" {{ route('notification.index') }} ">  Notification </a>  </button>

                        <button class="btn btn-block btn-secondary"><a class="text-light" href=" {{ route('staff.index') }} ">  Staff </a>  </button>

                    </div>

                </div>

                
            </div>       


        </div>
        
    </div>

</section>

@endsection