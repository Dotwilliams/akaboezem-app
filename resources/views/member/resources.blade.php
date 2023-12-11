@extends('member.master_dashboard')

@section('member-dashboard-content')

<div class="content-wrapper">
   @if (Auth::user()->subscription_status)
   <div class="row">

    @forelse ($resources as $resource)

    <div class="col-md-4">

         <!-- Card with an image overlay -->
    <div style="max-width: 230px; min-height:160px;" class="card">
        <img src="{{ asset('signup/images/card.jpg') }}" class="card-img-top" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title">{{ $resource->name }}</h5>
          <p class="card-title">{{ $resource->filepath }}</p>

          <a href="#"  class="btn btn-primary">Download</a>
        </div>
      </div><!-- End Card with an image overlay -->

    </div>

@empty

<h6> No Data Avaliable </h6>

@endforelse

</div>
@else
<h4> Subscribe For Package </h4>
<h6>Proceed to payments <span><a href="{{ Route('membership') }}">Click Subscribe</a>  </span> </h6>
   @endif


</div>

@endsection
