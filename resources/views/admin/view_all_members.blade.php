@extends('admin.admin_master')

@section('admin-content')

<main id="main" class="main">

    <div>
        <h5>Hello  <b>{{ Auth::user()->name }}</b> </h5>
        <h6 style="">There are current <b>{{ count($users) }}</b> members on the app </h6>
    </div>
   
    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Datatables</h5>
                <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>

                <!-- Table with stripped rows -->
                <table class="table datatable">

                    {{-- table head --}}
                  <thead>
                    <tr>
                        <th> <b>SN</b> </th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Usercode</th>
                      {{-- <th>Created At</th> --}}
                      {{-- <th>Completion</th> --}}
                    </tr>
                  </thead>

                  {{-- table body --}}
                  <tbody>

                    @foreach($users as $user)
                <tr>
                     <td>{{ $user->id }}</td>
                     <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->role }}</td>
                      <td>{{ $user->usercode }}</td>
                      {{-- <td>{{ $user->created_at->diffForHumans() }}</td> --}}
                 </tr>
                 @endforeach

                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

              </div>
            </div>

          </div>
        </div>
      </section>

</main>

@endsection
