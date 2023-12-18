@extends('admin.admin_master')

@section('admin-content')

<main id="main" class="main">

    <div>
        <h5>Hello  <b>{{ Auth::user()->name }}</b> </h5>

    </div>

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">All Administrators</h5>
                <p></p>

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

                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'sub_admin')
                    <tr>
                         <td>{{ $user->id }}</td>
                         <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->role }}</td>
                          <td>{{ $user->usercode }}</td>
                          {{-- <td>{{ $user->created_at->diffForHumans() }}</td> --}}
                     </tr>



                     @else

                     <h6>No Current Admin</h6>

                     @endif
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
