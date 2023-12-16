@extends('admin.admin_master')

@section('admin-content')

<main id="main" class="main">


        <!-- Profile Edit Form -->
        <form>
          <div class="row mt-3">

            <div class="col-lg-8">


          <div class="row mb-3">
            <label for="title" class="col-md-4 col-lg-3 col-form-label">Title</label>
            <div class="col-md-8 col-lg-9">
              <input name="title" type="text" class="form-control" id="title" value="">
            </div>
          </div>

          <div class="row mb-3">
            <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
            <div class="col-md-8 col-lg-9">
              <textarea name="about" class="form-control" id="about" style="height: 100px"></textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="price" class="col-md-4 col-lg-3 col-form-label">Price</label>
            <div class="col-md-8 col-lg-9">
              <input name="price" type="text" class="form-control" id="price" value="">
            </div>
          </div>

          <div class="row mb-3">
            <label for="duration" class="col-md-4 col-lg-3 col-form-label">Duration</label>
            <div class="col-md-8 col-lg-9">
              <input name="duration" type="text" class="form-control" id="duration" value="">
            </div>
          </div>





          <



          {{-- <div class="row mb-3">
            <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
            <div class="col-md-8 col-lg-9">
              <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
            </div>
          </div> --}}

          {{-- <div class="row mb-3">
            <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
            <div class="col-md-8 col-lg-9">
              <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
            </div>
          </div> --}}

          {{-- <div class="row mb-3">
            <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
            <div class="col-md-8 col-lg-9">
              <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
            </div>
          </div> --}}

          {{-- <div class="row mb-3">
            <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
            <div class="col-md-8 col-lg-9">
              <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
            </div>
          </div> --}}

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>

            </div>

          </div>


        </form><!-- End Profile Edit Form -->



</main>

@endsection
