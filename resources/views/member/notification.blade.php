@extends('member.master_dashboard')

@section('member-dashboard-content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Notifications</h5>

      <!-- List group with Advanced Contents -->
      <div class="list-group">

        <a href="#" class="list-group-item list-group-item-action m-2 active" aria-current="true">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">List group item heading</h5>
            <small>3 days ago</small>
          </div>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small>And some small print.</small>
        </a>

        <a href="#" class="list-group-item list-group-item-action m-2">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">List group item heading</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small class="text-muted">And some muted small print.</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action m-2">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">List group item heading</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small class="text-muted">And some muted small print.</small>
        </a>
      </div><!-- End List group Advanced Content -->

    </div>
  </div>

@endsection
