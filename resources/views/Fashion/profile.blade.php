@extends('layouts.fashion')
@section('content')
<main>
    <section class="container  p-5">
            <img src="{{asset('Dashboard/img/user.jpg')}}" class="img-circle elevation-2" alt="profile_pic" width="20%">
            <div class="profile_info">
                <h5 class="pinky-color">Name:</h5> <h6>{{Auth::User()->name}}</h6>
                <h5 class="pinky-color">email</h5> <h6>{{Auth::User()->email}}</h6>
                <h5 class="pinky-color">User Since</h5> <h6>{{date_format(Auth::User()->created_at,'D M Y')}}</h6>
            </div>
      </section>
  </main>
@endsection
