@extends('layouts.frontend_product')

@section('content')
    <!-- Start main Slider & add banner  -->
    <section class="py-3"
        style="background-image: url('images/background-pattern.jpg');background-repeat: no-repeat;background-size: cover;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="banner-blocks">

                        <div class="banner-ad large bg-info block-1">

                            <div class="swiper main-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row banner-content p-5">
                                            <div class="content-wrapper col-md-7">
                                                <div class="categories mb-3 pb-3">100% natural</div>
                                                <h3 class="banner-title">Insus Blakdots Energy Drinks</h3>
                                                <p>Being With Insus Group Foodmart To Get Natural & Authenthic Products</p>
                                                <a href="#"
                                                    class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop
                                                    Now</a>
                                            </div>
                                            <div class="img-wrapper col-md-5">
                                                <img style="width: 379px; height: 566px;"
                                                    src="{{ asset('front_assets') }}/images/product-site/products/backdots-removebg.png"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="row banner-content p-5">
                                            <div class="content-wrapper col-md-7">
                                                <div class="categories my-3">100% natural</div>
                                                <h3 class="display-4">Insus Smoothie & Summer Juice</h3>
                                                <p>Being With Insus Group Foodmart To Get Natural & Authenthic Products </p>
                                                <a href="#"
                                                    class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop
                                                    Now</a>
                                            </div>
                                            <div class="img-wrapper col-md-5">
                                                <img src="{{ asset('front_assets') }}/images/product-site/product-thumb-1.png"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row banner-content p-5">
                                            <div class="content-wrapper col-md-7">
                                                <div class="categories mb-3 pb-3">100% natural</div>
                                                <h3 class="banner-title">Insus Blakdots Energy Drinks</h3>
                                                <p>Being With Insus Group Foodmart To Get Natural & Authenthic Products</p>
                                                <a href="#"
                                                    class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop
                                                    Now</a>
                                            </div>
                                            <div class="img-wrapper col-md-5">
                                                <img style="width: 379px; height: 566px;"
                                                    src="{{ asset('front_assets') }}/images/product-site/products/backdots-removebg.png"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="swiper-slide">
                          <div class="row banner-content p-5">
                            <div class="content-wrapper col-md-7">
                              <div class="categories mb-3 pb-3">100% natural</div>
                              <h3 class="banner-title">Insus Smoothie & Summer Juice</h3>
                              <p>Being With Insus Group Foodmart To Get Natural & Authenthic Products</p>
                              <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop Collection</a>
                            </div>
                            <div class="img-wrapper col-md-5">
                              <img src="{{ asset('front_assets') }}/images/product-site/product-thumb-1.png" class="img-fluid">
                            </div>
                          </div>
                        </div> -->

                                </div>

                                <div class="swiper-pagination"></div>

                            </div>
                        </div>

                        <div class="banner-ad bg-success-subtle block-2"
                            style="background:url('images/ad-image-1.png') no-repeat;background-position: right bottom">
                            <div class="row banner-content p-5">

                                <div class="content-wrapper col-md-7">
                                    <div class="categories sale mb-3 pb-3">20% off</div>
                                    <h3 class="banner-title">Fruits & Vegetables</h3>
                                    <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg
                                            width="24" height="24">
                                            <use xlink:href="#arrow-right"></use>
                                        </svg></a>
                                </div>

                            </div>
                        </div>

                        <div class="banner-ad bg-danger block-3"
                            style="background:url('images/ad-image-2.png') no-repeat;background-position: right bottom">
                            <div class="row banner-content p-5">

                                <div class="content-wrapper col-md-7">
                                    <div class="categories sale mb-3 pb-3">15% off</div>
                                    <h3 class="item-title">Baked Products</h3>
                                    <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg
                                            width="24" height="24">
                                            <use xlink:href="#arrow-right"></use>
                                        </svg></a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- / Banner Blocks -->

                </div>
            </div>
        </div>
    </section>

    <!-- Start Catagory -->

    <!-- <section class="py-5 overflow-hidden">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">

                <div class="section-header d-flex flex-wrap justify-content-between mb-5">
                  <h2 class="section-title">Category</h2>

                  <div class="d-flex align-items-center">
                    <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
                    <div class="swiper-buttons">
                      <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
                      <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-md-12">

                <div class="category-carousel swiper">
                  <div class="swiper-wrapper">
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-vegetables-broccoli.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-bread-baguette.png" alt="Category Thumbnail">
                      <h3 class="category-title">Breads & Sweets</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-soft-drinks-bottle.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-wine-glass-bottle.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-animal-products-drumsticks.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-bread-herb-flour.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-vegetables-broccoli.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-vegetables-broccoli.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-vegetables-broccoli.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-vegetables-broccoli.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-vegetables-broccoli.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>
                    <a href="index.html" class="nav-link category-item swiper-slide">
                      <img src="{{ asset('front_assets') }}/images/product-site/icon-vegetables-broccoli.png" alt="Category Thumbnail">
                      <h3 class="category-title">Fruits & Veges</h3>
                    </a>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </section> -->

    <!-- End Catagory -->

    <!-- Start Newly Arrived Brands -->
    <section class="py-5 overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header d-flex flex-wrap justify-content-between mb-5">

                        <h2 class="section-title">Newly Arrived Brands</h2>

                        <div class="d-flex align-items-center">
                            <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
                            <div class="swiper-buttons">
                                <button class="swiper-prev brand-carousel-prev btn btn-yellow">❮</button>
                                <button class="swiper-next brand-carousel-next btn btn-yellow">❯</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="brand-carousel swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('front_assets') }}/images/product-site/product-thumb-11.jpg"
                                                class="img-fluid rounded" alt="Card title">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body py-0">
                                                <p class="text-muted mb-0">Insus Honey Jar</p>
                                                <h5 class="card-title">Honey best nectar you wish to get</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('front_assets') }}/images/product-site/products/backdots.jpg"
                                                class="img-fluid rounded" alt="Card title">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body py-0">
                                                <p class="text-muted mb-0">Insus Honey Jar</p>
                                                <h5 class="card-title">Honey best nectar you wish to get</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('front_assets') }}/images/product-site/product-thumb-11.jpg"
                                                class="img-fluid rounded" alt="Card title">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body py-0">
                                                <p class="text-muted mb-0">Insus Honey Jar</p>
                                                <h5 class="card-title">Honey best nectar you wish to get</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('front_assets') }}/images/product-site/products/backdots.jpg"
                                                class="img-fluid rounded" alt="Card title">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body py-0">
                                                <p class="text-muted mb-0">Insus Honey Jar</p>
                                                <h5 class="card-title">Honey best nectar you wish to get</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('front_assets') }}/images/product-site/product-thumb-11.jpg"
                                                class="img-fluid rounded" alt="Card title">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body py-0">
                                                <p class="text-muted mb-0">Insus Honey Jar</p>
                                                <h5 class="card-title">Honey best nectar you wish to get</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Start Trending Products -->
    <section class="py-5">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <div class="bootstrap-tabs product-tabs">
                        <div class="tabs-header d-flex justify-content-between border-bottom my-5">
                            <h3>Trending Products</h3>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a href="#" class="nav-link text-uppercase fs-6 active" id="nav-all-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-all">All</a>
                                    <a href="#" class="nav-link text-uppercase fs-6" id="nav-fruits-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-fruits">Fruits & Veges</a>
                                    <a href="#" class="nav-link text-uppercase fs-6" id="nav-juices-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-juices">Juices</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                aria-labelledby="nav-all-tab">

                                <div
                                    class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                                    <div class="col">
                                        <div class="product-item">
                                            <span class="badge bg-success position-absolute m-3">-30%</span>
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/products/backdots.jpg"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Blackdots Energy Drinks</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <span class="badge bg-success position-absolute m-3">-30%</span>
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/products/biscut1.jpg"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Biscuits</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/products/chllipowder.jpg"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>chllipowder</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/products/cookingoil1.jpg"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>cooking oil</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/products/cpicy1.jpg"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>spciecy masala</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-biscuits.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Biscuits</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/products/flour.jpg"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Flour</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-milk.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Milk</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/products/holud.jpg"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Turmeric Powder</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/products/pch1.jpg"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Chipy Chips</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- / product-grid -->

                            </div>

                            <div class="tab-pane fade" id="nav-fruits" role="tabpanel" aria-labelledby="nav-fruits-tab">

                                <div
                                    class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                                    <div class="col">
                                        <div class="product-item">
                                            <span class="badge bg-success position-absolute m-3">-30%</span>
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-cucumber.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <span class="badge bg-success position-absolute m-3">-30%</span>
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-milk.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <span class="badge bg-success position-absolute m-3">-30%</span>
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-orange-juice.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-raspberries.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-bananas.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-bananas.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- / product-grid -->

                            </div>
                            <div class="tab-pane fade" id="nav-juices" role="tabpanel" aria-labelledby="nav-juices-tab">

                                <div
                                    class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-cucumber.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-milk.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24"
                                                    height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-tomatoes.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24"
                                                    height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-tomatoketchup.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24"
                                                    height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-bananas.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="product-item">
                                            <a href="#" class="btn-wishlist"><svg width="24"
                                                    height="24">
                                                    <use xlink:href="#heart"></use>
                                                </svg></a>
                                            <figure>
                                                <a href="index.html" title="Product Title">
                                                    <img src="{{ asset('front_assets') }}/images/product-site/thumb-bananas.png"
                                                        class="tab-image">
                                                </a>
                                            </figure>
                                            <h3>Sunstar Fresh Melon Juice</h3>
                                            <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                                    height="24" class="text-primary">
                                                    <use xlink:href="#star-solid"></use>
                                                </svg> 4.5</span>
                                            <span class="price">$18.00</span>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="input-group product-qty">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#minus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity"
                                                        class="form-control input-number" value="1">
                                                    <span class="input-group-btn">
                                                        <button type="button"
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus">
                                                            <svg width="16" height="16">
                                                                <use xlink:href="#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="#" class="nav-link">Add to Cart <iconify-icon
                                                        icon="uil:shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- / product-grid -->

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Start Discount Show -->
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6">
                    <div class="banner-ad bg-danger mb-3"
                        style="background: url('images/ad-image-3.png');background-repeat: no-repeat;background-position: right bottom;">
                        <div class="banner-content p-5">

                            <div class="categories text-primary fs-3 fw-bold">Upto 25% Off</div>
                            <h3 class="banner-title">Dark Chocolate</h3>
                            <p>Very tasty & creamy Dark Chocolate </p>
                            <a href="#" class="btn btn-dark text-uppercase">Show Now</a>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-ad bg-info"
                        style="background: url('images/ad-image-4.png');background-repeat: no-repeat;background-position: right bottom;">
                        <div class="banner-content p-5">

                            <div class="categories text-primary fs-3 fw-bold">Upto 25% Off</div>
                            <h3 class="banner-title">Creamy Muffins</h3>
                            <p>Very tasty & creamy vanilla flavour creamy muffins.</p>
                            <a href="#" class="btn btn-dark text-uppercase">Show Now</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Start Best selling products -->
    <section class="py-5 overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header d-flex flex-wrap justify-content-between my-5">

                        <h2 class="section-title">Best selling products</h2>

                        <div class="d-flex align-items-center">
                            <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
                            <div class="swiper-buttons">
                                <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                                <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="products-carousel swiper">
                        <div class="swiper-wrapper">

                            <div class="product-item swiper-slide">
                                <span class="badge bg-success position-absolute m-3">-15%</span>
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/pch1.jpg"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Chipy Chips</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>

                            <div class="product-item swiper-slide">
                                <span class="badge bg-success position-absolute m-3">-15%</span>
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/biscut1.jpg"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Biscuits</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>

                            <div class="product-item swiper-slide">
                                <span class="badge bg-success position-absolute m-3">-15%</span>
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/cookingoil1.jpg"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>cooking oil</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>

                            <div class="product-item swiper-slide">
                                <span class="badge bg-success position-absolute m-3">-15%</span>
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/hairoil1.jpg"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Hair Oil</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <span class="badge bg-success position-absolute m-3">-15%</span>
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/chllipowder.jpg"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>chlli powder</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <span class="badge bg-success position-absolute m-3">-15%</span>
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/pw1.jpg"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Chipy Chips</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <span class="badge bg-success position-absolute m-3">-15%</span>
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/pch1.jpg"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Chipy Chips</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- / products-carousel -->

                </div>
            </div>
        </div>
    </section>


    <!-- Start Most popular products -->

    <!-- <section class="py-5 overflow-hidden">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">

                <div class="section-header d-flex justify-content-between">

                  <h2 class="section-title">Most popular products</h2>

                  <div class="d-flex align-items-center">
                    <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
                    <div class="swiper-buttons">
                      <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                      <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-md-12">

                <div class="products-carousel swiper">
                  <div class="swiper-wrapper">

                    <div class="product-item swiper-slide">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24"><use xlink:href="#heart"></use></svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="{{ asset('front_assets') }}/images/product-site/thumb-tomatoes.png"  class="tab-image">
                        </a>
                      </figure>
                      <h3>Sunstar Fresh Melon Juice</h3>
                      <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> 4.5</span>
                      <span class="price">$18.00</span>
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                  <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                    <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                </button>
                            </span>
                        </div>
                        <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                      </div>
                    </div>

                    <div class="product-item swiper-slide">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24"><use xlink:href="#heart"></use></svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="{{ asset('front_assets') }}/images/product-site/thumb-tomatoketchup.png"  class="tab-image">
                        </a>
                      </figure>
                      <h3>Sunstar Fresh Melon Juice</h3>
                      <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> 4.5</span>
                      <span class="price">$18.00</span>
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                  <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                    <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                </button>
                            </span>
                        </div>
                        <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                      </div>
                    </div>

                    <div class="product-item swiper-slide">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24"><use xlink:href="#heart"></use></svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="{{ asset('front_assets') }}/images/product-site/thumb-bananas.png"  class="tab-image">
                        </a>
                      </figure>
                      <h3>Sunstar Fresh Melon Juice</h3>
                      <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> 4.5</span>
                      <span class="price">$18.00</span>
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                  <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                    <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                </button>
                            </span>
                        </div>
                        <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                      </div>
                    </div>

                    <div class="product-item swiper-slide">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24"><use xlink:href="#heart"></use></svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="{{ asset('front_assets') }}/images/product-site/thumb-bananas.png"  class="tab-image">
                        </a>
                      </figure>
                      <h3>Sunstar Fresh Melon Juice</h3>
                      <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> 4.5</span>
                      <span class="price">$18.00</span>
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                  <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                    <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                </button>
                            </span>
                        </div>
                        <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                      </div>
                    </div>
                    <div class="product-item swiper-slide">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24"><use xlink:href="#heart"></use></svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="{{ asset('front_assets') }}/images/product-site/thumb-tomatoes.png"  class="tab-image">
                        </a>
                      </figure>
                      <h3>Sunstar Fresh Melon Juice</h3>
                      <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> 4.5</span>
                      <span class="price">$18.00</span>
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                  <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                    <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                </button>
                            </span>
                        </div>
                        <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                      </div>
                    </div>

                    <div class="product-item swiper-slide">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24"><use xlink:href="#heart"></use></svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="{{ asset('front_assets') }}/images/product-site/thumb-tomatoketchup.png"  class="tab-image">
                        </a>
                      </figure>
                      <h3>Sunstar Fresh Melon Juice</h3>
                      <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> 4.5</span>
                      <span class="price">$18.00</span>
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                  <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                    <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                </button>
                            </span>
                        </div>
                        <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                      </div>
                    </div>

                    <div class="product-item swiper-slide">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24"><use xlink:href="#heart"></use></svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="{{ asset('front_assets') }}/images/product-site/thumb-bananas.png"  class="tab-image">
                        </a>
                      </figure>
                      <h3>Sunstar Fresh Melon Juice</h3>
                      <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> 4.5</span>
                      <span class="price">$18.00</span>
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                  <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                    <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                </button>
                            </span>
                        </div>
                        <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                      </div>
                    </div>

                    <div class="product-item swiper-slide">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24"><use xlink:href="#heart"></use></svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="{{ asset('front_assets') }}/images/product-site/thumb-bananas.png"  class="tab-image">
                        </a>
                      </figure>
                      <h3>Sunstar Fresh Melon Juice</h3>
                      <span class="qty">1 Unit</span><span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> 4.5</span>
                      <span class="price">$18.00</span>
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                  <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                    <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                </button>
                            </span>
                        </div>
                        <a href="#" class="nav-link">Add to Cart <iconify-icon icon="uil:shopping-cart"></a>
                      </div>
                    </div>

                  </div>
                </div>
                / products-carousel

              </div>
            </div>
          </div>
        </section> -->

    <!-- Start Just arrived -->
    <section class="py-5 overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header d-flex justify-content-between">

                        <h2 class="section-title">Just arrived</h2>

                        <div class="d-flex align-items-center">
                            <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
                            <div class="swiper-buttons">
                                <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                                <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="products-carousel swiper">
                        <div class="swiper-wrapper">

                            <div class="product-item swiper-slide">
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/thumb-tomatoes.png"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Tomatoes</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>

                            <div class="product-item swiper-slide">
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/salt.jpg"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Salt</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>

                            <div class="product-item swiper-slide">
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/thumb-bananas.png"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Bananas</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>

                            <div class="product-item swiper-slide">
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/pc1.jpg"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Chanacur</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/backdots-removebg.png"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Blackdots Energy Drinks</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/products/cpicy1.jpg"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>spciecy masala</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>
                            <div class="product-item swiper-slide">
                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('front_assets') }}/images/product-site/thumb-tomatoes.png"
                                            class="tab-image">
                                    </a>
                                </figure>
                                <h3>Tomatoes</h3>
                                <span class="qty">1 Unit</span><span class="rating"><svg width="24"
                                        height="24" class="text-primary">
                                        <use xlink:href="#star-solid"></use>
                                    </svg> 4.5</span>
                                <span class="price">$18.00</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                                data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button"
                                                class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Add to Cart <iconify-icon
                                            icon="uil:shopping-cart"></a>
                                </div>
                            </div>









                        </div>
                    </div>
                    <!-- / products-carousel -->

                </div>
            </div>
        </div>
    </section>


    <!-- Start Product Blog -->

    <!-- <section id="latest-blog" class="py-5">
          <div class="container-fluid">
            <div class="row">
              <div class="section-header d-flex align-items-center justify-content-between my-5">
                <h2 class="section-title">Our Recent Blog</h2>
                <div class="btn-wrap align-right">
                  <a href="#" class="d-flex align-items-center nav-link">Read All Articles <svg width="24" height="24"><use xlink:href="#arrow-right"></use></svg></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                  <div class="image-holder zoom-effect">
                    <a href="#">
                      <img src="{{ asset('front_assets') }}/images/product-site/post-thumb-1.jpg" alt="post" class="card-img-top">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                      <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>22 Aug 2021</div>
                      <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>tips & tricks</div>
                    </div>
                    <div class="post-header">
                      <h3 class="post-title">
                        <a href="#" class="text-decoration-none">Top 10 casual look ideas to dress up your kids</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                  <div class="image-holder zoom-effect">
                    <a href="#">
                      <img src="{{ asset('front_assets') }}/images/product-site/post-thumb-2.jpg" alt="post" class="card-img-top">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                      <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>25 Aug 2021</div>
                      <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>trending</div>
                    </div>
                    <div class="post-header">
                      <h3 class="post-title">
                        <a href="#" class="text-decoration-none">Latest trends of wearing street wears supremely</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                  <div class="image-holder zoom-effect">
                    <a href="#">
                      <img src="{{ asset('front_assets') }}/images/product-site/post-thumb-3.jpg" alt="post" class="card-img-top">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                      <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>28 Aug 2021</div>
                      <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>inspiration</div>
                    </div>
                    <div class="post-header">
                      <h3 class="post-title">
                        <a href="#" class="text-decoration-none">10 Different Types of comfortable clothes ideas for women</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section> -->

    <!-- End Product Blog -->

    <!-- Start Mobile App -->

    <!-- <section class="py-5 my-5">
          <div class="container-fluid">

            <div class="bg-warning py-5 rounded-5" style="background-image: url('images/bg-pattern-2.png') no-repeat;">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <img src="{{ asset('front_assets') }}/images/product-site/phone.png" alt="phone" class="image-float img-fluid">
                  </div>
                  <div class="col-md-8">
                    <h2 class="my-5">Shop faster with foodmart App</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis sed ptibus liberolectus nonet psryroin. Amet sed lorem posuere sit iaculis amet, ac urna. Adipiscing fames semper erat ac in suspendisse iaculis. Amet blandit tortor praesent ante vitae. A, enim pretiummi senectus magna. Sagittis sed ptibus liberolectus non et psryroin.</p>
                    <div class="d-flex gap-2 flex-wrap">
                      <img src="{{ asset('front_assets') }}/images/product-site/app-store.jpg" alt="app-store">
                      <img src="{{ asset('front_assets') }}/images/product-site/google-play.jpg" alt="google-play">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section> -->

    <!-- End Mobile App -->

    <!-- Start Discount Subscriber -->
    <section class="py-5">
        <div class="container-fluid">

            <div class="bg-secondary py-5 my-5 rounded-5"
                style="background: url('images/bg-leaves-img-pattern.png') no-repeat;">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-6 p-5">
                            <div class="section-header">
                                <h2 class="section-title display-4">Get <span class="text-primary">25% Discount</span>
                                    on your first purchase</h2>
                            </div>
                            <p>Being With Insus Group Foodmart To Get More Discount</p>
                        </div>
                        <div class="col-md-6 p-5">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name"
                                        id="name" placeholder="Enter Your Name">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email"
                                        id="email" placeholder="Enter Your Email">
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <label class="form-check-label" for="subscribe">
                                        <input class="form-check-input" type="checkbox" id="subscribe"
                                            value="subscribe">
                                        Subscribe to the newsletter</label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-dark btn-lg">Submit</button>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Section Guarantee -->
    <section class="py-5">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5">
                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="row">
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="footer-menu">
                                            <a href="index.html"><img style="width: auto; height: 150px;"
                                                    src="{{ asset('front_assets') }}/images/product-site/logo2.png"
                                                    alt="logo"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="row">
                            <div class="col-md-2 text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19.63 3.65a1 1 0 0 0-.84-.2a8 8 0 0 1-6.22-1.27a1 1 0 0 0-1.14 0a8 8 0 0 1-6.22 1.27a1 1 0 0 0-.84.2a1 1 0 0 0-.37.78v7.45a9 9 0 0 0 3.77 7.33l3.65 2.6a1 1 0 0 0 1.16 0l3.65-2.6A9 9 0 0 0 20 11.88V4.43a1 1 0 0 0-.37-.78ZM18 11.88a7 7 0 0 1-2.93 5.7L12 19.77l-3.07-2.19A7 7 0 0 1 6 11.88v-6.3a10 10 0 0 0 6-1.39a10 10 0 0 0 6 1.39Zm-4.46-2.29l-2.69 2.7l-.89-.9a1 1 0 0 0-1.42 1.42l1.6 1.6a1 1 0 0 0 1.42 0L15 11a1 1 0 0 0-1.42-1.42Z" />
                                </svg>
                            </div>
                            <div class="col-md-10">
                                <div class="card-body p-0">
                                    <h5>100% secure payment</h5>
                                    <p class="card-text">Being With Insus Group Foodmart To Get Natural & Authenthic
                                        Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="row">
                            <div class="col-md-2 text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M22 5H2a1 1 0 0 0-1 1v4a3 3 0 0 0 2 2.82V22a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-9.18A3 3 0 0 0 23 10V6a1 1 0 0 0-1-1Zm-7 2h2v3a1 1 0 0 1-2 0Zm-4 0h2v3a1 1 0 0 1-2 0ZM7 7h2v3a1 1 0 0 1-2 0Zm-3 4a1 1 0 0 1-1-1V7h2v3a1 1 0 0 1-1 1Zm10 10h-4v-2a2 2 0 0 1 4 0Zm5 0h-3v-2a4 4 0 0 0-8 0v2H5v-8.18a3.17 3.17 0 0 0 1-.6a3 3 0 0 0 4 0a3 3 0 0 0 4 0a3 3 0 0 0 4 0a3.17 3.17 0 0 0 1 .6Zm2-11a1 1 0 0 1-2 0V7h2ZM4.3 3H20a1 1 0 0 0 0-2H4.3a1 1 0 0 0 0 2Z" />
                                </svg>
                            </div>
                            <div class="col-md-10">
                                <div class="card-body p-0">
                                    <h5>Quality guarantee</h5>
                                    <p class="card-text">Being With Insus Group Foodmart To Get Natural & Authenthic
                                        Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="row">
                            <div class="col-md-2 text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 8.35a3.07 3.07 0 0 0-3.54.53a3 3 0 0 0 0 4.24L11.29 16a1 1 0 0 0 1.42 0l2.83-2.83a3 3 0 0 0 0-4.24A3.07 3.07 0 0 0 12 8.35Zm2.12 3.36L12 13.83l-2.12-2.12a1 1 0 0 1 0-1.42a1 1 0 0 1 1.41 0a1 1 0 0 0 1.42 0a1 1 0 0 1 1.41 0a1 1 0 0 1 0 1.42ZM12 2A10 10 0 0 0 2 12a9.89 9.89 0 0 0 2.26 6.33l-2 2a1 1 0 0 0-.21 1.09A1 1 0 0 0 3 22h9a10 10 0 0 0 0-20Zm0 18H5.41l.93-.93a1 1 0 0 0 0-1.41A8 8 0 1 1 12 20Z" />
                                </svg>
                            </div>
                            <div class="col-md-10">
                                <div class="card-body p-0">
                                    <h5>guaranteed savings</h5>
                                    <p class="card-text">Being With Insus Group Foodmart To Get Natural & Authenthic
                                        Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="row">
                            <div class="col-md-2 text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M18 7h-.35A3.45 3.45 0 0 0 18 5.5a3.49 3.49 0 0 0-6-2.44A3.49 3.49 0 0 0 6 5.5A3.45 3.45 0 0 0 6.35 7H6a3 3 0 0 0-3 3v2a1 1 0 0 0 1 1h1v6a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3v-6h1a1 1 0 0 0 1-1v-2a3 3 0 0 0-3-3Zm-7 13H8a1 1 0 0 1-1-1v-6h4Zm0-9H5v-1a1 1 0 0 1 1-1h5Zm0-4H9.5A1.5 1.5 0 1 1 11 5.5Zm2-1.5A1.5 1.5 0 1 1 14.5 7H13ZM17 19a1 1 0 0 1-1 1h-3v-7h4Zm2-8h-6V9h5a1 1 0 0 1 1 1Z" />
                                </svg>
                            </div>
                            <div class="col-md-10">
                                <div class="card-body p-0">
                                    <h5>Daily offers</h5>
                                    <p class="card-text">Being With Insus Group Foodmart To Get Natural & Authenthic
                                        Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
