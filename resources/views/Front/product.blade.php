@extends('Front.layouts.master')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

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

  <section class="page-title page-title-9" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
      <div class="bg-section">
        <img src="{{ asset('assets/front') }}/assets/images/page-titles/9.jpg" alt="Background" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 offset-lg-3">
            <div class="title text-center">
              <h1 class="title-heading">products</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="breadcrumb-wrap">
      <div class="container">
        <ol class="breadcrumb d-flex">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="">company</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </ol>
      </div>
    </div>
  </section>

  <section class="shop" id="shop">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-9">
          <div class="row">
            <div class="col-12">
              <div class="shop-options">
                <div class="products-show">
                  <p>showing 1:9 of 45 products</p>
                </div>
                <div class="products-sort">
                  <div class="select-holder">
                    <select>
                      <option selected="" class="sorting" data-sorting_type="asc" data-column_name="id" value="Default">
                        sort by latest
                      </option>
                      <option value="Larger">Newest Items</option>
                      <option value="Larger">oldest Items</option>
                      <option value="Larger">Hot Items</option>
                      <option value="Small">Highest Price</option>
                      <option value="Medium">Lowest Price</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">



            {{-- <div class="col-12 col-md-6 col-lg-4 form-search alldata"> --}}
            @foreach ($products as $product)

            <div class="col-12 col-md-6 col-lg-4 form-search">
              <div class="product-item" data-hover="">
                <div class="product-img-wrap">
                  <div class="product-img">
                    <img
                      src="{{ asset('public/Image') .'/'. $product->image }}"
                      alt="Product"
                    />
                    <!-- <a class="add-to-cart" href="#"
                      ><i class="fas fa-shopping-cart"></i> add to cart</a
                    ><span class="badge d-none"></span> -->
                  </div>
                </div>

                <div class="product-content">
                  <div class="product-title">
                    <a href="{{ route('get.product', $product->id) }}">{{ $product->title_en }}</a>
                  </div>

                  <!-- <div class="product-price"><span>$445.00</span></div> -->
                </div>
              </div>
            </div>
            @endforeach

              <div class="swiper-slide">
                  <div class="products-2">

                  </div>
              </div>



            {{-- </div> --}}
          </div>

          <div class="row">
            <div class="col-12 clearfix text--center mt-3">
              <ul class="pagination">
                <li><a class="current" href="shop-products.html">1</a></li>
                <li><a href="shop-products.html">2</a></li>
                <li>
                  <a href="#" aria-label="Next"
                    ><i class="energia-arrow-right"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-3">
          <div class="sidebar sidebar-shop">
            <div class="widget widget-categories">
              <div class="widget-title">
                <h5>categories</h5>
              </div>
              @foreach ($categories as $category)

              <div class="widget-content">
                <ul class="list-unstyled">
                  <li>
                    <input type="checkbox" class="form-check-input"/>
                    <label for="">{{ $category->title_en }}</label>
                    <span>{{ $category->product->count() }}</span>
                  </li>
                </ul>
              </div>

              @endforeach

            </div>

            <div class="widget widget-search">
              <div class="widget-title">
                <h5>search</h5>
              </div>
              <div class="widget-content">
                <form>
                  <div class="input-group">
                    <input
                      class="form-control"
                      type="search"
                      placeholder="Search ..."
                      name="search"
                      id="search"
                    /><span class="input-group-btn">
                      <button class="btn" type="button">
                        <i class="energia-search-Icon"></i></button
                    ></span>
                  </div>
                </form>
              </div>
            </div>

            <div class="widget widget-recent-products">
              <div class="widget-title">
                <h5>products</h5>
              </div>

              @foreach ($related as $item)

              <div class="widget-content">
                <div class="product">
                  <div class="product-img">
                    <img
                      src="{{ asset('public/Image') .'/'. $item->image }}"
                      alt="product"
                    />
                  </div>
                  <div class="product-desc">
                    <div class="product-title">
                      <a href="shop-single.html">{{ $item->title_en }}</a>
                    </div>
                    <!-- <div class="product-meta"><span>$445.00</span></div> -->
                  </div>
                </div>
              </div>

              @endforeach

            </div>

            <!-- <div class="widget widget-filter">
              <div class="widget-title">
                <h5>filter by price</h5>
              </div>
              <div class="widget-content clearfix">
                <div id="slider-range"></div>
                <p class="slider-mount">
                  <label for="amount">Price: </label>
                  <input id="amount" type="text" readonly="" /><a
                    class="btn-filter"
                    href="#"
                    >Filter</a
                  >
                </p>
              </div>
            </div> -->

            <div class="widget widget-tags">
              <div class="widget-title">
                <h5>Tags</h5>
              </div>
              <div class="widget-content">

                @foreach ($products as $product)
                    <a href="shop-products.html">{{ $product->tags }}</a>
                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
