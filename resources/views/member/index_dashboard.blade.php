@extends('member.master_dashboard')

@section('member-dashboard-content')

<div class="content-wrapper">

           {{-- Session Error Message  --}}
     @if (Session::has('error'))
     <div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong> {{ session::get('error') }} </strong>
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     @endif
     {{-- Session Error Message  --}}

    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between flex-wrap">
          <div class="d-flex align-items-end flex-wrap">
            <div class="me-md-3 me-xl-5">
              <h4>Welcome back,  <span style="font-family: Georgia, 'Times New Roman', Times, serif";>  {{ Auth::user()->name }}. </span> </h2>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-end flex-wrap">

            <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                <a href="{{Route("member.download_history") }}"> <i class="mdi mdi-clock-outline text-muted"></i> </a>
               </button>

            <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
              <a href="{{Route("member.resources") }}"> <i class="mdi mdi-download text-muted"></i> </a>
            </button>

            {{-- <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
              <i class="mdi mdi-plus text-muted"></i>
            </button> --}}
            <button class="btn btn-danger mt-2 mt-xl-0"> <a href="{{Route("member.sub_reminder") }}" style="color: black">Subscription Review</a> </button>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body dashboard-tabs p-0">
            <ul class="nav nav-tabs px-4" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="sales-tab" data-bs-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Downloads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Activities</a>
              </li>
            </ul>
            <div class="tab-content py-0 px-0">
              <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <div class="d-flex flex-wrap justify-content-xl-between">
                  <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Start date</small>
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <h5 class="mb-0 d-inline-block">9 Dec 2023</h5>
                        </a>
                        {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                          <a class="dropdown-item" href="#">12 Dec 2023</a>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Plan Duration</small>
                      <h5 class="me-2 mb-0">1 Year</h5>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Resources For You</small>
                      <h5 class="me-2 mb-0">3</h5>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Downloads</small>
                      <h5 class="me-2 mb-0">0</h5>
                    </div>
                  </div>
                  <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-bell me-3 icon-lg text-danger"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Notification</small>
                      <h5 class="me-2 mb-0">3</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                <div class="d-flex flex-wrap justify-content-xl-between">
                  <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Start date</small>
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <h5 class="mb-0 d-inline-block">9 Dec 2023</h5>
                        </a>
                        {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                          <a class="dropdown-item" href="#">12 Dec 2023</a>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Downloads</small>
                      <h5 class="me-2 mb-0">0</h5>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Resources For You</small>
                      <h5 class="me-2 mb-0">3</h5>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Plan Duration</small>
                      <h5 class="me-2 mb-0">1 Year</h5>
                    </div>
                  </div>
                  <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-bell me-3 icon-lg text-danger"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Notification</small>
                      <h5 class="me-2 mb-0">3</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                <div class="d-flex flex-wrap justify-content-xl-between">
                  <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Start date</small>
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <h5 class="mb-0 d-inline-block">9 Dec 2023</h5>
                        </a>
                        {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                          <a class="dropdown-item" href="#">12 Dec 2023</a>
                        </div> --}}
                      </div>
                    </div>
                  </div>

                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Resources For You</small>
                      <h5 class="me-2 mb-0">3</h5>
                    </div>
                  </div>
                  <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Downloads</small>
                      <h5 class="me-2 mb-0">0</h5>
                    </div>

                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <small class="mb-1 text-muted">Plan Duration</small>
                          <h5 class="me-2 mb-0">1 Year</h5>
                        </div>
                      </div>

                  </div>
                  <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                    <i class="mdi mdi-bell me-3 icon-lg text-danger"></i>
                    <div class="d-flex flex-column justify-content-around">
                      <small class="mb-1 text-muted">Notification</small>
                      <h5 class="me-2 mb-0">3</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">New Notications</p>
            <p class="mb-4">To start a blog, think of a topic about and first brainstorm party is ways to write details</p>
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


            <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>

          </div>
        </div>
      </div>


      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title" style="color: rgb(174, 3, 3)">Updates & Developments</p>
            <h1>Lorem ipsum dolor sit amet</h1>
            <h5> consectetur adipisicing elit </h5>
            <p class="text-muted">Optio distinctio perspiciatis numquam porro est, error recusandae explicabo facere quas esse veritatis aliquam at fugit labore commodi exercitationem quasi id cumque!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, natus voluptatum ad eum illo architecto mollitia. Labore molestiae distinctio id, repudiandae consequuntur soluta ab voluptate illum repellat, facilis ullam vel.
            </p>
            <div id=""></div>
          </div>
          <canvas id="total-sales-chart"></canvas>
        </div>
      </div>
    </div>


    {{-- <div class="row">
      {{-- <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Recent Purchases</p>
            <div class="table-responsive">
              <table id="recent-purchases-listing" class="table">
                <thead>
                  <tr>
                      <th>Name</th>
                      <th>Status report</th>
                      <th>Office</th>
                      <th>Price</th>
                      <th>Date</th>
                      <th>Gross amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>Jeremy Ortega</td>
                      <td>Levelled up</td>
                      <td>Catalinaborough</td>
                      <td>$790</td>
                      <td>06 Jan 2018</td>
                      <td>$2274253</td>
                  </tr>
                  <tr>
                      <td>Alvin Fisher</td>
                      <td>Ui design completed</td>
                      <td>East Mayra</td>
                      <td>$23230</td>
                      <td>18 Jul 2018</td>
                      <td>$83127</td>
                  </tr>
                  <tr>
                      <td>Emily Cunningham</td>
                      <td>support</td>
                      <td>Makennaton</td>
                      <td>$939</td>
                      <td>16 Jul 2018</td>
                      <td>$29177</td>
                  </tr>
                  <tr>
                      <td>Minnie Farmer</td>
                      <td>support</td>
                      <td>Agustinaborough</td>
                      <td>$30</td>
                      <td>30 Apr 2018</td>
                      <td>$44617</td>
                  </tr>
                  {{-- <tr>
                      <td>Betty Hunt</td>
                      <td>Ui design not completed</td>
                      <td>Lake Sandrafort</td>
                      <td>$571</td>
                      <td>25 Jun 2018</td>
                      <td>$78952</td>
                  </tr>
                  <tr>
                      <td>Myrtie Lambert</td>
                      <td>Ui design completed</td>
                      <td>Cassinbury</td>
                      <td>$36</td>
                      <td>05 Nov 2018</td>
                      <td>$36422</td>
                  </tr>
                  <tr>
                      <td>Jacob Kennedy</td>
                      <td>New project</td>
                      <td>Cletaborough</td>
                      <td>$314</td>
                      <td>12 Jul 2018</td>
                      <td>$34167</td>
                  </tr>
                  <tr>
                      <td>Ernest Wade</td>
                      <td>Levelled up</td>
                      <td>West Fidelmouth</td>
                      <td>$484</td>
                      <td>08 Sep 2018</td>
                      <td>$50862</td>
                  </tr> --}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      {{-- </div> --}}
    </div>
  </div>

@endsection