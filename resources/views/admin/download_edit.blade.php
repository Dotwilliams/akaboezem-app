@extends('admin.admin_master')

@section('admin-content')

<main id="main" class="main">

    {{-- Session Error Message  --}}
    {{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p class="alert alert-warning">{{$error}}</p>
    @endforeach
@endif --}}
{{-- Session Error Message  --}}

{{-- @if(Session::has('msg'))
<p class="alert alert-info">{{ Session::get('msg') }}</p>
@endif --}}


<div class="row">

    <div class="col-lg-8">


           {{-- ---------------------Edit Download------------------------- --}}

           <div class="card basic">
            <div class="card-body">
              <h5 class="card-title">Edit Resource Documents</h5>

        <form action="" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Update Document Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" value="{{ $downloadables->name }}">
                </div>
              </div>

              {{-- <div class="row mb-3">
                <label for="file" class="col-sm-2 col-form-label">Update File</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" name="pdf_file" id="File" value="{{ $downloadables->filepath }}" >
                </div>
              </div> --}}


              <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>

        </form>
            </div>
          </div>

    </div>

    {{-- 2nd col --}}

    <div class="col-lg-4">







      </div>







</div>


</main>


@endsection
