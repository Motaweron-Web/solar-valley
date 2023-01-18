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

  <section class="page-title page-title-blank bg-white" id="page-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="d-none">
            High Efficiency Solar Cells For Manufacturers
          </h3>
          <div class="breadcrumb-wrap">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">
                <a href="page-products.html">shop</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                MUST, Off-Grid Solutions
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="single-product" id="single-product">
    <div class="container">
      <div class="row">
        <!-- <div class="col-12">
<div class="checkout-banner">
<p>"Flow Sensor" has been added to your cart</p><a class="btn btn--primary justify-content-center" href="shop-cart.html">view cart</a>
</div>
</div> -->
        <div class="col-12 col-lg-6">
          <div class="product-img">
            <img
              class="img-fluid"
              src="{{ asset('public/Image') .'/'.$product->image }}"
              alt="product image"
            /><a
              class="img-popup"
              href="{{ asset('public/Image') .'/'.$product->image }}"
              alt="product image"
            ></a>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="product-content">
            <div class="product-title">
              <h3>MUST, Off-Grid Solutions</h3>
            </div>

            <div class="product-review">
              <div class="product-rating">
                <i class="fas fa-star active"></i
                ><i class="fas fa-star active"></i
                ><i class="fas fa-star active"></i
                ><i class="fas fa-star active"></i
                ><i class="fas fa-star"></i>
              </div>
              <!-- <span>5 Review(s)</span
              ><span><a href="#">Add Review</a></span> -->
            </div>

            <!-- <div class="product-price"><span>$15.00</span></div> -->

            <div class="product-desc">
              <p>
                Must Power, an innovative high technology company, specializes in R&D, manufacturing and marketing of photovoltaic (PV) inverters, Solar charge controller, Solar battery and some other related Solar products. Our innovative solutions for all photovoltaic applications and our unsurpassed service offer our customers worldwide greater independence in meeting their energy needs.
Must Power Limited established in 1998, with the headquarter in Hongkong. products have passed SAA,CE, SONCAP certificate and ISO9001 quality certificate.

              </p>
            </div>

            <!-- <div class="product-action">
