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
                <div class="col-12 col-lg-6">
                    <div class="main-slider">
                        @foreach($product->images as $image)
                        <div class="product-img">
                            <img
                                class="img-fluid"
                                src="{{ asset($image) }}"
                                alt="product image"
                            />
                            <a
                                class="img-popup"
                                src="{{ asset($image) }}"
                                alt="product image"
                            ></a>
                        </div>
                        @endforeach
                    </div>
                    <div class="small-slider">
                        @foreach($product->images as $image)
                        <img
                            class="img-fluid"
                            src="{{ asset($image) }}"
                            alt="product image"
                        />
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="product-content">
                        <div class="product-title">
                            <h3>{{ trans_model($product ,'title') }}</h3>
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
                                {{ trans_model($product ,'sub_title') }}
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
                                    <td class="value">{{ lang() == 'ar' ? $product->category->title_ar :$product->category->title_en }}</td>
                                </tr>
                                <tr>
                                    <td class="name">tags:</td>
                                    <td class="value">{{ $product->tags }}</td>
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
                                >specification information</a
                                >
                            </li>
                            <!-- <li role="presentation"><a href="#reviews" data-bs-target="#reviews" aria-controls="reviews" role="tab" data-bs-toggle="tab" aria-selected="false">reviews(2)</a></li> -->
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="description" role="tabpanel">
                                <p>
                                    {{ trans_model($product ,'desc') }}
                                </p>
                            </div>

                            <div class="tab-pane" id="details" role="tabpanel">
                                <div class="html2pdf">
                                    <h5>Technical Details</h5>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td>Part Number</td>
                                            <td>{{ $product->part_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Item Weight</td>
                                            <td>{{ $product->weight }} pounds</td>
                                        </tr>
                                        <tr>
                                            <td>Product Dimensions</td>
                                            <td>{{ $product->dimensions }} inches</td>
                                        </tr>
                                        <tr>
                                            <td>Item model number</td>
                                            <td>{{ $product->model_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Batteries Required?</td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <button class="pdf" onclick="PrintDiv('html2pdf')">
                                        download pdf
                                    </button>
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
            <div class="row">
                @foreach ($products as $item)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-item" data-hover="">
                        <div class="product-img-wrap">
                            <div class="product-img">
                                <img src="{{ asset($item->images[0]) }}" alt="Product"/>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-title">
                                <a href="{{ route('get.product', $item->id) }}">{{ trans_model($item,'title') }}</a>
                            </div>
                            <!-- <div class="product-price"><span>$325.00</span></div> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
