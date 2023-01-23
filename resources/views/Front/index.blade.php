@extends('Front.layouts.master')

@section('content')

    <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <form class="form-search">
                            <input
                                class="form-control"
                                type="text"
                                placeholder="type words then enter"
                            />
                            <button></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
    </div>

    <section class="slider slider-2" id="slider-2">
        <div class="container-fluid pe-0 ps-0">
            <div
                class="slider-carousel owl-carousel carousel-navs carousel-dots"
                data-slide="1"
                data-slide-rs="1"
                data-autoplay="true"
                data-nav="true"
                data-dots="true"
                data-space="0"
                data-loop="true"
                data-speed="800"
            >
                <div class="slide bg-overlay bg-overlay-dark-slider-2">
                    <div class="bg-section">
                        <img src="{{ asset('assets/front') }}/assets/images/sliders/3.jpg" alt="Background"/>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="slide-content">
                                    <h1 class="slide-headline">
                                        sustainable &amp; reliable energy!
                                    </h1>
                                    <p class="slide-desc">
                                        As a world wide distributor of solar supplies we
                                        endeavor provide fast and knowledgeable service, we can
                                        get you materials by sea or air.
                                    </p>
                                    <div class="slide-action">
                                        <a class="btn btn--primary" href="{{ route('service') }}">
          <div
            class="slider-carousel owl-carousel carousel-navs carousel-dots"
            data-slide="1"
            data-slide-rs="1"
            data-autoplay="true"
            data-nav="true"
            data-dots="true"
            data-space="0"
            data-loop="false"
            data-speed="800"
          >
            {{-- <div class="slide bg-overlay bg-overlay-dark-slider-2">
              <div class="bg-section">
                <img src="{{ asset('assets/front') }}/assets/images/sliders/3.jpg" alt="Background" />
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-7">
                    <div class="slide-content">
                      <h1 class="slide-headline">
                        sustainable &amp; reliable energy!
                      </h1>
                      <p class="slide-desc">
                        As a world wide distributor of solar supplies we
                        endeavor provide fast and knowledgeable service, we can
                        get you materials by sea or air.
                      </p>
                      <div class="slide-action">
                        <a class="btn btn--primary" href="{{ route('service') }}">
                          <span>our services</span
                          ><i class="energia-arrow-right"></i></a
                                        ><a
                                            class="btn btn--white justify-content-center"
                                            href="{{ route('about_us') }}"
                                        >more about us!</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="slide bg-overlay bg-overlay-dark-slider-2">
                    <div class="bg-section">
                        <img src="{{ asset('assets/front') }}/assets/images/sliders/6.jpg" alt="Background"/>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="slide-content">
                                    <h1 class="slide-headline">
                                        shaping future of solar energy!
                                    </h1>
                                    <p class="slide-desc">
                                        As a world wide distributor of solar supplies we
                                        endeavor provide fast and knowledgeable service, we can
                                        get you materials by sea or air.
                                    </p>
                                    <div class="slide-action">
                                        <a class="btn btn--primary" href="page-services.html">
                          <span>our services</span
                          ><i class="energia-arrow-right"></i></a
                                        ><a
                                            class="btn btn--white justify-content-center"
                                            href="page-about.html"
                                        >more about us!</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
              </div>
            </div> --}}

            @foreach ($settings as $setting)

            <div class="slide bg-overlay bg-overlay-dark-slider-2">
              <div class="bg-section">
                <img src="{{ asset('assets/front') }}/assets/images/sliders/6.jpg" alt="Background" />
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-7">
                    <div class="slide-content">
                      <h1 class="slide-headline">
                        {{ $setting->title_en }}
                      </h1>
                      <p class="slide-desc">
                        As a world wide distributor of solar supplies we
                        endeavor provide fast and knowledgeable service, we can
                        get you materials by sea or air.
                      </p>
                      <div class="slide-action">
                        <a class="btn btn--primary" href="{{ route('service') }}">
                          <span>our services</span
                          ><i class="energia-arrow-right"></i></a
                        ><a
                          class="btn btn--white justify-content-center"
                          href="{{ route('about_us') }}"
                          >more about us!</a
                        >
                      </div>
                    </div>
                </div>
            </div>
            @endforeach

          </div>
        </div>
    </section>

    <section
        class="features-bar bg-overlay bg-overlay-theme3"
        id="featuresBar-1"
    >
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/3.jpg" alt="background"/>
        </div>
        <div class="container">
            <div class="row g-0 features-holder">
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-024-energy"></i>
                            <h5>Save Your Money</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-009-ecology-1"></i>
                            <h5>Five Stars Service</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-028-greenhouse"></i>
                            <h5>Home Is Energy</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-026-world"></i>
                            <h5>Consultation &amp; Planning</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-038-ecology"></i>
                            <h5>Certified Engineers</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-003-fuel-1"></i>
                            <h5>Unbeatable Pricing</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="more-features more-features-2">
                    <p>Discover independence through the power of solar</p>
                    <a class="btn btn--bordered btn--white" href="page-pricing.html"
                    >explore our plans</a
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="services services-2 bg-grey" id="services-2">
        <div class="container">
            <div class="heading heading-2">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="heading-title">
                            A Leading Supplier Of Solar Materials For Manufacturers
                            Installers & Contractors.
                        </h2>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="heading-desc">
                            Today, our company is one of the most important PV suppliers
                            in the Middle East region, Africa. Our sales offices and
                            warehouses include PV industry experience enables us to
                            provide in-depth material sourcing and supply chain expertise
                            for every step of production and installation process.
                        </p>
                        <div class="actions-holder">
                            <a class="btn btn--primary" href="page-about.html">
                                read more<i class="energia-arrow-right"></i></a
                            ><a
                                class="btn btn--bordered btn--white"
                                href="page-services.html"
                            >find your solution</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div
              class="carousel owl-carousel carousel-dots"
              data-slide="3"
              data-slide-rs="1"
              data-autoplay="true"
              data-nav="false"
              data-dots="true"
              data-space="30"
              data-loop="true"
              data-speed="800"
            >
              <div>
                <div class="service-panel services-panel-2">
                  <div class="service-icon">
                    <i class="flaticon-004-solar-panel"></i>
                  </div>
                  <div class="service-content">
                    <h4>
                      <a href="services-turbines.html">solar panels<br />services</a>
                    </h4>
                    <p>
                      The great thing about solar panels is that they do not
                      require a lot of maintenance. However, still important to
                      get them checked regularly
                    </p>
                    <ul class="list-unstyled advantages-list"></ul>
                    <a class="btn btn--secondary" href="services-turbines.html"
                      >read more <i class="energia-arrow-right"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div>
                <div class="service-panel services-panel-2">
                  <div class="service-icon">
                    <i class="flaticon-039-wind-mill"></i>
                  </div>
                  <div class="service-content">
                    <h4>
                      <a href="services-turbines.html"
                        >wind turbines<br />services</a
                      >
                    </h4>
                    <p>
                      Wind turbine is an expensive machine, we know very well how
                      important it is that your wind turbine is always up whenever
                      there is wind.
                    </p>
                    <ul class="list-unstyled advantages-list"></ul>
                    <a class="btn btn--secondary" href="services-turbines.html"
                      >read more <i class="energia-arrow-right"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div>
                <div class="service-panel services-panel-2">
                  <div class="service-icon">
                    <i class="flaticon-013-hydro-power"></i>
                  </div>
                  <div class="service-content">
                    <h4>
                      <a href="services-turbines.html"
                        >hydropower plants<br />services</a
                      >
                    </h4>
                    <p>
                      Hydropower systems are capital intensive assets can produce
                      a significant income provided operated and maintained on
                      high standard.
                    </p>
                    <ul class="list-unstyled advantages-list"></ul>
                    <a class="btn btn--secondary" href="services-turbines.html"
                      >read more <i class="energia-arrow-right"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div>
                <div class="service-panel services-panel-2">
                  <div class="service-icon">
                    <i class="flaticon-004-solar-panel"></i>
                  </div>
                  <div class="service-content">
                    <h4>
                      <a href="services-turbines.html"
                        >solar panels<br />services</a
                      >
                    </h4>
                    <p>
                      The great thing about solar panels is that they do not
                      require a lot of maintenance. However, still important to
                      get them checked regularly
                    </p>
                    <ul class="list-unstyled advantages-list"></ul>
                    <a class="btn btn--secondary" href="services-turbines.html"
                      >read more <i class="energia-arrow-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="row">
                <div class="col-12 col-lg-5 offset-lg-7">
                    <div class="more-services more-services-2">
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i
                            ><i class="fas fa-star"></i><i class="fas fa-star"></i
                            ><i class="fas fa-star"></i>
                        </div>
                        <p>
                            <a href="javascript:void(0)">99.9% customer satisfaction</a>
                            based on 750+ reviews and 6,154 completed projects
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about about-2" id="about-2">
        <div class="about-wrapper">
            <div class="video-wrapper">
                <div class="video video-2" id="video-2">
                    <div class="bg-section">
                        <img src="{{ asset('assets/front') }}/assets/images/sliders/3.jpg" alt="background"/>
      <section
        class="processes processes-1 bg-overlay bg-overlay-theme4"
        id="processes-1"
      >
        <div class="bg-section">
          <img
            src="{{ asset('assets/front') }}/assets/images/background/wavy-pattern.png"
            alt="Background"
          />
        </div>
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="block-right-holder">
              <div class="heading heading-light heading-light2">
                <p class="heading-subtitle">how it works!</p>
                <h2 class="heading-title">
                  Fueling The Transition To Renewable Power.
                </h2>
              </div>

              @foreach ($settings as $setting)

              <div class="counters-holder">
                <div class="counter counter-3">
                  <div class="counter-holder">
                    <div class="counter-num">
                      <span
                        class="counting"
                        data-counterup-nums="25"
                        data-counterup-beginat="12"
                        >{{ $setting->year_of_experince }}</span
                      >
                    </div>
                    <div class="counter-img">
                      <div class="bg-section">
                        <img src="{{ asset('assets/front') }}/assets/images/counters/1.jpg" alt="image" />
                      </div>
                      <i class="flaticon-020-factory"></i>

                    </div>
                    <!-- <a
                      class="popup-video btn-video btn-video-2"
                      href="https://www.youtube.com/watch?v=nrJtHemSPW4"
                    >
                      <i class="fas fa-play"></i
                    ></a> -->
                </div>

              </div>

              @endforeach


            </div>

            <div class="about-block-wrapper">
                <div class="about-block">
                    <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg">
                            Complete Commercial And Residential Solar Systems
                        </p>
                        <h2 class="heading-title">
                            The Pioneers World Of Solar And Renewable Energy!
                        </h2>
                        <p class="heading-desc">
                            Our solar programs encompass a broad range of material
                            sourcing, trade financing and inventory management services to
                            help customers become more profitable by optimizing working
                            capital and increasing liquidity.
                        </p>
                        <div class="signature-block">
                            <a class="btn btn--secondary" href="page-about.html"
                            >read more <i class="energia-arrow-right"></i
                                ></a>
                            <div class="signature-body">
                                <h6>michael brian</h6>
                                <p>co founder</p>
                                <img
                                    class="signature-img"
                                    src="{{ asset('assets/front') }}/assets/images/signature/1.png"
                                    alt="signature"
                                />
                            </div>
                        </div>
                        <div class="advantages-list-holder">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <p>
                                        How can we meet the growing demand for electricity while
                                        protecting our climate?
                                    </p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <ul class="list-unstyled advantages-list">
                                        <li>Reliabe and performance</li>
                                        <li>In-time manufacturing</li>
                                        <li>Solar material financing</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects projects-grid" id="projects-grid-1">
        <div class="container">
            <div class="heading heading-8">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">
                            Latest Products And Energy Supplies
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="carousel owl-carousel carousel-dots carousel-navs"
            data-slide="4"
            data-slide-rs="1"
            data-center="data-center"
            data-autoplay="true"
            data-nav="true"
            data-dots="true"
            data-space="30"
            data-loop="false"
            data-speed="800"
        >
            @foreach ($products as $product)

                <div>
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img">
{{--                                {{ dd() }}--}}
                                <a class="link" href="{{ route('get.product', $product->id) }}"></a
                                ><img
                                    src="{{ asset($product->images[0]) }}"
                                    alt="project image"
                                />
                            </div>

                            <div class="project-content">
                                <div class="project-title">
                                    <h4>
                                        <a href="{{ route('single') . $product->id }}"
                                        >{{ $product->title_en }}</a
                                        >
                                    </h4>
                                </div>
                                <!-- <div class="project-cat">
                                  <a href="projects-standard.html">finance</a
                                  ><a href="projects-standard.html">supply chain</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="projects-load-more">
                        <a class="btn btn--secondary" href="shop-products.html"
                        >explore all products <i class="energia-arrow-right"></i
                            ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="processes processes-1 bg-overlay bg-overlay-theme4"
        id="processes-1"
    >
        <div class="bg-section">
            <img
                src="{{ asset('assets/front') }}/assets/images/background/wavy-pattern.png"
                alt="Background"
            />
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="block-right-holder">
                    <div class="heading heading-light heading-light2">
                        <p class="heading-subtitle">how it works!</p>
                        <h2 class="heading-title">
                            Fueling The Transition To Renewable Power.
                        </h2>
                    </div>
                    <div class="counters-holder">
                        <div class="counter counter-3">
                            <div class="counter-holder">
                                <div class="counter-num">
                      <span
                          class="counting"
                          data-counterup-nums="25"
                          data-counterup-beginat="12"
                      >25</span
                      >
                                </div>
                                <div class="counter-img">
                                    <div class="bg-section">
                                        <img src="{{ asset('assets/front') }}/assets/images/counters/1.jpg"
                                             alt="image"/>
                                    </div>
                                    <i class="flaticon-020-factory"></i>
                                </div>
                            </div>
                            <div class="counter-desc">
                                <p>Years Of Experience In The Solar Industry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="processes-holder">
                    <div
                        class="carousel owl-carousel carousel-dots process-content-carousel"
                        data-slide="1"
                        data-slide-rs="1"
                        data-autoplay="true"
                        data-nav="false"
                        data-dots="true"
                        data-space="0"
                        data-loop="false"
                        data-speed="800"
                    >
                        <div>
                            <div class="process-panel">
                                <p class="process-number">01.</p>
                                <div class="process-body">
                                    <div class="process-content">
                                        <h5>we design &amp; ship</h5>
                                        <p>
                                            We collaborate with you to design and deliver a system
                                            that meets your utility usage and needs, We also
                                            selecting equipment from 66+ manufacturers so you do
                                            not have to be worried or compromise with your money
                                            or with your effort.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="process-panel">
                                <p class="process-number">02.</p>
                                <div class="process-body">
                                    <div class="process-content">
                                        <h5>contract or install</h5>
                                        <p>
                                            Whether you want to install the system or hire local
                                            contractors, managing installation yourself ensures
                                            the fastest return on your solar investment.We deliver
                                            a system that meets your utility usage and needs, We
                                            also selecting equipment from.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="process-panel">
                                <p class="process-number">03.</p>
                                <div class="process-body">
                                    <div class="process-content">
                                        <h5>power your home</h5>
                                        <p>
                                            Even after your system is installed and operating, you
                                            can always count on Wholesale Solar to provide the
                                            support you need, just contact us at any time, and we
                                            will be there for you. Whether you want to install the
                                            system or hire local contractors.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="images-holder">
                        <div
                            class="carousel owl-carousel process-image-carousel"
                            data-slide="1"
                            data-slide-rs="1"
                            data-autoplay="true"
                            data-drag="false"
                            data-nav="false"
                            data-dots="false"
                            data-space="0"
                            data-loop="false"
                            data-speed="800"
                        >
                            <img src="{{ asset('assets/front') }}/assets/images/processes/1.jpg" alt="process"/><img
                                src="assets/images/processes/2.jpg"
                                alt="process"
                            /><img src="{{ asset('assets/front') }}/assets/images/processes/3.jpg" alt="process"/>
                        </div>
                        <div class="processes-panel">
                            <h3 class="panel-title">
                                Commercial, Residential And Industrial Solar Systems!
                            </h3>
                            <p class="panel-desc">
                                Our presence ensures timeliness, cost efficiency &
                                compliance adherence!
                            </p>
                            <a href="page-contact.html"
                            >schedule A Visit <i class="energia-arrow-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact contact-2" style="margin-top: 250px" id="contact-2">
        <div class="contact-overlay bg-overlay bg-overlay-theme5">
            <div class="bg-section">
                <img src="{{ asset('assets/front') }}/assets/images/background/4.jpg" alt="background"/>
            </div>
        </div>
        <div class="container">
            <div class="contact-panel contact-panel-3">
                <div class="heading heading-light heading-10">
                    <h2 class="heading-title">
                        Provide Value To Our ClientsThrough Ongoing Product &
                        Innovation.
                    </h2>
                    <p class="heading-desc">
                        We offer products, solutions, and services across the entire
                        energy value chain. We support our customers on their way to a
                        more sustainable future.
                    </p>
                    <div class="contact-action contact-action-2">
                        <a class="btn btn--white" href="page-about.html"
                        >learn more <i class="energia-arrow-right"></i
                            ></a>
                    </div>
                    <div class="contact-quote contact-quote-2">
                        <i class="flaticon-040-green-energy"></i>
                        <div class="quote-body">
                            <p>
                                As a world wide distributor of solar supplies we endeavor
                                provide fast and knowledgeable service, we can get all the
                                materials you need by sea or air.
                            </p>
                            <a href="page-contact.html"
                            ><i class="energia-arrow-right"></i>global office map</a
                            >
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-body">
                        <h5 class="card-heading">Request A Quote</h5>
                        <p class="card-desc">
                            We take great pride in everything that we do, control over
                            products allows us to ensure our customers receive the best
                            quality service.
                        </p>
                        <div class="col-12">
                            <a href="{{ route('request') }}">
                                <button class="btn btn--secondary w-100" type="submit">
                                    Send Request <i class="energia-arrow-right"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="contact-result"></div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
