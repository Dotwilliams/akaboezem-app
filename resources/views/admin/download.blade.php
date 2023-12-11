@extends('admin.admin_master')

@section('admin-content')

<main id="main" class="main">

    {{-- Session Error Message  --}}
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p class="alert alert-warning">{{$error}}</p>
    @endforeach
@endif
{{-- Session Error Message  --}}

@if(Session::has('msg'))
<p class="alert alert-info">{{ Session::get('msg') }}</p>
@endif


<div class="row">

    <div class="col-lg-8">


            <div class="card recent-sales overflow-auto">


              <div class="card-body">
                <h5 class="card-title">Resources <span>| Today</span></h5>

                <table class="table table-borderless datatable">
                  <thead>

                      <tr>
                          <th scope="col">SN</th>
                          <th scope="col">Name</th>
                          <th scope="col">File Path</th>
                          <th scope="col">Status</th>
                          {{-- <th scope="col">Edit</th> --}}
                      </tr>

                  </thead>

                  <tbody>
                      @foreach ($downloads as $download)
                    <tr>
                      <th scope="row"> <a href="#">#{{ $download->id }}</a> </th>

                      <td>{{ $download->name }}</td>

                      <td><a href="#" class="text-primary">{{ $download->filepath }}</a></td>

                      <td><span class="badge bg-success"> Active </span></td>

                      <td><span class="badge bg-warning">Pending</span></td>

                      <td><span class="badge bg-danger">Delete</span></td>

                    </tr>
                    @endforeach

                  </tbody>
                </table>

              </div>

            </div>


    </div>

    {{-- 2nd col --}}

    <div class="col-lg-4">

        <div class="card basic">
          <div class="card-body">
            <h5 class="card-title">Upload Documents</h5>

      <form action="/create-downloadable" method="post" enctype="multipart/form-data">
          @csrf

          <div class="row mb-3">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name">
              </div>
            </div>

            <div class="row mb-3">
              <label for="file" class="col-sm-2 col-form-label">File</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="filepath" id="File" required>
              </div>
            </div>


            <div class="text-center">
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>

      </form>
          </div>
        </div>

      </div>







</div>


</main>


@endsection
