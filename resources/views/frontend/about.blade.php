@extends('frontend.home_master')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Story</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Our Story</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Story Intro Section ======= -->
    <section id="story-intro" class="story-intro">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src=" {{ asset('frontend/assets/img/intro.jpg') }} " class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h4>Akaboeze Community, nestled in the heart of Nigeria, is a place of profound cultural significance and communal spirit.</h4>
            <p class="fst-italic">
              This tight-knit community, situated in the southeastern region, is distinguished by its vibrant traditions, warm hospitality, and a strong sense of collective identity.
            </p>
           
            <p>
              The landscape of Akaboeze is a picturesque blend of lush greenery and fertile soil, providing the foundation for the community's predominantly agrarian lifestyle. Agriculture is a cornerstone of daily life, with residents cultivating crops such as cassava, yams, and various vegetables. The fields surrounding Akaboeze paint a lively picture of sustainable farming practices that have been passed down through generations.<br><br>

              One of the distinctive features of Akaboeze is its rich cultural heritage. The community takes pride in preserving its customs, and this is evident in the colorful celebrations and festivals that bring people together. These events serve not only as occasions for merriment but also as platforms for passing down age-old traditions, ensuring their continuity into the future.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Story Intro Section -->

    <!-- ======= Featured Members Section ======= -->
    <section id="featured-members" class="featured-members">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <img src="{{ asset('frontend/assets/img/members/featured-members-1.jpg') }}" class="img-fluid" alt="">
            {{-- <img src="assets/img/members/featured-members-1.jpg" class="img-fluid" alt=""> --}}
          </div>
          <div class="col-lg-6 pt-3 pt-lg-0">
            <h4>Artisans in Akaboeze contribute to the community's cultural tapestry through their craftsmanship. Local artisans skillfully produce traditional crafts, reflecting the community's artistic prowess. </h4>
            <p class="fst-italic">
             These handmade creations often serve as both functional items and symbolic representations of Akaboeze's cultural identity.
            </p>
            <p>
              Education holds a significant place in Akaboeze, with a commitment to nurturing the intellectual growth of its residents. Schools in the community play a pivotal role in shaping the minds of the younger generation, blending traditional values with modern education to equip them for the challenges of the evolving world.<br><br>

              As a microcosm of Nigeria's diverse cultural landscape, Akaboeze Community is not merely a geographic location; it is a living testament to the resilience and unity of its people. In the face of societal changes, Akaboeze stands as a beacon, emphasizing the importance of preserving cultural roots while embracing the opportunities that lie ahead. It is a community where the past, present, and future harmoniously coexist, creating a unique and vibrant tapestry that continues to evolve with each passing day.
            </p>
          </div>
        </div>

    <!-- ======= Members Section ======= -->
    <section id="members" class="members">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                {{-- <img src="assets/img/members/member-1.jpg" class="img-fluid" alt=""> --}}
                <img src="{{ asset('frontend/assets/img/members/member-1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Sint qui cupiditate. Asperiores fugit impedit aspernatur et mollitia. Molestiae qui placeat labore assumenda id qui nesciunt quo reprehenderit. Rem dolores similique quis soluta culpa enim quia ratione ea.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('frontend/assets/img/members/member-2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Niall Katz</h4>
                <span>Marketing</span>
                <p>Aut ex esse explicabo quia harum ea accusamus excepturi. Temporibus at quia quisquam veritatis impedit. Porro laborum voluptatum sed necessitatibus a saepe. Deserunt laborum quasi consequatur voluptatum iusto sint qui fuga vel. Enim eveniet sed quibusdam rerum in. Non dicta architecto consequatur quo praesentium nesciunt.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('frontend/assets/img/members/member-3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Demi Lewis</h4>
                <span>Financing</span>
                <p>Amet labore numquam corrupti est. Nostrum amet voluptas consectetur dolor voluptatem architecto distinctio consequuntur eligendi. Quam impedit enim aut nesciunt aut dicta quam exercitationem. Reprehenderit exercitationem magnam. Ullam similique ut voluptas totam nobis porro accusamus nulla omnis.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Members Section -->

  </main><!-- End #main -->
    
@endsection