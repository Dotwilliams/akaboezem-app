  @extends('frontend.home_master')
  
  @section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div
          id="heroCarousel"
          data-bs-interval="5000"
          class="carousel slide carousel-fade"
          data-bs-ride="carousel"
        >
          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    
          <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div
              class="carousel-item active"
              style="background-image: url('{{ asset('frontend/assets/img/slide/slide-1.jpg')}}');"
            ></div>

            <!-- Slide 2 -->
            <div
              class="carousel-item"
              style="background-image: url('{{ asset('frontend/assets/img/slide/slide-2.jpg')}}');"
            ></div>
    
            <!-- Slide 3 -->
            <div
              class="carousel-item"
              style="background-image: url('{{ asset('frontend/assets/img/slide/slide-3.jpg')}}');"
            ></div>
          </div>
    
          <a
            class="carousel-control-prev"
            href="#heroCarousel"
            role="button"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon bi bi-chevron-left"
              aria-hidden="true"
            ></span>
          </a>
    
          <a
            class="carousel-control-next"
            href="#heroCarousel"
            role="button"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon bi bi-chevron-right"
              aria-hidden="true"
            ></span>
          </a>
        </div>
      </section>
      <!-- End Hero -->
    
      <main id="main">
        <!-- ======= AKABO-EZEM COMMUNITY Section ======= -->
        <section id="about" class="about">
          <div class="container">
            <div class="section-title">
              <h2>AKABO-EZEM COMMUNITY</h2>
              <p>
                Akaboeze Community is a vibrant and close-knit community located
                in Nigeria, known for its rich cultural heritage and warm
                hospitality. Situated in the southeastern part of the country,
                Akaboeze is characterized by lush green landscapes, where the
                fertile soil supports various agricultural activities. The
                community is home to a diverse group of people, each contributing
                to the unique tapestry of Akaboeze's cultural identity.
                Traditional customs and values are deeply rooted here, and
                community members often come together to celebrate festivals and
                events that showcase their cultural pride.
              </p>
            </div>
    
            <div class="row content">
              <div class="col-lg-6"> 
                <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="" />
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                  Agriculture plays a significant role in the livelihood of
                  Akaboeze residents, with many engaging in farming activities to
                  sustain their families and contribute to the local economy. The
                  cultivation of crops like cassava, yams, and various vegetables
                  is a common sight in the fertile fields surrounding the
                  community.<br /><br />
    
                  In addition to its agricultural pursuits, Akaboeze boasts a
                  vibrant arts and crafts scene. Local artisans skillfully create
                  traditional crafts, showcasing the community's artistic prowess.
                  Visitors to Akaboeze often have the opportunity to witness these
                  artisans at work and acquire unique handmade souvenirs that
                  reflect the cultural identity of the community.<br /><br />
    
                  Akaboeze is not just a geographical location; it is a living
                  testament to the resilience, unity, and cultural richness of the
                  people who call it home. As Nigeria continues to evolve,
                  Akaboeze Community stands as a testament to the importance of
                  preserving cultural heritage while embracing the opportunities
                  of the future.
                </p>
    
                <a href="about-us.html" class="btn-learn-more">Learn More</a>
              </div>
            </div>
          </div>
        </section>
        <!-- End My & Family Section -->
    
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-laptop"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">
                  Voluptatum deleniti atque corrupti quos dolores et quas
                  molestias excepturi sint occaecati cupiditate non provident
                </p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">
                  Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat tarad limino ata
                </p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-bounding-box"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">
                  Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur
                </p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-broadcast"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa
                  qui officia deserunt mollit anim id est laborum
                </p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-camera"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui
                  blanditiis praesentium voluptatum deleniti atque
                </p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-diagram-3"></i></div>
                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                <p class="description">
                  Et harum quidem rerum facilis est et expedita distinctio. Nam
                  libero tempore, cum soluta nobis est eligendi
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- End Features Section -->
    
        <!-- ======= Recent Photos Section ======= -->
        <section id="recent-photos" class="recent-photos">
          <div class="container">
            <div class="section-title">
              <h2>Recent Photos</h2>
              <p>
                Magnam dolores commodi suscipit. Necessitatibus eius consequatur
                ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
                quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                Quia fugiat sit in iste officiis commodi quidem hic quas.
              </p>
            </div>
    
            <div class="recent-photos-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <a
                    href="frontend/assets/img/recent-photos/recent-photos-1.jpg"
                    class="glightbox"
                    ><img
                      src=" {{asset('frontend/assets/img/recent-photos/recent-photos-1.jpg')}} "
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    href="frontend/assets/img/recent-photos/recent-photos-2.jpg"
                    class="glightbox"
                    ><img
                      src="{{asset('frontend/assets/img/recent-photos/recent-photos-2.jpg')}}"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    href="frontend/assets/img/recent-photos/recent-photos-3.jpg"
                    class="glightbox"
                    ><img
                      src="{{asset('frontend/assets/img/recent-photos/recent-photos-3.jpg')}}"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    href="frontend/assets/img/recent-photos/recent-photos-4.jpg"
                    class="glightbox"
                    ><img
                      src="{{asset('frontend/assets/img/recent-photos/recent-photos-4.jpg')}}"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    href="frontend/assets/img/recent-photos/recent-photos-5.jpg"
                    class="glightbox"
                    ><img
                      src="{{asset('frontend/assets/img/recent-photos/recent-photos-5.jpg')}}"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    href="frontend/assets/img/recent-photos/recent-photos-6.jpg"
                    class="glightbox"
                    ><img
                      src="{{asset('frontend/assets/img/recent-photos/recent-photos-6.jpg')}}"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    href="frontend/assets/img/recent-photos/recent-photos-7.jpg"
                    class="glightbox"
                    ><img
                      src="{{asset('frontend/assets/img/recent-photos/recent-photos-7.jpg')}}"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    href="frontend/assets/img/recent-photos/recent-photos-8.jpg"
                    class="glightbox"
                    ><img
                      src="{{asset('frontend/assets/img/recent-photos/recent-photos-8.jpg')}}"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </section>
        <!-- End Recent Photos Section -->
      </main>
      <!-- End #main -->

  @endsection

