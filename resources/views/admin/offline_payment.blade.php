@extends('admin.admin_master')


@section('admin-content')
<main id="main" class="main">

@foreach ($payments as $payment)
  <!-- Card with an image on top -->
  <div class="row">
    <div class="col-sm-4">
        <div class="card">
            <img src="{{ asset('backend/assets/img/card.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card with an image on top</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="submit" class="btn btn-success">Approve</button>
            </div>
          </div><!-- End Card with an image on top -->
    </div>
  </div>

@endforeach

</main>

@endsection
