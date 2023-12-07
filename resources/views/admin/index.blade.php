@extends('admin.admin_master')

@section('admin-content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

     {{-- Session Error Message  --}}
     @if (Session::has('error'))
     <div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong> {{ session::get('error') }} </strong> 
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     @endif
     {{-- Session Error Message  --}}

     <h5>Login Admin Name : {{ Auth::user()->name }}</h5>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Users Tables</h5>

                  {{-- Table Start --}}
                  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">MEMBERS Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>Ext.</th>
                    <th>City</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                    <th>Completion</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Quentin Salas</td>
                    <td>1339</td>
                    <td>Los Andes</td>
                    <td>2011/26/01</td>
                    <td>49%</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Daniel Baldwin</td>
                    <td>6095</td>
                    <td>Moircy</td>
                    <td>2000/11/01</td>
                    <td>33%</td>
                  </tr>
                  {{-- <tr>
                    <td>Phelan Kane</td>
                    <td>9519</td>
                    <td>Germersheim</td>
                    <td>1999/16/04</td>
                    <td>77%</td>
                  </tr>
                  <tr>
                    <td>Quentin Salas</td>
                    <td>1339</td>
                    <td>Los Andes</td>
                    <td>2011/26/01</td>
                    <td>49%</td>
                  </tr>
                  <tr>
                    <td>Armand Suarez</td>
                    <td>6583</td>
                    <td>Funtua</td>
                    <td>1999/06/11</td>
                    <td>9%</td>
                  </tr>
                  <tr>
                    <td>Gretchen Rogers</td>
                    <td>5393</td>
                    <td>Moxhe</td>
                    <td>1998/26/10</td>
                    <td>24%</td>
                  </tr>
                  <tr>
                    <td>Harding Thompson</td>
                    <td>2824</td>
                    <td>Abeokuta</td>
                    <td>2008/06/08</td>
                    <td>10%</td>
                  </tr>
                  <tr>
                    <td>Mira Rocha</td>
                    <td>4393</td>
                    <td>Port Harcourt</td>
                    <td>2002/04/10</td>
                    <td>14%</td>
                  </tr>
                  <tr>
                    <td>Drew Phillips</td>
                    <td>2931</td>
                    <td>Goes</td>
                    <td>2011/18/10</td>
                    <td>58%</td>
                  </tr>
                  <tr>
                    <td>Emerald Warner</td>
                    <td>6205</td>
                    <td>Chiavari</td>
                    <td>2002/08/04</td>
                    <td>58%</td>
                  </tr>
                  <tr>
                    <td>Colin Burch</td>
                    <td>7457</td>
                    <td>Anamur</td>
                    <td>2004/02/01</td>
                    <td>34%</td>
                  </tr>
                  <tr>
                    <td>Russell Haynes</td>
                    <td>8916</td>
                    <td>Frascati</td>
                    <td>2015/28/04</td>
                    <td>18%</td>
                  </tr>
                  <tr>
                    <td>Brennan Brooks</td>
                    <td>9011</td>
                    <td>Olmué</td>
                    <td>2000/18/04</td>
                    <td>2%</td>
                  </tr>
                  <tr>
                    <td>Kane Anthony</td>
                    <td>8075</td>
                    <td>LaSalle</td>
                    <td>2006/21/05</td>
                    <td>93%</td>
                  </tr>
                  <tr>
                    <td>Scarlett Hurst</td>
                    <td>1019</td>
                    <td>Brampton</td>
                    <td>2015/07/01</td>
                    <td>94%</td>
                  </tr>
                  <tr>
                    <td>James Scott</td>
                    <td>3008</td>
                    <td>Meux</td>
                    <td>2007/30/05</td>
                    <td>55%</td>
                  </tr>
                  <tr>
                    <td>Desiree Ferguson</td>
                    <td>9054</td>
                    <td>Gojra</td>
                    <td>2009/15/02</td>
                    <td>81%</td>
                  </tr>
                  <tr>
                    <td>Elaine Bishop</td>
                    <td>9160</td>
                    <td>Petrópolis</td>
                    <td>2008/23/12</td>
                    <td>48%</td>
                  </tr>
                  <tr>
                    <td>Hilda Nelson</td>
                    <td>6307</td>
                    <td>Posina</td>
                    <td>2004/23/05</td>
                    <td>76%</td>
                  </tr>
                  <tr>
                    <td>Evangeline Beasley</td>
                    <td>3820</td>
                    <td>Caplan</td>
                    <td>2009/12/03</td>
                    <td>62%</td>
                  </tr>
                  <tr>
                    <td>Wyatt Riley</td>
                    <td>5694</td>
                    <td>Cavaion Veronese</td>
                    <td>2012/19/02</td>
                    <td>67%</td>
                  </tr>
                  <tr>
                    <td>Wyatt Mccarthy</td>
                    <td>3547</td>
                    <td>Patan</td>
                    <td>2014/23/06</td>
                    <td>9%</td>
                  </tr>
                  <tr>
                    <td>Cairo Rice</td>
                    <td>6273</td>
                    <td>Ostra Vetere</td>
                    <td>2016/27/02</td>
                    <td>13%</td>
                  </tr>
                  <tr>
                    <td>Sylvia Peters</td>
                    <td>6829</td>
                    <td>Arrah</td>
                    <td>2015/03/02</td>
                    <td>13%</td>
                  </tr>
                  <tr>
                    <td>Kasper Craig</td>
                    <td>5515</td>
                    <td>Firenze</td>
                    <td>2015/26/04</td>
                    <td>56%</td>
                  </tr>
                  <tr>
                    <td>Leigh Ruiz</td>
                    <td>5112</td>
                    <td>Lac Ste. Anne</td>
                    <td>2001/09/02</td>
                    <td>28%</td>
                  </tr>
                  <tr>
                    <td>Athena Aguirre</td>
                    <td>5741</td>
                    <td>Romeral</td>
                    <td>2010/24/03</td>
                    <td>15%</td>
                  </tr>
                  <tr>
                    <td>Riley Nunez</td>
                    <td>5533</td>
                    <td>Sart-Eustache</td>
                    <td>2003/26/02</td>
                    <td>30%</td>
                  </tr>
                  <tr>
                    <td>Lois Talley</td>
                    <td>9393</td>
                    <td>Dorchester</td>
                    <td>2014/05/01</td>
                    <td>51%</td>
                  </tr>
                  <tr>
                    <td>Hop Bass</td>
                    <td>1024</td>
                    <td>Westerlo</td>
                    <td>2012/25/09</td>
                    <td>85%</td>
                  </tr>
                  <tr>
                    <td>Kalia Diaz</td>
                    <td>9184</td>
                    <td>Ichalkaranji</td>
                    <td>2013/26/06</td>
                    <td>92%</td>
                  </tr>
                  <tr>
                    <td>Maia Pate</td>
                    <td>6682</td>
                    <td>Louvain-la-Neuve</td>
                    <td>2011/23/04</td>
                    <td>50%</td>
                  </tr>
                  <tr>
                    <td>Macaulay Pruitt</td>
                    <td>4457</td>
                    <td>Fraser-Fort George</td>
                    <td>2015/03/08</td>
                    <td>92%</td>
                  </tr>
                  <tr>
                    <td>Danielle Oconnor</td>
                    <td>9464</td>
                    <td>Neuwied</td>
                    <td>2001/05/10</td>
                    <td>17%</td>
                  </tr>
                  <tr>
                    <td>Kato Carr</td>
                    <td>4842</td>
                    <td>Faridabad</td>
                    <td>2012/11/05</td>
                    <td>96%</td>
                  </tr>
                  <tr>
                    <td>Malachi Mejia</td>
                    <td>7133</td>
                    <td>Vorst</td>
                    <td>2007/25/04</td>
                    <td>26%</td>
                  </tr>
                  <tr>
                    <td>Dominic Carver</td>
                    <td>3476</td>
                    <td>Pointe-aux-Trembles</td>
                    <td>2014/14/03</td>
                    <td>71%</td>
                  </tr>
                  <tr>
                    <td>Paki Santos</td>
                    <td>4424</td>
                    <td>Cache Creek</td>
                    <td>2001/18/11</td>
                    <td>82%</td>
                  </tr>
                  <tr>
                    <td>Ross Hodges</td>
                    <td>1862</td>
                    <td>Trazegnies</td>
                    <td>2010/19/09</td>
                    <td>87%</td>
                  </tr>
                  <tr>
                    <td>Hilda Whitley</td>
                    <td>3514</td>
                    <td>New Sarepta</td>
                    <td>2011/05/07</td>
                    <td>94%</td>
                  </tr>
                  <tr>
                    <td>Roth Cherry</td>
                    <td>4006</td>
                    <td>Flin Flon</td>
                    <td>2008/02/09</td>
                    <td>8%</td>
                  </tr>
                  <tr>
                    <td>Lareina Jones</td>
                    <td>8642</td>
                    <td>East Linton</td>
                    <td>2009/07/08</td>
                    <td>21%</td>
                  </tr>
                  <tr>
                    <td>Joshua Weiss</td>
                    <td>2289</td>
                    <td>Saint-Léonard</td>
                    <td>2010/15/01</td>
                    <td>52%</td>
                  </tr>
                  <tr>
                    <td>Kiona Lowery</td>
                    <td>5952</td>
                    <td>Inuvik</td>
                    <td>2002/17/12</td>
                    <td>72%</td>
                  </tr>
                  <tr>
                    <td>Nina Rush</td>
                    <td>7567</td>
                    <td>Bo‘lhe</td>
                    <td>2008/27/01</td>
                    <td>6%</td>
                  </tr>
                  <tr>
                    <td>Palmer Parker</td>
                    <td>2000</td>
                    <td>Stade</td>
                    <td>2012/24/07</td>
                    <td>58%</td>
                  </tr>
                  <tr>
                    <td>Vielka Olsen</td>
                    <td>3745</td>
                    <td>Vrasene</td>
                    <td>2016/08/01</td>
                    <td>70%</td>
                  </tr>
                  <tr>
                    <td>Meghan Cunningham</td>
                    <td>8604</td>
                    <td>Söke</td>
                    <td>2007/16/02</td>
                    <td>59%</td>
                  </tr>
                  <tr>
                    <td>Iola Shaw</td>
                    <td>6447</td>
                    <td>Albany</td>
                    <td>2014/05/03</td>
                    <td>88%</td>
                  </tr>
                  <tr>
                    <td>Imelda Cole</td>
                    <td>4564</td>
                    <td>Haasdonk</td>
                    <td>2007/16/11</td>
                    <td>79%</td>
                  </tr>
                  <tr>
                    <td>Jerry Beach</td>
                    <td>6801</td>
                    <td>Gattatico</td>
                    <td>1999/07/07</td>
                    <td>36%</td>
                  </tr>
                  <tr>
                    <td>Garrett Rocha</td>
                    <td>3938</td>
                    <td>Gavorrano</td>
                    <td>2000/06/08</td>
                    <td>71%</td>
                  </tr>
                  <tr>
                    <td>Derek Kerr</td>
                    <td>1724</td>
                    <td>Gualdo Cattaneo</td>
                    <td>2014/21/01</td>
                    <td>89%</td>
                  </tr>
                  <tr>
                    <td>Shad Hudson</td>
                    <td>5944</td>
                    <td>Salamanca</td>
                    <td>2014/10/12</td>
                    <td>98%</td>
                  </tr>
                  <tr>
                    <td>Daryl Ayers</td>
                    <td>8276</td>
                    <td>Barchi</td>
                    <td>2012/12/11</td>
                    <td>88%</td>
                  </tr>
                  <tr>
                    <td>Caleb Livingston</td>
                    <td>3094</td>
                    <td>Fatehpur</td>
                    <td>2014/13/02</td>
                    <td>8%</td>
                  </tr>
                  <tr>
                    <td>Sydney Meyer</td>
                    <td>4576</td>
                    <td>Neubrandenburg</td>
                    <td>2015/06/02</td>
                    <td>22%</td>
                  </tr>
                  <tr>
                    <td>Lani Lawrence</td>
                    <td>8501</td>
                    <td>Turnhout</td>
                    <td>2008/07/05</td>
                    <td>16%</td>
                  </tr>
                  <tr>
                    <td>Allegra Shepherd</td>
                    <td>2576</td>
                    <td>Meeuwen-Gruitrode</td>
                    <td>2004/19/04</td>
                    <td>41%</td>
                  </tr>
                  <tr>
                    <td>Fallon Reyes</td>
                    <td>3178</td>
                    <td>Monceau-sur-Sambre</td>
                    <td>2005/15/02</td>
                    <td>16%</td>
                  </tr>
                  <tr>
                    <td>Karen Whitley</td>
                    <td>4357</td>
                    <td>Sluis</td>
                    <td>2003/02/05</td>
                    <td>23%</td>
                  </tr>
                  <tr>
                    <td>Stewart Stephenson</td>
                    <td>5350</td>
                    <td>Villa Faraldi</td>
                    <td>2003/05/07</td>
                    <td>65%</td>
                  </tr>
                  <tr>
                    <td>Ursula Reynolds</td>
                    <td>7544</td>
                    <td>Southampton</td>
                    <td>1999/16/12</td>
                    <td>61%</td>
                  </tr>
                  <tr>
                    <td>Adrienne Winters</td>
                    <td>4425</td>
                    <td>Laguna Blanca</td>
                    <td>2014/15/09</td>
                    <td>24%</td>
                  </tr>
                  <tr>
                    <td>Francesca Brock</td>
                    <td>1337</td>
                    <td>Oban</td>
                    <td>2000/12/06</td>
                    <td>90%</td>
                  </tr>
                  <tr>
                    <td>Ursa Davenport</td>
                    <td>7629</td>
                    <td>New Plymouth</td>
                    <td>2013/27/06</td>
                    <td>37%</td>
                  </tr>
                  <tr>
                    <td>Mark Brock</td>
                    <td>3310</td>
                    <td>Veenendaal</td>
                    <td>2006/08/09</td>
                    <td>41%</td>
                  </tr>
                  <tr>
                    <td>Dale Rush</td>
                    <td>5050</td>
                    <td>Chicoutimi</td>
                    <td>2000/27/03</td>
                    <td>2%</td>
                  </tr>
                  <tr>
                    <td>Shellie Murphy</td>
                    <td>3845</td>
                    <td>Marlborough</td>
                    <td>2013/13/11</td>
                    <td>72%</td>
                  </tr>
                  <tr>
                    <td>Porter Nicholson</td>
                    <td>4539</td>
                    <td>Bismil</td>
                    <td>2012/22/10</td>
                    <td>23%</td>
                  </tr>
                  <tr>
                    <td>Oliver Huber</td>
                    <td>1265</td>
                    <td>Hannche</td>
                    <td>2002/11/01</td>
                    <td>94%</td>
                  </tr>
                  <tr>
                    <td>Calista Maynard</td>
                    <td>3315</td>
                    <td>Pozzuolo del Friuli</td>
                    <td>2006/23/03</td>
                    <td>5%</td>
                  </tr>
                  <tr>
                    <td>Lois Vargas</td>
                    <td>6825</td>
                    <td>Cumberland</td>
                    <td>1999/25/04</td>
                    <td>50%</td>
                  </tr>
                  <tr>
                    <td>Hermione Dickson</td>
                    <td>2785</td>
                    <td>Woodstock</td>
                    <td>2001/22/03</td>
                    <td>2%</td>
                  </tr>
                  <tr>
                    <td>Dalton Jennings</td>
                    <td>5416</td>
                    <td>Dudzele</td>
                    <td>2015/09/02</td>
                    <td>74%</td>
                  </tr>
                  <tr>
                    <td>Cathleen Kramer</td>
                    <td>3380</td>
                    <td>Crowsnest Pass</td>
                    <td>2012/27/07</td>
                    <td>53%</td>
                  </tr>
                  <tr>
                    <td>Zachery Morgan</td>
                    <td>6730</td>
                    <td>Collines-de-l'Outaouais</td>
                    <td>2006/04/09</td>
                    <td>51%</td>
                  </tr>
                  <tr>
                    <td>Yoko Freeman</td>
                    <td>4077</td>
                    <td>Lidköping</td>
                    <td>2002/27/12</td>
                    <td>48%</td>
                  </tr>
                  <tr>
                    <td>Chaim Waller</td>
                    <td>4240</td>
                    <td>North Shore</td>
                    <td>2010/25/07</td>
                    <td>25%</td>
                  </tr>
                  <tr>
                    <td>Berk Johnston</td>
                    <td>4532</td>
                    <td>Vergnies</td>
                    <td>2016/23/02</td>
                    <td>93%</td>
                  </tr>
                  <tr>
                    <td>Tad Munoz</td>
                    <td>2902</td>
                    <td>Saint-Nazaire</td>
                    <td>2010/09/05</td>
                    <td>65%</td>
                  </tr>
                  <tr>
                    <td>Vivien Dominguez</td>
                    <td>5653</td>
                    <td>Bargagli</td>
                    <td>2001/09/01</td>
                    <td>86%</td>
                  </tr>
                  <tr>
                    <td>Carissa Lara</td>
                    <td>3241</td>
                    <td>Sherborne</td>
                    <td>2015/07/12</td>
                    <td>72%</td>
                  </tr>
                  <tr>
                    <td>Hammett Gordon</td>
                    <td>8101</td>
                    <td>Wah</td>
                    <td>1998/06/09</td>
                    <td>20%</td>
                  </tr>
                  <tr>
                    <td>Walker Nixon</td>
                    <td>6901</td>
                    <td>Metz</td>
                    <td>2011/12/11</td>
                    <td>41%</td>
                  </tr>
                  <tr>
                    <td>Nathan Espinoza</td>
                    <td>5956</td>
                    <td>Strathcona County</td>
                    <td>2002/25/01</td>
                    <td>47%</td>
                  </tr>
                  <tr>
                    <td>Kelly Cameron</td>
                    <td>4836</td>
                    <td>Fontaine-Valmont</td>
                    <td>1999/02/07</td>
                    <td>24%</td>
                  </tr>
                  <tr>
                    <td>Kyra Moses</td>
                    <td>3796</td>
                    <td>Quenast</td>
                    <td>1998/07/07</td>
                    <td>68%</td>
                  </tr>
                  <tr>
                    <td>Grace Bishop</td>
                    <td>8340</td>
                    <td>Rodez</td>
                    <td>2012/02/10</td>
                    <td>4%</td>
                  </tr>
                  <tr>
                    <td>Haviva Hernandez</td>
                    <td>8136</td>
                    <td>Suwałki</td>
                    <td>2000/30/01</td>
                    <td>16%</td>
                  </tr>
                  <tr>
                    <td>Alisa Horn</td>
                    <td>9853</td>
                    <td>Ucluelet</td>
                    <td>2007/01/11</td>
                    <td>39%</td>
                  </tr>
                  <tr>
                    <td>Zelenia Roman</td>
                    <td>7516</td>
                    <td>Redwater</td>
                    <td>2012/03/03</td>
                    <td>31%</td>
                  </tr> --}}
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

                  {{-- Table end --}}

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>$47</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>$147</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>$67</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>$165</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Selling <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src=" {{ asset('backend/assets/img/product-1.jpg') }} " alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src=" {{ asset('backend/assets/img/product-2.jpg') }} " alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src=" {{ asset('backend/assets/img/product-3.jpg') }} " alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src=" {{ asset('backend/assets/img/product-4.jpg') }} " alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src=" {{ asset('backend/assets/img/product-5.jpg') }} " alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Budget Report -->
          <div class="card">
            

            <div class="card-body pb-0">
              <h5 class="card-title">Create <span> Adiministrator</span></h5>

              


            </div>
          </div><!-- End Budget Report -->

            <!-- Recent Activity -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
  
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
  
              <div class="card-body">
                <h5 class="card-title">Recent Activity <span>| Today</span></h5>
  
                <div class="activity">
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                      Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                      Voluptatem blanditiis blanditiis eveniet
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                      Voluptates corrupti molestias voluptatem
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                      Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">2 days</div>
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                    <div class="activity-content">
                      Est sit eum reiciendis exercitationem
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">4 weeks</div>
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <div class="activity-content">
                      Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                    </div>
                  </div><!-- End activity item-->
  
                </div>
  
              </div>
            </div><!-- End Recent Activity -->

          <!-- Website Traffic -->
          <div class="card">
          

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

        

            
            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src=" {{ asset('backend/assets/img/news-1.jpg') }} " alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src=" {{ asset('backend/assets/img/news-2.jpg') }} " alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src=" {{ asset('backend/assets/img/news-3.jpg') }} " alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src=" {{ asset('backend/assets/img/news-4.jpg') }} " alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src=" {{ asset('backend/assets/img/news-5.jpg') }} " alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

    
@endsection