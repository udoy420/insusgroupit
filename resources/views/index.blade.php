@extends('layouts.frontend_master')

@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <!-- Bootstrap Carousel -->
            <div id="carouselHero" class="carousel slide" data-bs-ride="carousel">
                {{-- <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <img src="{{ asset('front_assets') }}/images/home/Designer2.jpeg" class="d-block w-100"
                            alt="Hero Image 1">
                    </div>
                    <!-- Second Slide -->
                    <div class="carousel-item">
                        <img src="{{ asset('front_assets') }}/images/home/cta-bg.jpg" class="d-block w-100"
                            alt="Hero Image 2">
                    </div>
                    <!-- 3rd Slide -->
                    <div class="carousel-item">
                        <img src="{{ asset('front_assets') }}/images/home/hero-bg.jpg" class="d-block w-100"
                            alt="Hero Image 3">
                    </div>
                    <!-- 4rd Slide -->
                    <div class="carousel-item">
                        <img src="{{ asset('front_assets') }}/images/home/testimonials-bg.jpg" class="d-block w-100"
                            alt="Hero Image 4">
                    </div>
                    <!-- 5th Slide -->
                    <div class="carousel-item">
                        <img src="{{ asset('front_assets') }}/images/home/Designer3.jpeg" class="d-block w-100"
                            alt="Hero Image 5">
                    </div>
                </div> --}}
                <div class="carousel-inner">
                    @foreach ($slides as $index => $slide)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset('uploads/home_slide/' . $slide->home_slide) }}" class="d-block w-100"
                                alt="Hero Slide {{ $index + 1 }}">
                        </div>
                    @endforeach
                </div>


                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- Hero Content -->
            <div class="container">
                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-6 col-lg-8">
                        <h2 class="fade-text">{{ env('APP_NAME') }}</h2>
                        <p>{{ env('APP_SLOGAN') }}</p>
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->



        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Softwares</h2>
                <p>Check our Softwares</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Softwares Category-1</li>
                        <li data-filter=".filter-product">Softwares Category-2</li>
                        <!-- <li data-filter=".filter-branding"></li> -->
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($softwares as $software)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $software->filter }}">
                                <img src="{{ asset('uploads/softwares/' . $software->image) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>
                                        @if ($software->filter === 'filter-app')
                                            Softwares Category-1
                                        @elseif ($software->filter === 'filter-product')
                                            Softwares Category-2
                                        @else
                                            Uncategorized
                                        @endif
                                    </h4>

                                    <p>ERP - {{ $software->title }}</p>
                                    <a href="{{ asset('uploads/softwares/' . $software->image) }}"
                                        title="ERP - {{ $software->title }}" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{ $software->link ?? route('underConstruction') }}" title="More Details"
                                        class="details-link">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>

                                </div>
                            </div>

                            <!-- End Portfolio Item -->
                            {{--
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                <img src="{{ asset('front_assets') }}/images/home/portfolio/textile0.jpg" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>Softwares Category-2</h4>
                                    <p>ERP - TEXTILE</p>
                                    <a href="{{ asset('front_assets') }}/images/home/portfolio/textile0.jpg"
                                        title="ERP - TEXTILE" data-gallery="portfolio-gallery-product"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="UnderConstruction.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div> --}}
                            <!-- End Portfolio Item -->
                        @endforeach
                    </div>
                    <!-- End Portfolio Container -->


                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Products -->
        <section id="featured-products" class="product-store">
            <div class="container-md">
                <div class="display-header d-flex align-items-center justify-content-between">
                    <!-- Section Title -->
                    <div class=" section-title" data-aos="fade-up">
                        <h2 class="section-title text-uppercase">Featured Products</h2>
                        <p>Check our Products</p>
                    </div><!-- End Section Title -->

                    <div class="btn-right">
                        <a href="product-site" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
                    </div>
                </div>
                <div class="product-content padding-small">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 2000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                },
                                "breakpoints": {
                                    "320": { "slidesPerView": 1, "spaceBetween": 20 },
                                    "480": { "slidesPerView": 2, "spaceBetween": 30 },
                                    "768": { "slidesPerView": 3, "spaceBetween": 40 },
                                    "992": { "slidesPerView": 4, "spaceBetween": 50 }
                                }
                            }
                        </script>
                    </div>

                    <div class="swiper-wrapper" id="product-list">
                        <!-- Product Cards will be dynamically inserted here -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
        </section>

        <!-- Products -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Check our Services</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i>SQA</i> <!-- class="bi bi-activity" -->
                            </div>
                            <!-- <a href="service-details.html" class="stretched-link">

                                          </a> -->
                            <h3>Software Quality Assurance</h3>
                            <p>Insus Group of the biggest names in the industry,It is an open platform that Support greater
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i>FBe</i> <!-- class="bi bi-broadcast" -->
                            </div>
                            <!-- <a href="service-details.html" class="stretched-link">

                                          </a> -->
                            <h3>Food and Bevarage</h3>
                            <p>Insus Group of the biggest names in the industry,It is an open platform that Support greater
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i>CSS</i><!-- class="bi bi-easel" -->
                            </div>
                            <!-- <a href="service-details.html" class="stretched-link">

                                          </a> -->
                            <h3>Cloud Server Service</h3>
                            <p>Insus Group of the biggest names in the industry,It is an open platform that Support greater
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i>DHS</i><!-- class="bi bi-bounding-box-circles" -->
                            </div>
                            <!-- <a href="service-details.html" class="stretched-link">

                                          </a> -->
                            <h3>Domain Hosting Service</h3>
                            <p>Insus Group of the biggest names in the industry,It is an open platform that Support greater
                            </p>
                            <!-- <a href="service-details.html" class="stretched-link"></a> -->
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i>DCM</i><!-- class="bi bi-calendar4-week" -->
                            </div>
                            <!-- <a href="service-details.html" class="stretched-link">

                                          </a> -->
                            <h3>Data Center Management</h3>
                            <p>Insus Group of the biggest names in the industry,It is an open platform that Support greater
                            </p>
                            <!-- <a href="service-details.html" class="stretched-link"></a> -->
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i>SUM</i><!-- class="bi bi-chat-square-text" -->
                            </div>
                            <!-- <a href="service-details.html" class="stretched-link">

                                          </a> -->
                            <h3>Software Upgrade and Maintenance</h3>
                            <p>Insus Group of the biggest names in the industry,It is an open platform that Support greater
                            </p>
                            <!-- <a href="service-details.html" class="stretched-link"></a> -->
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section>
        <!-- /Services Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About us</h2>
                <p>Why you select us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ asset('front_assets') }}/images/home/ab2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>Insus Group</h3>
                        <p class="fst-italic">
                            Welcome to Insus Group, a dynamic and diversified conglomerate with a commitment to excellence
                            across various industries. With years of expertise, innovation, and a customer-centric approach,
                            Insus Group has established itself as a leading name in sectors such as manufacturing,
                            technology, finance, and real estate.

                            At Insus Group, we strive to bring forward sustainable solutions that meet the evolving needs of
                            the market. Our diverse portfolio of businesses is a testament to our entrepreneurial spirit,
                            built on a foundation of integrity, collaboration, and forward-thinking leadership.

                            We take pride in our ability to adapt, grow, and continuously improve, ensuring that every one
                            of our ventures contributes to the growth and development of the communities we serve. With a
                            team of passionate professionals, we aim to achieve operational excellence while delivering
                            unmatched value to our stakeholders and customers.

                            Join us as we continue to explore new horizons, create meaningful change, and foster lasting
                            partnerships across the globe. At Insus Group, we believe in making a difference, together.

                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->


        <!-- Features Section -->

        <!-- <section id="features" class="features section">

                                  <div class="container">

                                    <div class="row gy-4">
                                      <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="{{ asset('front_assets') }}/images/home/features-bg.jpg" alt=""></div>
                                      <div class="col-lg-6">

                                        <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                                          <i class="bi bi-archive flex-shrink-0"></i>
                                          <div>
                                            <h4>Est labore ad</h4>
                                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                                          </div>
                                        </div> -->
        <!-- End Features Item-->

        <!-- <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                                          <i class="bi bi-basket flex-shrink-0"></i>
                                          <div>
                                            <h4>Harum esse qui</h4>
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                          </div>
                                        </div> -->
        <!-- End Features Item-->

        <!-- <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                                          <i class="bi bi-broadcast flex-shrink-0"></i>
                                          <div>
                                            <h4>Aut occaecati</h4>
                                            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                          </div>
                                        </div> -->
        <!-- End Features Item-->

        <!-- <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
                                          <i class="bi bi-camera-reels flex-shrink-0"></i>
                                          <div>
                                            <h4>Beatae veritatis</h4>
                                            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                          </div>
                                        </div> -->
        <!-- End Features Item-->

        <!-- </div>
                                    </div>

                                  </div>

                                </section> -->

        <!-- /Features Section -->







        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-lg-5">
                        <img src="{{ asset('front_assets') }}/images/home/ih3.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <h3 class="fw-bold fs-2 mb-3">Clients & Support Details</h3>
                        <p>
                            Our support team is available 24/7 to help for any needs. Contact us anytime for a seamless
                            experience!
                        </p>

                        <div class="row gy-4">

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-emoji-smile flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="32"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Happy Clients</strong></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-journal-richtext flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="57"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Projects</strong></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-headset flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="853"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Hours Of Support</strong></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-people flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="18"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Hard Workers Employs</strong></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- /Stats Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Clients</h2>
                <p>Check our Clients</p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }
            </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('front_assets') }}/images/home/clients/client-1.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front_assets') }}/images/home/clients/client-2.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front_assets') }}/images/home/clients/client-3.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front_assets') }}/images/home/clients/client-4.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front_assets') }}/images/home/clients/client-5.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front_assets') }}/images/home/clients/client-6.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front_assets') }}/images/home/clients/client-7.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front_assets') }}/images/home/clients/client-8.png"
                                class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>
        <!-- /Clients Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Here We Are</h2>
                <p>OUR TEAM</p>
            </div><!-- End Section Title -->

            <div class="container">

                <!-- New Team Member at Top Center -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
                        <div class="team-member text-center">
                            <div class="member-img">
                                <img src="{{ asset('front_assets') }}/images/home/team/chairman2.jpg"
                                    class="img-fluid mx-auto" alt=""
                                    style="width: 500px; height: 500px; object-fit: cover;">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>A. S. M. Salahuddin</h4>
                                <span><b>Chairman</b> of Insus Group</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member text-center">
                            <div class="member-img">
                                <img src="{{ asset('front_assets') }}/images/home/team/md3.jpeg"
                                    class="img-fluid mx-auto" alt=""
                                    style="width: 500px; height: 500px; object-fit: cover;">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Asraful Islam</h4>
                                <span><b>Managing Director</b> of Insus Group</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Row with 4 Team Members -->
                <div class="row justify-content-center mb-4 gy-4 mt-4">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img style="width: 400px; height: 400px; object-fit: cover;"
                                    src="{{ asset('front_assets') }}/images/home/team/d.jpg" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Md. Abdul Halim</h4>
                                <span><b>Director</b> of Insus Group</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img style="width: 400px; height: 400px; object-fit: cover;"
                                    src="{{ asset('front_assets') }}/images/home/team/projectmanager.jpg"
                                    class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Md. Monowar Alam</h4>
                                <span><b>Director</b> of Insus Group</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <!--<img style="width: 400px; height: 400px; object-fit: cover;" src="{{ asset('front_assets') }}/images/home/team/pd1.jpg" class="img-fluid" alt="">-->
                                <img style="width: 400px; height: 400px; object-fit: cover;"
                                    src="{{ asset('front_assets') }}/images/home/team/muslim.png" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <!--<h4>Md. Rasel Ahmed</h4>-->
                                <span><b>Project Director</b> of Insus Group</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                        <div class="team-member">
                            <div class="member-img">
                                <img style="width: 400px; height: 400px; object-fit: cover;"
                                    src="{{ asset('front_assets') }}/images/home/team/pd4.png" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>SYED SHAFIQUL HAQU</h4>
                                <span><b>Project Director</b> of Insus Group</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third Row with 2 Team Members -->
                <div class="row justify-content-center mb-4 gy-4 mt-4">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img style="width: 400px; height: 400px; object-fit: cover;"
                                    src="{{ asset('front_assets') }}/images/home/team/coo3.png" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href="https://www.facebook.com/share/15dRqPfADx/"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Eng. Md. Rubel</h4>
                                <span><b>Chief Operating Officer</b> of Insus Group</span>
                            </div>
                        </div>
                    </div>

                    <!--  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">-->
                    <!--    <div class="team-member">-->
                    <!--      <div class="member-img">-->
                    <!--        <img style="width: 400px; height: 400px; object-fit: cover;" src="{{ asset('front_assets') }}/images/home/team/cto.jpg" class="img-fluid" alt="">-->
                    <!--        <div class="social">-->
                    <!--          <a href=""><i class="bi bi-twitter-x"></i></a>-->
                    <!--          <a href=""><i class="bi bi-facebook"></i></a>-->
                    <!--          <a href=""><i class="bi bi-instagram"></i></a>-->
                    <!--          <a href=""><i class="bi bi-linkedin"></i></a>-->
                    <!--        </div>-->
                    <!--      </div>-->
                    <!--      <div class="member-info">-->
                    <!--        <h4>Mizanur Rahman</h4>-->
                    <!--        <span><b>Chief Technology Officer</b></span>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </div>-->
                    <!--</div>-->

                    <!-- Fourth Row with 6 Team Members -->
                    <div class="row justify-content-center mb-4 gy-4 mt-4">
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="800">
                            <div class="team-member">
                                <div class="member-img">
                                    <img style="width: 400px; height: 400px; object-fit: cover;"
                                        src="{{ asset('front_assets') }}/images/home/team/muslim.png" class="img-fluid"
                                        alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Shahadat Hossain</h4>
                                    <span><b>Software Engineer C#</b></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="900">
                            <div class="team-member">
                                <div class="member-img">
                                    <img style="width: 400px; height: 400px; object-fit: cover;"
                                        src="{{ asset('front_assets') }}/images/home/team/muslim.png" class="img-fluid"
                                        alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Shamim Hossain</h4>
                                    <span><b>Software Engineer C#</b></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="1000">
                            <div class="team-member">
                                <div class="member-img">
                                    <img style="width: 400px; height: 400px; object-fit: cover;"
                                        src="{{ asset('front_assets') }}/images/home/team/muslim.png" class="img-fluid"
                                        alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Ariyan Alvi</h4>
                                    <span><b>Software Engineer PHP</b></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="1100">
                            <div class="team-member">
                                <div class="member-img">
                                    <img style="width: 400px; height: 400px; object-fit: cover;"
                                        src="{{ asset('front_assets') }}/images/home/team/muslim.png" class="img-fluid"
                                        alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Shiblu Mahadhi </h4>
                                    <span><b>Software Engineer Laravel</b></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="1200">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ asset('front_assets') }}/images/home/team/moslem-woman.png"
                                        class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Mansura Rahman Safa</h4>
                                    <span><b>Software Engineer React</b></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="1300">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ asset('front_assets') }}/images/home/team/moslem-woman.png"
                                        class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Urmi Khandakar</h4>
                                    <span><b>Software Engineer React</b></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </section><!-- /Team Section -->


        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220.43090461343894!2d90.42365468264725!3d23.801582379891205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7125110b24f%3A0xaf34571b501f1c7e!2sNational%20Medical%20Centre%20Ltd.!5e1!3m2!1sen!2sbd!4v1736694019806!5m2!1sen!2sbd"
                        frameborder="0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>House No. 9 (5th floor), Road 8 , Baridhara J Block, Dhaka 1212</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+8801335084680, 01611175709</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>insusgroup@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <!-- <div class="col-lg-8">
                                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                                          <div class="row gy-4">

                                            <div class="col-md-6">
                                              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                            </div>

                                            <div class="col-md-6 ">
                                              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                            </div>

                                            <div class="col-md-12">
                                              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                            </div>

                                            <div class="col-md-12">
                                              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                            </div>

                                            <div class="col-md-12 text-center">
                                              <div class="loading">Loading</div>
                                              <div class="error-message"></div>
                                              <div class="sent-message">Your message has been sent. Thank you!</div>

                                              <button type="submit">Send Message</button>
                                            </div>

                                          </div>
                                        </form>
                                      </div> -->
                    <!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

        <!-- Call To Action Section -->
        <!-- <section id="call-to-action" class="call-to-action section dark-background">

                                  <img src="{{ asset('front_assets') }}/images/home/cta-bg.jpg" alt="">

                                  <div class="container">
                                    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                                      <div class="col-xl-10">
                                        <div class="text-center">
                                          <h3>Call To Action</h3>
                                          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                          <a class="cta-btn" href="#">Call To Action</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </section> -->
        <!-- /Call To Action Section -->

    </main>
    <!-- Newsletter Section End -->
@endsection()
