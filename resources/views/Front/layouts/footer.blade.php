<footer class="footer footer-1">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-2">
            <div class="footer-widget widget-links">
              <div class="footer-widget-title">
                <h5>company</h5>
              </div>
              <div class="widget-content">
                <ul>
                  <li><a href="{{ route('about_us') }}">About Us</a></li>
                  <li><a href="{{ route('product') }}">Our Product</a></li>
                  <li><a href="{{ route('contact') }}">contact</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-2">
            <div class="footer-widget widget-links">
              <div class="footer-widget-title">
                <h5>Services</h5>
              </div>
              <div class="widget-content">
                <!-- Get 5 Latest for Model Services -->
                @php
                    $services = App\Models\Service::latest()->take(5)->get();
                @endphp
                @foreach ($services as $service)

                    <ul>
                    <li><a href="services-turbines.html">{{ $service->title_en }}</a></li>
                    </ul>

                @endforeach
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-6 col-lg-5">
            <div class="footer-widget widget-links widget-icon">
              <div class="footer-widget-title">
                <h5>support</h5>
              </div>
              <div class="widget-content">
                <ul>
                  <li>
                    <a href="page-contact.html">Terms & Conditions</a>
                  </li>
                  <li><a href="page-contact.html">Shipping Policy</a></li>
                  <li><a href="page-contact.html">Delivery Tips</a></li>
                  <li><a href="page-contact.html">Returns</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3">
            <div class="footer-widget widget-contact">
              <div class="widget-content">
                <ul>
                  <li class="phone">
                    +2<a href="tel:+01061245741"> 01061245741</a>
                  </li>
                  <li class="email">
                    Email:
                    <a
                      href="../cdn-cgi/l/email-protection.html#4f262129200f2a212a3d28262e612c2022"
                      ><span
                        class="__cf_email__"
                        data-cfemail="e1888f878ea1848f8493868880cf828e8c"
                        >[email&#160;protected]</span
                      ></a
                    >
                  </li>
                  <li class="address">
                    <p>
                      2307 Beverley Rd Brooklyn, New York 11226 United
                      States.
                    </p>
                  </li>
                  <li class="directions">
                    <a href="page-contact.html"
                      ><i class="energia-location-Icon"></i>get
                      directions</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="footer-copyright">
              <div class="copyright">
                <span
                  >&copy; 2021 energia by
                  <a href="https://1.envato.market/kP9BV"> Zytheme.com</a>.
                  all rights reserved.
                </span>
                <ul class="list-unstyled social-icons">
                  <li>
                    <a class="share-facebook" href="javascript:void(0)"
                      ><i class="energia-facebook"></i>facebook
                    </a>
                  </li>
                  <li>
                    <a class="share-twitter" href="javascript:void(0)"
                      ><i class="energia-twitter"></i>twitter</a
                    >
                  </li>
                  <li>
                    <a class="share-youtube" href="javascript:void(0)"
                      ><i class="energia-youtube"></i>youtube</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