<div class="product-quantity">
<input class="pro-qunt" type="text" value="2" readonly="" data-max="10" data-min="1" data-step="1" /><span><a class="minus" href="javascript:void(0)"><i class="fa fa-minus"></i></a><a class="plus" href="javascript:void(0)"><i class="fa fa-plus"></i></a></span>
</div><a class="btn btn--secondary justify-content-center" href="#">add to cart</a>
</div> -->

            <div class="product-details">
              <table class="table">
                <tbody>
                  <tr>
                    <td class="name">SKU:</td>
                    <td class="value">{{ $product->sku }}</td>
                  </tr>
                  <tr>
                    <td class="name">category:</td>
                    <td class="value">{{ $product->category->title_en }}</td>
                  </tr>
                  <tr>
                    <td class="name">tags:</td>
                    {{-- @foreach ($product->tags as $tag) --}}
                        <td class="value">{{ $product->tags}}</td>
                    {{-- @endforeach --}}
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="product-share">
              <a class="facebook-bg" href="javascript:void(0)"
                ><i class="fab fa-facebook-f"></i></a
              ><a class="twitter-bg" href="javascript:void(0)"
                ><i class="fab fa-twitter"></i></a
              ><a class="pinterest-bg" href="javascript:void(0)"
                ><i class="fab fa-pinterest"></i></a
              ><a class="instagram-bg" href="javascript:void(0)"
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-10 offset-lg-1">
          <div class="product-tabs">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation">
                <a
                  class="active"
                  href="#description"
                  data-bs-target="#description"
                  aria-controls="description"
                  role="tab"
                  data-bs-toggle="tab"
                  aria-selected="true"
                  >description</a
                >
              </li>
              <li role="presentation">
                <a
                  href="#details"
                  data-bs-target="#details"
                  aria-controls="details"
                  role="tab"
                  data-bs-toggle="tab"
                  aria-selected="false"
                  >additional information</a
                >
              </li>
              <!-- <li role="presentation"><a href="#reviews" data-bs-target="#reviews" aria-controls="reviews" role="tab" data-bs-toggle="tab" aria-selected="false">reviews(2)</a></li> -->
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="description" role="tabpanel">
                <p>{{ $product->desc_en }}</p>
              </div>

              <div class="tab-pane" id="details" role="tabpanel">
                <h5>Technical Details</h5>
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td>Part Number</td>
                      <td>{{ $product->part_number }}</td>
                    </tr>
                    <tr>
                      <td>Item Weight</td>
                      <td>{{ $product->weight }}</td>
                    </tr>
                    <tr>
                      <td>Product Dimensions</td>
                      <td>{{ $product->dimensions }}</td>
                    </tr>
                    <tr>
                      <td>Item model number</td>
                      <td>{{ $product->model_number }}</td>
                    </tr>
                    <tr>
                      <td>Item Package Quantity</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Number of Handles</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Batteries Required?</td>
                      <td>No</td>
                    </tr>
                  </tbody>
                </table>
                <div class="d-flex justify-content-end">
                  <a class="btn btn--primary btn-center" href="#">
                    download</a>
                </div>
              </div>

              <div class="tab-pane reviews" id="reviews" role="tabpanel">
                <ul class="product-review list-unstyled">
                  <li class="review-comment">
                    <div class="review-body">
                      <img
                        src="assets/images/shop/author.jpg"
                        alt="author"
                      />
                      <div>
                        <h6>Marko Smith</h6>
                        <p class="review-date">22/02/2016</p>
                        <div class="product-rating">
                          <i class="fa fa-star active"></i
                          ><i class="fa fa-star active"></i
                          ><i class="fa fa-star active"></i
                          ><i class="fa fa-star"></i
                          ><i class="fa fa-star"></i>
                        </div>
                      </div>
                    </div>
                    <div class="product-comment">
                      <p>
                        Lorem ipsum dolor sit amet, mauris suspendisse
                        viverra eleifend tortor tellus suscipit, tortor
                        aliquet at nulla mus, dignissim neque, nulla neque.
                        Ultrices proin mi urna nibh ut, aenean sollicitudin
                        etiam libero nisl, ultrices ridiculus in magna purus
                        consequuntur, ipsum donec orci ad vitae pede, id
                        odio.
                      </p>
                    </div>
                  </li>

                  <li class="review-comment">
                    <div class="review-body">
                      <img
                        src="assets/images/shop/author.jpg"
                        alt="author"
                      />
                      <div>
                        <h6>Mohamed Habaza</h6>
                        <p class="review-date">21/02/2016</p>
                        <div class="product-rating">
                          <i class="fa fa-star active"></i
                          ><i class="fa fa-star active"></i
                          ><i class="fa fa-star active"></i
                          ><i class="fa fa-star active"></i
                          ><i class="fa fa-star active"></i>
                        </div>
                      </div>
                    </div>
                    <div class="product-comment">
                      <p>
                        Lorem ipsum dolor sit amet, mauris suspendisse
                        viverra eleifend tortor tellus suscipit, tortor
                        aliquet at nulla mus, dignissim neque, nulla neque.
                        Ultrices proin mi urna nibh ut, aenean sollicitudin
                        etiam libero nisl, ultrices ridiculus in magna purus
                        consequuntur, ipsum donec orci ad vitae pede, id
                        odio.
                      </p>
                    </div>
                  </li>
                </ul>
                <div class="form-review">
                  <form>
                    <input
                      class="form-control"
                      id="name"
                      type="text"
                      placeholder="Your Name"
                    />
                    <input
                      class="form-control"
                      id="email"
                      type="email"
                      placeholder="Your Email"
                    />
                    <select class="form-control w-100">
                      <option selected="" value="Default">
                        Your Rating
                      </option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <textarea
                      class="form-control"
                      id="review"
                      rows="2"
                      placeholder="your Review"
                    ></textarea>
                    <button
                      class="btn btn--secondary btn-block"
                      type="submit"
                    >
                      Post Your review
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="shop shop-2">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h5>related products</h5>
        </div>
      </div>
      {{-- @foreach ($related as $item) --}}

      <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="product-item" data-hover="">
            <div class="product-img-wrap">
              <div class="product-img">
                <img src="assets/images/shop/grid/2.jpg" alt="Product" />
                <!-- <a
                  class="add-to-cart"
                  href="#"
                  ><i class="fas fa-shopping-cart"></i> add to cart</a
                ><span class="badge d-none"></span> -->
              </div>
            </div>

            <div class="product-content">
              <div class="product-title">
                <a href="shop-single.html"></a>
              </div>

              <!-- <div class="product-price"><span>$325.00</span></div> -->
            </div>
          </div>
        </div>
        {{-- <div class="col-12 col-md-6 col-lg-3">
          <div class="product-item" data-hover="">
            <div class="product-img-wrap">
              <div class="product-img">
                <img src="assets/images/shop/grid/3.jpg" alt="Product" />
                <!-- <a
                  class="add-to-cart"
                  href="#"
                  ><i class="fas fa-shopping-cart"></i> add to cart</a
                ><span class="badge badge-new">new</span> -->
              </div>
            </div>

            <div class="product-content">
              <div class="product-title">
                <a href="shop-single.html">NewMax, Batteries</a>
              </div>

              <!-- <div class="product-price"><span>$44.00</span></div> -->
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-12 col-md-6 col-lg-3">
          <div class="product-item" data-hover="">
            <div class="product-img-wrap">
              <div class="product-img">
                <img src="assets/images/shop/grid/4.jpg" alt="Product" />
                <!-- <a
                  class="add-to-cart"
                  href="#"
                  ><i class="fas fa-shopping-cart"></i> add to cart</a
                ><span class="badge d-none"></span> -->
              </div>
            </div>

            <div class="product-content">
              <div class="product-title">
                <a href="shop-single.html">MUST, Off-Grid Solutions</a>
              </div>

              <!-- <div class="product-price"><span>$295.00</span></div> -->
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-12 col-md-6 col-lg-3">
          <div class="product-item" data-hover="">
            <div class="product-img-wrap">
              <div class="product-img">
                <img src="assets/images/shop/grid/5.jpg" alt="Product" />
                <!-- <a
                  class="add-to-cart"
                  href="#"
                  ><i class="fas fa-shopping-cart"></i> add to cart</a
                ><span class="badge badge-sale">sale</span> -->
              </div>
            </div>

            <div class="product-content">
              <div class="product-title">
                <a href="shop-single.html">Huawei On-Grid Inverter</a>
              </div>

              <!-- <div class="product-price"><span>$55.00</span></div> -->
            </div>
          </div>
        </div> --}}
      </div>
      {{-- @endforeach --}}
    </div>
  </section>

@endsection
