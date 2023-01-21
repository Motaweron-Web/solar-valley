@extends('Front.layouts.master')

@section('content')

  <section class="page-title page-title-10" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
      <div class="bg-section">
        <img src="{{ asset('assets/front') }}/assets/images/page-titles/10.jpg" alt="Background" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5">
            <div class="title">
              <div class="title-list">
                <div class="icon">
                  <i class="flaticon-040-green-energy"></i>
                </div>
                <div class="icon"><i class="flaticon-020-factory"></i></div>
                <div class="icon">
                  <i class="flaticon-031-nuclear-plant"></i>
                </div>
              </div>
              <h1 class="title-heading">our services</h1>
              <p class="title-desc">
                We offer products, solutions, and services across the entire
                energy value chain. We support our customers on their way to
                a more sustainable future.
              </p>
              <div class="title-action">
                <a
                  class="btn btn--primary btn--inversed"
                  href="page-contact.html"
                >
                  get started<i class="energia-arrow-right"></i></a
                ><a
                  class="btn btn--bordered btn--white"
                  href="page-about.html"
                  >explore our plans</a
                >
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="breadcrumb-wrap">
              <ol class="breadcrumb breadcrumb-light d-flex">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Services
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services services-4 bg-grey" id="services-4">
    <div class="container">
      <div class="heading heading-3 text-center">
        <div class="row">
          <div class="col-12 col-lg-6 offset-lg-3">
            <p class="heading-subtitle">
              Energize Society With Sustainable Energy!
            </p>
            <h2 class="heading-title">
              A Leading Supplier Of Solar Materials For Manufacturers,
              Installers & Contractors.
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($services as $service)
        <div class="col-12 col-md-6 col-lg-4">
          <div class="service-panel">
            <div class="service-icon">
              <i class="flaticon-004-solar-panel"></i>
            </div>
            <div class="service-content">
              <h4>
                <a href="page-services.html"
                  >{{ $service->title_en }}<br />services</a
                >
              </h4>
              <p>
                {{ $service->desc_en }}
              </p>
              <!-- <ul class="list-unstyled advantages-list">
                <li>cleaning of inverter</li>
                <li>perform shading tests</li>
                <li>90 days repairs warranty</li>
              </ul>
              <a class="btn btn--secondary" href="services-turbines.html"
                >read more <i class="energia-arrow-right"></i
              ></a> -->
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>

  <section
    class="features features-2 bg-overlay bg-overlay-theme2"
    id="features-2"
  >
    <div class="bg-section">
      <img src="{{ asset('assets/front') }}/assets/images/background/2.jpg" alt="Background" />
    </div>
    <div class="container">
      <div class="heading heading-2 heading-light heading-light2">
        <div class="row">
          <div class="col-12 col-lg-5">
            <p class="heading-subtitle">
              Sustainable, Reliable & Affordable Energy!
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-5">
            <h2 class="heading-title">
              Providing Value To Our ClientsThrough Ongoing Product &
              Innovation.
            </h2>
          </div>
          <div class="col-12 col-lg-6 offset-lg-1">
            <p class="heading-desc">
              While improving the yield and performance of solar energy
              products, our PV industry experience enables us to provide
              in-depth material sourcing, financing and supply chain
              expertise for every step.
            </p>
            <p class="heading-desc">
              Raw polycrystalline silicon for PV manufacturing. Offered in
              various grades and formats including chunks, chips, powder and
              ingot.
            </p>
            <div class="actions-holder">
              <a
                class="btn btn--primary btn--inversed"
                href="page-contact.html"
              >
                get started<i class="energia-arrow-right"></i></a
              ><a
                class="btn btn--bordered btn--white"
                href="page-about.html"
                >explore our plans</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="feature-panel-holder" data-hover="">
            <div class="feature-panel">
              <div class="feature-icon">
                <i class="flaticon-024-energy"></i>
              </div>
              <div class="feature-content">
                <h4>Save Your Money</h4>
                <p>
                  Save money on utilities or increase the value of your home
                  by installing solar panels as a great option.
                </p>
              </div>
              <a href="page-about.html"
                ><i class="energia-arrow-right"></i>
                <span>explore more</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="feature-panel-holder" data-hover="">
            <div class="feature-panel">
              <div class="feature-icon">
                <i class="flaticon-028-greenhouse"></i>
              </div>
              <div class="feature-content">
                <h4>Home Is Energy</h4>
                <p>
                  Everyday the sun provides us with abundance of free energy
                  by placing solar panels on your roof.
                </p>
              </div>
              <a href="page-about.html"
                ><i class="energia-arrow-right"></i>
                <span>explore more</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="feature-panel-holder" data-hover="">
            <div class="feature-panel">
              <div class="feature-icon">
                <i class="flaticon-026-world"></i>
              </div>
              <div class="feature-content">
                <h4>Consult &amp; Planning</h4>
                <p>
                  Our remote industrial solar systems are designed to
                  reliably power our clients critical.
                </p>
              </div>
              <a href="page-about.html"
                ><i class="energia-arrow-right"></i>
                <span>explore more</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="feature-panel-holder" data-hover="">
            <div class="feature-panel">
              <div class="feature-icon">
                <i class="flaticon-008-plant"></i>
              </div>
              <div class="feature-content">
                <h4>Certified Engineers</h4>
                <p>
                  Our sales engineers on our staff have experience and can
                  design any complete solar system.
                </p>
              </div>
              <a href="page-about.html"
                ><i class="energia-arrow-right"></i>
                <span>explore more</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="more-features more-features-3">
            <p>
              Sustainable, reliable & affordable energy systems,
              <a href="page-services.html">Find Your Solution Now! </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="contact-panel contact-panel-2">
        <div class="row">
          <div class="col-12 col-lg-5 img-card-holder">
            <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
              <div class="bg-section">
                <img src="{{ asset('assets/front') }}/assets/images/contact/2.jpg" alt="image" />
              </div>
              <div class="card-content">
                <div class="content-top">
                  <p>
                    As a world wide distributor of solar supplies we
                    endeavor provide fast and knowledgeable service, we can
                    get all the materials you need by sea or air.
                  </p>
                  <a href="page-contact.html"
                    ><i class="energia-arrow-right"></i>global office map</a
                  >
                </div>
                <div class="content-bottom">
                  <ul class="list-unstyled contact-infos">
                    <li class="contact-info">
                      <i class="energia-phone-Icon"></i>
                      <p>
                        Emergency Line:
                        <a href="tel:123-456-7890">(002) 01061245741</a>
                      </p>
                    </li>
                    <li class="contact-info">
                      <i class="energia-location-Icon"></i>
                      <p>
                        Location:
                        <a
                          href="../cdn-cgi/l/email-protection.html#c5acaba3aa85a0aba0b7a2aca4eba6aaa8"
                          >Brooklyn, New York, USA
                        </a>
                      </p>
                    </li>
                    <li class="contact-info">
                      <i class="energia-clock-Icon"></i>
                      <p>Mon - Fri: 8:00 am - 7:00 pm</p>
                    </li>
                  </ul>
                  <a class="btn btn--white" href="page-contact.html"
                    >contact us <i class="energia-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-7">
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
                        </button></a>
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
    </div>
  </section>

  <section class="testimonial testimonial-3 bg-overlay bg-overlay-white2">
    <div class="bg-section">
      <img
        src="{{ asset('assets/front') }}/assets/images/background/wavy-pattern.png"
        alt="background"
      />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-4">
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
                    <img src="{{ asset('assets/front') }}/assets/images/counters/1.jpg" alt="image" />
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
        {{-- <div class="col-12 col-lg-7 offset-lg-1">
          <div class="heading heading-14">
            <p class="heading-subtitle">Customers Doing it Their Way!</p>
          </div>
          <div class="testimonials-holder">
            <div
              class="carousel owl-carousel testimonials-carousel"
              data-slide="1"
              data-slide-rs="1"
              data-autoplay="true"
              data-nav="false"
              data-dots="false"
              data-space="0"
              data-loop="false"
              data-speed="800"
            >
              <div class="testimonial-panel testimonial-panel-2">
                <div class="testimonial-body">
                  <div class="testimonial-content">
                    <p>
                      Energia has been absolutely the best to work with.
                      Their attention to detail and customer support was
                      amazing!! They were fantastic through the entire
                      purchase process. Had lots of questions and they were
                      patient. When my system arrived, it was well packed.
                    </p>
                  </div>
                </div>
              </div>
              <div class="testimonial-panel testimonial-panel-2">
                <div class="testimonial-body">
                  <div class="testimonial-content">
                    <p>
                      Energia has been absolutely the best to work with.
                      Their attention to detail and customer support was
                      amazing!! They were fantastic through the entire
                      purchase process. Had lots of questions and they were
                      patient. When my system arrived, it was well packed.
                    </p>
                  </div>
                </div>
              </div>
              <div class="testimonial-panel testimonial-panel-2">
                <div class="testimonial-body">
                  <div class="testimonial-content">
                    <p>
                      Energia has been absolutely the best to work with.
                      Their attention to detail and customer support was
                      amazing!! They were fantastic through the entire
                      purchase process. Had lots of questions and they were
                      patient. When my system arrived, it was well packed.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-thumbs">
            <div class="testimonial-thumb active" data-hover="">
              <div class="thumb-img">
                <img
                  src="{{ asset('assets/front') }}/assets/images/testimonial/1.jpg"
                  alt="Testimonial Author"
                />
              </div>
              <div class="thumb-body">
                <h6>sami wade</h6>
                <p>promina</p>
              </div>
            </div>
            <div class="testimonial-thumb" data-hover="">
              <div class="thumb-img">
                <img
                  src="{{ asset('assets/front') }}/assets/images/testimonial/2.jpg"
                  alt="Testimonial Author"
                />
              </div>
              <div class="thumb-body">
                <h6>john peter</h6>
                <p>optima inc</p>
              </div>
            </div>
            <div class="testimonial-thumb" data-hover="">
              <div class="thumb-img">
                <img
                  src="{{ asset('assets/front') }}/assets/images/testimonial/3.jpg"
                  alt="Testimonial Author"
                />
              </div>
              <div class="thumb-body">
                <h6>sony blake</h6>
                <p>koira ind</p>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
@endsection
