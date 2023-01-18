<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  @include('Front.layouts.head')
  <body>
    <div class="preloader">
      <div class="dual-ring"></div>
    </div>

    <noscript>
      <iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-MDF43VH"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe>
    </noscript>

    <div class="wrapper clearfix" id="wrapperParallax">

        @if (Route::currentRouteName() == 'home')
            @include('Front.layouts.header_home')
        @else
            @include('Front.layouts.header')
        @endif


      @yield('content')

     @include('Front.layouts.footer')

      <div class="back-top" id="back-to-top" data-hover="">
        <i class="energia-arrow-up"></i>
      </div>
    </div>

    <script
      data-cfasync="false"
      src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="{{ asset('assets/front/') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/front/') }}/assets/js/vendor.js"></script>
    <script src="{{ asset('assets/front/') }}/assets/js/functions.js"></script>
  </body>
</html>
