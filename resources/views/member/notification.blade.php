@extends('member.master_dashboard')

@section('member-dashboard-content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Notifications</h5>

      <!-- List group with Advanced Contents -->
      <div class="list-group">

        @foreach ($user_notifications as $user_notification)

        <a href="#" class="list-group-item list-group-item-action m-2">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">{{$user_notification->title}}</h5>

              <p class="mb-1" style="color: red;">{{$user_notification->message}}</p>
              {{-- <small class="text-muted">{{\Carbon\Carbon::parse($user_notification->created_at)->diffForHumans()}}</small> --}}
              {{-- <small class="text-muted">And some muted small print.</small> --}}
            </div>

          </a>

        @endforeach


        {{-- <a href="#" class="list-group-item list-group-item-action m-2">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">List group item heading</h5>
            <small class="text-muted">3 days ago</small>
          </div>

        </a> --}}
      </div><!-- End List group Advanced Content -->

    </div>
  </div>

@endsection
