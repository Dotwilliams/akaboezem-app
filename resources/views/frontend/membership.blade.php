@extends('frontend.home_master')

@section('content')



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Membership</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Membership</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

      <!-- ======= Start Members Section ======= -->
      <section id="story-intro" class="story-intro">
        <div class="container">
          <div class="row">

            <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-1 content">
              <h4>
                Akaboeze Community, nestled in the heart of Nigeria, is a place
                of profound cultural significance and communal spirit.
              </h4>
              <p class="fst-italic">
                This tight-knit community, situated in the southeastern region,
                is distinguished by its vibrant traditions, warm hospitality,
                and a strong sense of collective identity.
              </p>

              <p>
                The landscape of Akaboeze is a picturesque blend of lush
                greenery and fertile soil, providing the foundation for the
                community's predominantly agrarian lifestyle. Agriculture is a
                cornerstone of daily life, with residents cultivating crops such
                as cassava, yams, and various vegetables. The fields surrounding
                Akaboeze paint a lively picture of sustainable farming practices
                that have been passed down through generations.<br /><br />

                One of the distinctive features of Akaboeze is its rich cultural
                heritage. The community takes pride in preserving its customs,
                and this is evident in the colorful celebrations and festivals
                that bring people together. These events serve not only as
                occasions for merriment but also as platforms for passing down
                age-old traditions, ensuring their continuity into the future.


              </p>
            </div>


            <div class="col-lg-6 pt-5 pt-lg-4  order-2 order-lg-2">


                <!-- Special title treatmen -->
                <div class="card text-center shadow">
                  <div class="card-header">
                    <h6 style="text-align: center; color:rgb(210, 15, 15)">
                      <b> Subscribe To Become A Part of us </b>
                      </h6>

                    </ul>
                  </div>

                  <div class="card-body">
                    <b  class="fst-italic">Premium Package</b>

                    <h3 class="card-title" style="font-weight: 600"><span class="text">₹</span>1000<span style="font-size:12px">/yr</span></h3>


                        @auth

                        @if (Auth::user()->role == 'user')

                        <a href="{{ route('member.index_dashboard') }}">
                          <button type="button" class="btn btn-primary">
                            Proceed to Dashboard
                          </button></a>
                          <div>
                            <small class="fst-italic mt-0">You are a member, Go to your dashboard</small>
                            </div>

                          @else

                          <a href="{{ route('admin.dashboard') }}">
                              <button type="button" class="btn btn-primary">
                                Proceed to Dashboard
                              </button></a>

                              <div>
                                <small class="fst-italic mt-0">You are a member, Go to your dashboard</small>
                                </div>

                        @endif

                        @endauth

                        {{-- -----------Guest-------------- --}}

                        @guest
                        <a href="{{ route('register') }}">
                            <div class="btn"><button class="btn btn-primary mt-3"><b style="font-size: 20px">Subscribe Now</b></button></div>
                        </a>
                        <div>
                            <small class="fst-italic mt-0">₹159/mo when you renew</small>
                            </div>

                            <ul class="mt-3" >


                                <li>
                                  <span>~ Access Members Dashboard</span>

                                </li>
                                <li>
                                  <span>Access To All Resources</span>

                                </li>
                                <li>
                                  <span>~Get Updated</span>

                                </li>
                                <li>
                                  <span>~Contribute</span>

                                </li>
                              </ul>

                        @endguest







                  </div>
                </div><!-- End Special title treatmen -->


                  </div>
          </div>
        </div>
      </section>
      <!-- End Members Section -->

</main>




{{--
 --}}





@endsection
