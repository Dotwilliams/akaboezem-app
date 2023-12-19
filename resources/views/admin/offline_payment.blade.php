@extends('admin.admin_master')


@section('admin-content')
<main id="main" class="main">

    @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif

<div class="row">

@foreach ($payments as $payment)
  <!-- Card with an image on top -->

    <div class="col-sm-4">
        <div class="card">
            <img src="{{ asset('storage/'.$payment->prove_of_payment) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $payment->user->name }}</h5>
              <p class="card-text">{{ $payment->user->email }}</p>

           @if ($payment->status=='approved' )
           <h6> Approved </h6>
           @else
           <form action="/admin/verify-payment" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $payment->id }}">
            <input type="hidden" name="verdict" value="approve">
             <button type="submit" class="btn btn-success">Approve</button>
          </form>
{{-- -------------------------------------------- --}}

          <form action="/admin/verify-payment" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $payment->id }}">
            <input type="hidden" name="verdict" value="disapprove">
             <button type="submit" class="btn btn-danger">Disapprove</button>

          </form>

           @endif



            </div>
          </div><!-- End Card with an image on top -->
    </div>


@endforeach
</div>

</main>

@endsection
