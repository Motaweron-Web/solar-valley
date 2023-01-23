<!DOCTYPE html>
<html dir="ltr" lang="ar">
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

{{--        @if (Route::currentRouteName() == 'home')--}}
{{--            @include('Front.layouts.header_home')--}}
{{--        @else--}}
            @include('Front.layouts.header')
{{--        @endif--}}

        <div class="module-content module-search-warp">
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                            <form class="form-search">
                                <input
                                    class="form-control search"
                                    type="text"
                                    placeholder="Search ..."
                                    name="search"
                                    id="search"
                                />
                                <button></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
        </div>
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
    <!-- slick plugin -->
    <script src="{{ asset('assets/front/') }}/assets/js/slick.min.js"></script>
    <script src="{{ asset('assets/front/') }}/assets/js/plugin.js"></script>

    <script src="{{ asset('assets/front/') }}/assets/js/main.js"></script>

  <script>
      $('.search').on('keyup', function () {
          $value = $(this).val();

          $.ajax({
              type: 'get',
              url: '{{ route('product-search') }}',
              data: {'search': $value},
              beforeSend: function (data) {
                  $('.product-search').html('<h4 class="error">LOADING...</h4>');
              },
              success: function (data) {
                  // alert(data)
                  $('.product-search').html(data);
              },
              error: function (data) {
                  $('.product-search').html('<h2 class="error">NO PRODUCT FOUND</h2>');
              }
          });
      });
  </script>
  </body>
</html>
