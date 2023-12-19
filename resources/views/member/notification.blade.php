@extends('member.master_dashboard')

@section('member-dashboard-content')

<div class="card">
    <div class="card-body">
      {{-- <h5 class="card-title" style="color: rgb(197, 10, 10)">Notifications</h5> --}}

      <!-- List group with Advanced Contents -->
      <div class="list-group">

        @foreach ($user_notifications as $user_notification)


          <a href="#" class="list-group-item list-group-item-action m-2" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1" style="color: rgb(197, 10, 10);"><b>{{$user_notification->title}}</b></h5>
              <small>3 days ago</small>
            </div>
            <p class="mb-1">{{$user_notification->message}}</p>
            {{-- <small>And some small print.</small> --}}
          </a>

        @endforeach


      </div><!-- End List group Advanced Content -->

    </div>
  </div>

@endsection
